<?php

namespace app\admin\controller;
use app\admin\Model\HomeModel;
use libs\Captcha;
use libs\Controller;
use libs\Page;

class HomeController extends Controller {
	//index.php?m=admin&c=home&a=login
	//显示登录页面
	public $carM;

	public function __construct() {
		$this->carM = new HomeModel();
		parent::__construct();
	}
	public function login() {
		$this->display('home/login.html');
	}

	public function captcha() {
		$c = new Captcha();
		$code = $c->show();
		session_start();
		$_SESSION['code'] = $code;
	}
	//?m=admin&c=home&a=doLogin
	// 执行登录操作
	public function doLogin() {

		$username = $_POST['username'];
		$password = $_POST['password'];
		$captcha = $_POST['captcha'];
		//1.从POST中读取数据
		//2.验证数据格式
		$noSpace = preg_match('!\s!', $username) == 0;
		$lt = mb_strlen($username) >= 2 && mb_strlen($username) <= 100;
		if (!($noSpace && $lt)) {
			die('用户名格式错误!');
		}

		$lt6 = strlen($password) > 6;
		$haveNum = preg_match('!\d!', $password) == 1;
		$haveLe = preg_match('![a-z]!i', $password) == 1;
		if (!($lt6 && $haveNum && $haveLe)) {
			die('密码格式错误!');
		}

		$code = $_SESSION['code'];
		if (strtolower($captcha) != strtolower($code)) {
			die('验证码错误!');
		}

		$obj = $this->carM->getLogin($username, md5($password), 1);
		//1.读取前端传入的值
		//2.验证格式 和 验证码
		//3. 去数据库的user表中搜索: 用户名=传入的 and 密码=传入的 and `admin`=1
		// admin字段 的值 0代表普通用户, 1代表管理员
		// 这个admin字段, 需要手动到数据库表中进行修改
		//
		// 如果登录成功, 则跳转到主页面
		if ($obj) {
			$_SESSION['username'] = $obj->username;
			$_SESSION['uid'] = $obj->id;
			header('location:?m=admin&c=home&a=index');
		} else {
			echo '登录失败';
		}

	}

	public function logout() {
		session_start();
		session_unset();
		session_destroy();
		setcookie('user', '', time() - 1, '');
		header('location:?m=admin&c=home&a=login');
	}
	//?m=admin&c=home&a=index
	//主页面
	public function index() {
		$this->display('home/index.html');
	}

	//?m=admin&c=home&a=users
	//用户列表
	public function users() {
		//----分页UI
		$num = 2; //每页
		$obj = $this->carM->getusersNum();
		$total = $obj->c;
		// $total = 5;
		$page = new Page($total, $num, 'c=home&a=users&m=admin');

		$this->assign('page', $page);

		//----分页数据
		$p = $_GET['p'] ?? 1;

		$start = ($p - 1) * $num;

		$user = $this->carM->getuser($start, $num);

		$this->smarty->assign('user', $user);

		$this->display('home/users.html');
	}
	//?m=admin&c=home&a=blogs
	//博客列表
	public function blogs() {

		$num = 2; //每页

		$obj = $this->carM->getblogsNum();

		$total = $obj->c;

		$page = new Page($total, $num, 'c=home&a=blogs&m=admin');

		$this->assign('page', $page);

		//----分页数据
		$p = $_GET['p'] ?? 1;

		$start = ($p - 1) * $num;

		$blog = $this->carM->getblogs($start, $num);

		$this->smarty->assign('blog', $blog);

		$this->display('home/blogs.html');
	}
	//?m=admin&c=home&a=comments
	//评论列表
	public function comments() {
		$num = 2; //每页

		$obj = $this->carM->getcommentsNum();

		$total = $obj->c;

		$page = new Page($total, $num, 'c=home&a=comments&m=admin');

		$this->assign('page', $page);

		//----分页数据
		$p = $_GET['p'] ?? 1;

		$start = ($p - 1) * $num;

		$comment = $this->carM->getcomments($start, $num);

		$this->smarty->assign('comment', $comment);

		$this->display('home/comments.html');

	}
// ?c=home&a=deleteuser&bid={{$v.id}}
	public function deleteuser() {
		$id = $_GET['bid'];
		$num = $this->carM->dodelete($id);
		if ($num) {
			header('location: ?m=admin&c=home&a=users');
		} else {
			echo '删除失败';
		}
	}
// m=admin&c=home&a=deleteblog&bid=43
	public function deleteblog() {
		$id = $_GET['bid'];
		$num = $this->carM->dodeleteblog($id);
		if ($num) {
			header('location: ?m=admin&c=home&a=blogs');
		} else {
			echo '删除失败';
		}
	}
	public function deletecomment() {
		$id = $_GET['bid'];
		$num = $this->carM->dodeletecomment($id);
		if ($num) {
			header('location: ?m=admin&c=home&a=comments');
		} else {
			echo '删除失败';
		}
	}
}
