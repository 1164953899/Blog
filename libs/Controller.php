<?php
namespace libs;

// car/libs/Controller.php
// 控制器的父类
use Smarty;

class Controller {
	protected $smarty;

	//提取公因数
	public function __construct() {
		$this->smarty = new Smarty();
		//所有类中的路径都是相对于入口的
		//参数是 客户端的 view文件夹的路径..
		session_start();
		if (isset($_GET['m'])) {
			$this->smarty->setTemplateDir('app/admin/View');
			$this->smarty->setCompileDir('runtime/admin/compile');
		} else {
			$this->smarty->setTemplateDir('app/client/View');
			$this->smarty->setCompileDir('runtime/client/compile');
		}
		$this->smarty->setLeftDelimiter('{{');
		$this->smarty->setRightDelimiter('}}');
	}

	public function assign($key, $value) {
		$this->smarty->assign($key, $value);
	}

	public function display($path) {
		$this->smarty->display($path);
	}
}
