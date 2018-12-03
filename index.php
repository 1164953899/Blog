<?php
//index.php

include 'vendor/smarty/libs/Smarty.class.php';

define('DS', DIRECTORY_SEPARATOR);

function autoload($class) {
	$path = $class . '.php';
	$path = str_replace('\\', DS, $path);
	include $path;
}
spl_autoload_register('autoload');

if (isset($_GET['m'])) {
	// echo '进入到后台界面';
	$a = $_GET['a'] ?? 'login';
	$c = $_GET['c'] ?? 'home';

	$con = "app\\admin\\Controller\\{$c}Controller";
	$obj = new $con;
	$obj->$a();

} else {
	//index 默认值 是 首页的方法名
	$a = $_GET['a'] ?? 'index';
	// 通过超链接传递触发的控制器的名字, 来实现多个控制器的操作
	$c = $_GET['c'] ?? 'home';
	//进入前端
	//把控制器名拼接到下方的字符串中, 这样就可以实现不同的超链接传参来决定实例化不同的控制器, 此做法和a是一样的
	//
	//  \是转义符,  \\才是普通的\
	$con = "app\\client\\Controller\\{$c}Controller";
	//$obj = new app\client\Controller\HomeController;

	//实例化出拼接出来的类
	$obj = new $con;
	$obj->$a();
}
