<?php

/*
* +----------------------------------------------------------------------+
* | Copyright (c) 国美互联网 - 视频事业部
* +----------------------------------------------------------------------+
* | All rights reserved.
* +----------------------------------------------------------------------+
* | @程序名称：Index.php
* +----------------------------------------------------------------------+
* | @程序功能：
* +----------------------------------------------------------------------+
* | Author:JadeGlorious <wujing01@gomeplus.com>
* +----------------------------------------------------------------------+
* | Date: 2017/4/19 11:03
* +----------------------------------------------------------------------+
*/
//use Illuminate\Database\Capsule\Manager as DB;
class MenuController extends AdminBaseController
{
	public function indexAction()
	{
		$frontMenus = DB::table("menus")
			->where("type", 1)
			->where("status", 1)
			->get();

		$adminMenus = DB::table("menus")
			->where("type", 0)
			->where("status", 1)
			->get();
		$frontMenus = $this->merge($frontMenus);
		$frontMenus = $this->giveSort($frontMenus);
		$adminMenus = $this->merge($adminMenus);
		$adminMenus = $this->giveSort($adminMenus);
		$this->display('index', [
			'menus'=>$frontMenus,
			'amenus'=>$adminMenus,
		]);
	}

	protected function giveSort($array)
	{
		$newArr = [];
		foreach ($array as $k=>$v){
			$newArr[] = $v;
			if(!empty($v['child'])){
				foreach ($v['child'] as $ke=>$va){
					$va['name'] = '|-'.$va['name'];
					array_push($newArr, $va);
					unset($v['child'][$ke]);
				}
			}
		}
		foreach ($newArr as $k1=>$v1){
			unset($newArr[$k1]['child']);
		}
		return $newArr;
	}
	protected function merge($array,$pid=0){
		$last=array();
		foreach($array as $k=>$v){
			if($v['pid']==$pid){
				$v['child']=$this->merge($array,$v['id']);
				$v['parent_name'] = $v['name'];
				$last[]=$v;
			}
		}
		return $last;
	}

}

 