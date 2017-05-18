<?php
/*
* +----------------------------------------------------------------------+
* | Copyright (c) 国美互联网 - 视频事业部
* +----------------------------------------------------------------------+
* | All rights reserved.
* +----------------------------------------------------------------------+
* | @程序名称：Test.php
* +----------------------------------------------------------------------+
* | @程序功能：
* +----------------------------------------------------------------------+
* | Author:JadeGlorious <wujing01@gomeplus.com>
* +----------------------------------------------------------------------+
* | Date: 2017/4/18 17:40
* +----------------------------------------------------------------------+
*/
class ViewPlugin extends Yaf\Plugin_Abstract {
	public function routerShutdown(Yaf\Request_Abstract $request, Yaf\Response_Abstract $response) {
		/* 路由完成后，在这个钩子里，你可以做登陆检测等功能*/
		$config = Yaf\Registry::get('config');
		$app = Yaf\Application::app();
		$dispatcher = $app->getDispatcher();
		$nowModule = strtolower($dispatcher->getRequest()->module);

		$disableView = explode(',', $config->application->noviews);
		if(in_array($nowModule, $disableView)){
			$dispatcher->autoRender(FALSE);
		}else{
			$view_path = 'view_path_'.$nowModule;
			$dispatcher->setView(new Twig($config->application->$view_path,
				$config->twig->toArray()));
			$dispatcher->disableView();
		}
	}


}
 