<?php

/*
* +----------------------------------------------------------------------+
* | Copyright (c) 国美互联网 - 视频事业部
* +----------------------------------------------------------------------+
* | All rights reserved.
* +----------------------------------------------------------------------+
* | @程序名称：AdminBase.php
* +----------------------------------------------------------------------+
* | @程序功能：
* +----------------------------------------------------------------------+
* | Author:JadeGlorious <wujing01@gomeplus.com>
* +----------------------------------------------------------------------+
* | Date: 2017/4/21 18:32
* +----------------------------------------------------------------------+
*/
use Yaf\Session;
abstract class AdminBaseController extends BaseController
{
	public function init()
	{
		$session = Session::getInstance();

		$adminInfo = $session->start()->__get('userInfo');
		$return = $this->getMenusAndRules($adminInfo['userRole']);
		$this->assign('global', [
			'menus'       => $return['menus'],
			'rules'=> $return['rules'],
			//'controller' => $this->_request->getControllerName(),
			//'action'     => $this->_request->getActionName(),
			'nowUri' => $this->_request->getRequestUri(),
			'admin'      => $adminInfo
		]);
	}

	/**
	 * @param $role_id
	 */
	private function getMenusAndRules($role_id)
	{
		$showMenus = [];
		$menus = MenusModel::where('status', 1)->orderBy('weight', 'desc')->get()->toArray();
		if($role_id > 1){
			$actions = DB::table("role_action")
				->leftJoin('actions', 'role_action.action_id', '=', 'actions.id')
				->where('role_action.role_id', $role_id)
				->get();
			$actionIds = array_column($actions, 'action_id');

			foreach ($menus as $key=>$val){
				if(in_array($val['action_id'], $actionIds)){
					$showMenus[] = $val;
				}
			}
			$showMenus = $this->merge($showMenus);
		}else{
			$actions = ActionModel::all()->toArray();
			$showMenus = $this->merge($menus);
		}
		return [
			'menus' => $showMenus,
			'rules' =>$actions,
		];
	}

	protected function merge($array,$pid=0){
		$last=array();
		foreach($array as $k=>$v){
			if($v['pid']==$pid){
				$v['child']=$this->merge($array,$v['id']);
				$last[]=$v;
			}
		}
		return $last;
	}

}
 