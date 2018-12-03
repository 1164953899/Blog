<?php

namespace app\client\Controller;

use app\client\Model\CommentModel;
use libs\Controller;

class CommentController extends Controller {
	// ?c=comment&a=add&uid={{$smarty.session.uid}}&bid={{$blog->id}}
	public $commentM;

	public function __construct() {

		$this->commentM = new CommentModel;

	}
	public function add() {

		$uid = $_GET['uid'];

		$bid = $_GET['bid'];

		$content = $_POST['content'];

		$create = date('Y-m-d H:i:s');

		$num = $this->commentM->addComment($uid, $bid, $content, $create);

		if ($num) {
			header('location:?c=blog&a=detail&bid=' . $bid);
		} else {
			echo '评论失败';
		}
	}
}
