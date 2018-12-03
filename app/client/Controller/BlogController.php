<?php
namespace app\client\Controller;
// ?c=blog&a=addblog
use app\client\Model\BlogModel;
use app\client\Model\UserModel;
use libs\Controller;

class BlogController extends Controller {

	public $blogM;
	public function __construct() {
		$this->blogM = new BlogModel;
		parent::__construct();
	}
	public function addblog() {
		$this->display('blog/addblog.tpl');
	}

	public function doAddBlog() {

		$uid = $_SESSION['uid'];
		$title = $_POST['title'];
		$pic = $_FILES['pic'];
		$content = $_POST['content'];
		$view = 100;
		$create = date('Y-m-d H:i:s');
		$update = '';
		// $uid, $title, $content, $image, $view, $create, $update
		$fit = substr(strrchr($pic['name'], '.'), 1);
		$eit = md5(microtime(true) . mt_rand(1000, 9999));

		$image = $eit . '.' . $fit;

		$bool = move_uploaded_file($pic['tmp_name'], 'upload/' . $image);

		$num = $this->blogM->addBlog($uid, $title, $image, $content, $view, $create, $update);

		if ($num) {
			//成功后跳转到用户详情页
			//?c=user&a=detail&uid=3  用户详情页的URL
			header('location: ?c=user&a=detail&uid=' . $uid);
		} else {
			echo '添加失败';
		}

	}

	public function delete() {
		// ?c=blog&a=delete&bid={{$value.id}}
		$id = $_GET['bid'];
		$num = $this->blogM->dodelete($id);
		$uid = $_SESSION['uid'];
		if ($num) {
			//成功后跳转到用户详情页
			//?c=user&a=detail&uid=3  用户详情页的URL
			header('location: ?c=user&a=detail&uid=' . $uid);
		} else {
			echo '删除失败';
		}
	}

	// <a href="index.php?c=Blog&a=edit&bid={{$v.id}}">编辑</a>
	public function edit() {

		$bid = $_GET['bid'];

		$blog = $this->blogM->getblog($bid);

		$this->smarty->assign('blog', $blog);

		$this->smarty->display('blog/edit.tpl');

	}

	// ?a=doEdit&c=Blog&bid={{$blog->id}}
	public function doedit() {
// c=User&a=detail&uid={{$smarty.session.uid}}
		$bid = $_GET['bid'];
		$title = $_POST['title'];
		$content = $_POST['content'];
		$pic = $_FILES['pic'];
		$update = date('Y-m-d H:i:s');
		$fit = substr(strrchr($pic['name'], '.'), 1);
		$eit = md5(microtime(true) . mt_rand(1000, 9999));
		$image = $eit . '.' . $fit;

		$bool = move_uploaded_file($pic['tmp_name'], 'upload/' . $image);

		$num = $this->blogM->editBlog($bid, $title, $image, $content, $update);

		if ($num) {
			header('location: ?c=blog&a=detail&bid=' . $bid);
		} else {
			echo '修改失败';
		}
	}

	// index.php?c=Blog&a=detail&bid={{$v.id}}
	public function detail() {

		$bid = $_GET['bid'];
		// 增加阅读量
		$this->blogM->increaseView($bid, 1);
		$blog = $this->blogM->getBlog($bid);
		$this->smarty->assign('blog', $blog);

		$userM = new UserModel();
		// 根据博客中的uid 查询出作者的信息
		$user = $userM->getUser($blog->uid);
		$this->smarty->assign('user', $user);

		$comments = $this->blogM->getCommentsByBid($bid);
		$this->smarty->assign('comments', $comments);
		$this->smarty->display('blog/detail.tpl');
	}

	// ?a=bloglist&c=blog
	public function bloglist() {
		//所有博客
		$blogs = $this->blogM->getAllBlogs();
		//浏览量前5
		$views = $this->blogM->getViewTop5();
		//更新时间前5
		$latest = $this->blogM->getLatestTop5();

		$this->assign('blogs', $blogs);
		$this->assign('views', $views);
		$this->assign('latest', $latest);

		$this->display('blog/bloglist.tpl');
	}
}