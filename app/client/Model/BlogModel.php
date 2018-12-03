<?php
namespace app\client\Model;
use libs\Model;

class BlogModel extends Model {
	public function addBlog($uid, $title, $image, $content, $view, $create, $update) {
		$query = 'INSERT INTO `blog`(`uid`,`title`,`image`,`content`,`view`,`create`,`update`) VALUES(:uid,:title,:image,:content,:view,:create,:update )';

		$args = [
			':uid' => $uid,
			':title' => $title,
			':image' => $image,
			':content' => $content,
			':view' => $view,
			':create' => $create,
			':update' => $update,
		];

		return $this->exec($query, $args);
	}

	public function dodelete($id) {

		$query = 'DELETE FROM `blog` WHERE id =:id';

		$args = [':id' => $id];

		return $this->exec($query, $args);
	}

	public function getBlog($bid) {
		$query = 'SELECT*FROM `blog` WHERE id=:bid';

		$args = [':bid' => $bid];

		return $this->fetch($query, $args);
	}

	public function editBlog($bid, $title, $image, $content, $update) {
		$query = 'UPDATE `blog` SET `title`=:title, `image`=:image,`content`=:content, `update`=:update WHERE id=:bid';

		$args = [
			':bid' => $bid,
			':title' => $title,
			':image' => $image,
			':content' => $content,
			':update' => $update,
		];

		return $this->exec($query, $args);
	}

	//阅读量增加
	//参数是增量
	public function increaseView($bid, $delta) {
		$query = 'UPDATE `blog` SET `view`=`view`+:delta WHERE `id`=:bid';
		$args = [
			':delta' => $delta,
			':bid' => $bid,
		];
		return $this->exec($query, $args);
	}

	//更新前5
	public function getLatestTop5() {
		$query = 'SELECT `id`,`uid`,`view`,`title`,`image`,`update`,`content`,`create` FROM `blog` ORDER BY `update` DESC LIMIT 5';
		return $this->fetchAll($query);
	}

	//浏览量前五
	public function getViewTop5() {
		$query = 'SELECT `id`,`uid`,`view`,`title`,`image`,`update`,`content`,`create` FROM `blog` ORDER BY `view` DESC LIMIT 5';
		return $this->fetchAll($query);
	}

	//所有博客
	public function getAllBlogs() {
		// 要想查询结果中有用户名, 则必须使用多表联查, 就可以联合user和blog表查询内容
		/**
		 * SELECT 表1.字段, 表2.字段...
		 * FROM 表1 as 别名 INNER JOIN 表2 as 别名
		 * ON 表1.字段 = 表2.字段
		 * WHERE ...
		 * ORDER BY ...
		 * LIMIT ....
		 *
		 */
		$query = 'SELECT b.`id`,b.`uid`,b.`view`,b.`title`,b.`image`,b.`update`,b.`content`,b.`create`,u.`username`
        FROM `blog` as b INNER JOIN `user` as u
        ON b.uid = u.id
        ORDER BY b.`update` DESC LIMIT 5';
		return $this->fetchAll($query);
	}

	public function getCommentsByBid($bid) {
		//评论表 联合 用户表, 查询出 用户名, 因为评论表中只有用户id
		$query = 'SELECT c.content, c.create, u.username FROM
	        `comment` AS c INNER JOIN `user` AS u
	        ON c.uid = u.id
	        WHERE c.bid=:bid
	        ORDER BY c.create DESC
	        ';

		$args = [
			':bid' => $bid,
		];
		return $this->fetchAll($query, $args);
	}

}