<?php

/*
* +----------------------------------------------------------------------+
* | Copyright (c) 国美互联网 - 视频事业部
* +----------------------------------------------------------------------+
* | All rights reserved.
* +----------------------------------------------------------------------+
* | @程序名称：Login.php
* +----------------------------------------------------------------------+
* | @程序功能：
* +----------------------------------------------------------------------+
* | Author:JadeGlorious <wujing01@gomeplus.com>
* +----------------------------------------------------------------------+
* | Date: 2017/4/21 22:11
* +----------------------------------------------------------------------+
*/
use Yaf\Session;
use Yaf\Application;
use Yaf\Controller_Abstract;

class LoginController extends Controller_Abstract
{
	/**
	 * 登录页
	 */
	public function indexAction()
	{
		$envString = "当前环境：生产环境";
		$env = Application::app()->environ();
		if ($env == 'develop') {
			$envString = "当前环境：开发环境";
		}
		$this->display('index', [
			'desc' => $envString,
		]);
	}

	/**
	 * 登录
	 */
	public function signAction()
	{
		$userName = $_REQUEST['username'];
		$passWord = $_REQUEST['password'];

		//$adminUser = AdminModel::where('user_name', $userName)->first();
		$adminUser = DB::table("admin")
			->leftJoin('role_user', 'role_user.user_id', '=', 'admin.id')
			->where('admin.user_name', $userName)
			->first();
		if(empty($adminUser)){
			echo "用户名错误";exit;
		}
		if(md5(md5($passWord).$adminUser->salt) == $adminUser->password){
			echo "密码错误";exit;
		}
		if ($userName && $passWord) {
			$session = Session::getInstance();
			$userInfo = [
				'userName'  => $userName,
				'userTitle' => $adminUser['title'],
				'userRole' => $adminUser['role_id'],
				'loginTime' => time(),
			];
			$session->__set('userInfo', $userInfo);

			$this->redirect('/admin/index/index');
		} else {
			$this->redirect('/admin/login/index');
		}
	}
	/**
	 * 退出登录
	 */
	public function logoutAction()
	{
		$session = Session::getInstance();
		$session->del('userInfo');
		$this->redirect('/admin/login/index');
	}

}
 