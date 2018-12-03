<?php
//HomeController.php  首页控制器
namespace app\client\Controller;
use app\client\Model\UserModel;
use libs\Captcha;
use libs\Controller;

class UserController extends Controller {
	public $carM;

	public function __construct() {
		$this->carM = new UserModel;
		parent::__construct();
	}

	public function showzhuce() {
		$this->display('user/register.tpl');
	}

	public function showdenglu() {
		$this->display('user/login.tpl');
	}

	public function captcha() {
		$c = new Captcha();
		$code = $c->show();
		session_start();
		$_SESSION['code'] = $code;
	}

	public function doRegister() {
		//1.从POST中读取所有传递过来的信息
		//2.验证信息的格式(使用到正则等... 参考08_RegExp/Day04/home/register/register.php)
		//3.验证通过,则利用UserModel中的方法保存所有的信息到数据库
		//4.打印出成功或失败 即可
		$username = $_POST['userName'];
		$pwd1 = $_POST['pwd1'];
		$pwd2 = $_POST['pwd2'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$captcha = $_POST['captcha'];

		//两次密码一致, 验证码一致, 手机号正确, 邮箱正确
		if ($pwd1 != $pwd2) {
			die('密码不一致!');
		}

		session_start();
		//test.php 生成验证码时, 保存了code到session中
		$code = $_SESSION['code'];
		if (strtolower($captcha) != strtolower($code)) {
			die('验证码错误!');
		}

		$pattern = '!^1(3\d|4[579]|5[0-35-9]|7[0135-8]|8\d)\d{8}$!';
		if (preg_match($pattern, $phone) == 0) {
			die('手机号格式错误!');
		}

		$pattern = '!^[\w-.]+@([a-z0-9-]+\.)+[0-9a-z]{2,6}$!i';
		if (preg_match($pattern, $email) == 0) {
			die('邮箱格式错误!');
		}

		//    密码大于6位,必须包含数字和字母
		$lt6 = strlen($pwd1) > 6;
		$haveNum = preg_match('!\d!', $pwd1) == 1;
		$haveLe = preg_match('![a-z]!i', $pwd1) == 1;
		if (!($lt6 && $haveNum && $haveLe)) {
			die('密码格式错误!');
		}

		//用户名长度是2-100位, 用户名中不能包含空格
		$noSpace = preg_match('!\s!', $username) == 0;
		// strlen();按照字节来计算长度, 英文1个 中文3个
		// mb_strlen(); 中英文都算1个
		$lt = mb_strlen($username) >= 2 && mb_strlen($username) <= 100;
		if (!($noSpace && $lt)) {
			die('用户名格式错误!');

		}

		$num = $this->carM->register($username, md5($pwd1), $phone, $email, 0, date('Y-m-d H:i:s'), 0);

		if ($num == 1) {
			header('location:index.php?a=showdenglu&c=User');
		} else {
			echo '注册失败!';
		}
	}

	public function doLogin() {

		$user = $_POST['userName'];
		$password = $_POST['Pwd'];
		$captcha = $_POST['captcha'];
		//1.从POST中读取数据
		//2.验证数据格式
		$noSpace = preg_match('!\s!', $user) == 0;
		$lt = mb_strlen($user) >= 2 && mb_strlen($user) <= 100;
		if (!($noSpace && $lt)) {
			die('用户名格式错误!');
		}

		$lt6 = strlen($password) > 6;
		$haveNum = preg_match('!\d!', $password) == 1;
		$haveLe = preg_match('![a-z]!i', $password) == 1;
		if (!($lt6 && $haveNum && $haveLe)) {
			die('密码格式错误!');
		}
		session_start();
		$code = $_SESSION['code'];
		if (strtolower($captcha) != strtolower($code)) {
			die('验证码错误!');
		}

		$obj = $this->carM->login($user, md5($password));
		if ($obj) {
			$_SESSION['username'] = $obj->username;
			$_SESSION['uid'] = $obj->id;
			header('location:index.php');
		} else {
			echo '登录失败';
		}
	}

	public function logout() {

		session_start();
		session_unset();
		session_destroy();
		setcookie('user', '', time() - 1, '');
		header('location:index.php');
	}

	public function detail() {
		$uid = $_GET['uid'];
		$user = $this->carM->getUser($uid);
		$arr2 = $this->carM->getBlogsByUid($uid);
		$this->smarty->assign('user', $user);
		$this->smarty->assign('arr2', $arr2);
		$this->display('user/detail.tpl');

	}
}