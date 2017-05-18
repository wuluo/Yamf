<?php
use Yaf\Bootstrap_Abstract;
use Yaf\Application;
use Yaf\Registry;
use Yaf\Dispatcher;
use Yaf\Loader;
use Yaf\Session;


use Illuminate\Database\Capsule\Manager;
use Illuminate\Events\Dispatcher as IDispatcher;
use Illuminate\Container\Container;
/**
 * 所有在Bootstrap类中, 以_init开头的方法, 都会被Yaf调用,
 * 这些方法, 都接受一个参数:Yaf_Dispatcher $dispatcher
 * 调用的次序, 和申明的次序相同
 */
class Bootstrap extends Bootstrap_Abstract
{
	protected $_config;
	/**
	 * 加载配置文件并注册配置
	 */
	public function _initConfig()
	{
		$this->_config = Application::app()->getConfig();
		Registry::set("config", $this->_config);
	}

	/**
	 * 注册加载
	 * @param Yaf_Loader $dispatcher
	 */
	public function _initLoader(Dispatcher $dispatcher)
	{
		Loader::import(APP_PATH . "/vendor/autoload.php");
		Loader::import(APP_PATH . "/application/function.php");

	}

	public function _initDatabaseEloquent()
	{
		$capsule = new Manager();
		$capsule->addConnection($this->_config->database->toArray());
		$capsule->setEventDispatcher(new IDispatcher(new Container()));
		$capsule->setAsGlobal();
		$capsule->bootEloquent();
		class_alias(Manager::class, 'DB');

	}

	/**
	 * 注册插件类
	 * @param Yaf_Dispatcher $dispatcher
	 */
	public function _initPlugin(Dispatcher $dispatcher)
	{
		/* register a plugin */
		$dispatcher->registerPlugin(new ViewPlugin());
	}
}