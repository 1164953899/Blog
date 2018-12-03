<?php
namespace app\client\Model;

use libs\Model;

class CommentModel extends Model {
	public function addComment($uid, $bid, $content, $create) {
		$query = 'INSERT INTO `comment`(`uid`,`bid`,`content`,`create`) VALUES(:uid,:bid,:content,:create)';

		$args = [
			':uid' => $uid,
			':bid' => $bid,
			':content' => $content,
			':create' => $create,
		];

		return $this->exec($query, $args);
	}

}