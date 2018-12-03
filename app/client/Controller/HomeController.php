<?php

//HomeController.php  首页控制器
namespace app\client\controller;

use libs\Controller;

class HomeController extends Controller {
	public function index() {

		//display的路径是相对于 Controller父类中 setTemplate指定的路径的
		$this->display('home/index.tpl');
	}
}
