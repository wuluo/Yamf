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
class TestPlugin extends Yaf_Plugin_Abstract {
	public function routerStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		/* 在路由之前执行,这个钩子里，你可以做url重写等功能 */
		var_dump("routerStartup");
	}
	public function routerShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		/* 路由完成后，在这个钩子里，你可以做登陆检测等功能*/
		var_dump("routerShutdown");
	}
	public function dispatchLoopStartup(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		var_dump("dispatchLoopStartup");
	}
	public function preDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		var_dump("preDispatch");
	}
	public function postDispatch(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		var_dump("postDispatch");
	}
	public function dispatchLoopShutdown(Yaf_Request_Abstract $request, Yaf_Response_Abstract $response) {
		/* final hoook
		   in this hook user can do loging or implement layout */
		var_dump("dispatchLoopShutdown");
	}
}
 