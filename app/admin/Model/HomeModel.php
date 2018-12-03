<?php

namespace app\admin\Model;

use libs\Model;

class HomeModel extends Model {

	public function getLogin($username, $password, $admin) {
		//返回查询出来的结果, 应该是单条的数据
		//提示: 需要模仿父类的fetchAll()方法, 封装一个fetch()方法. 来读取单条数据
		//(如果不会封装, 就用PDO的原始方式 预处理 来读取)
		$query = 'SELECT*FROM `user` WHERE `username` = :username AND `password`=:password AND `admin`=:admin';
		$args = [
			':username' => $username,
			':password' => $password,
			':admin' => $admin,
		];

		return $this->fetch($query, $args);
	}

	// public function getTotalNum() {
	// 	//as 起别名, 结果对象中的属性名是c
	// 	$query = 'SELECT COUNT(*) as c FROM user';
	// 	//直接读取c属性
	// 	return $this->fetch($query)->c;
	// }

	public function getusersNum() {

		$query = 'SELECT COUNT(*) as c FROM user';

		return $this->fetch($query);
	}

	public function getblogsNum() {

		$query = 'SELECT COUNT(*) as c FROM blog';

		return $this->fetch($query);
	}

	public function getcommentsNum() {

		$query = 'SELECT COUNT(*) as c FROM blog';

		return $this->fetch($query);
	}

	public function getuser($start, $num) {

		$query = "SELECT*FROM user LIMIT $start,$num";

		return $this->fetchAll($query);
	}

	public function getblogs($start, $num) {

		$query = "SELECT b.`id`,b.`uid`,b.`view`,b.`title`,b.`image`,b.`update`,b.`content`,b.`create`,u.`username`
        FROM `blog` as b INNER JOIN `user` as u
        ON b.uid = u.id
        ORDER BY b.`update`
        LIMIT $start,$num";
		return $this->fetchAll($query);
	}

	public function getcomments($start, $num) {

		$query = "SELECT c.`id`,c.`content`,c.`create`,u.`username`,b.`title`
        FROM `comment` as c INNER JOIN `user` as u
        ON c.uid = u.id
        INNER JOIN 	`blog` as b
        ON c.bid = b.id
        ORDER BY c.`create`
        LIMIT $start,$num";

		return $this->fetchAll($query);
	}

	public function dodelete($id) {

		$query = 'DELETE FROM `user` WHERE id =:id';

		$args = [':id' => $id];

		return $this->exec($query, $args);
	}
	public function dodeleteblog($id) {

		$query = 'DELETE FROM `blog` WHERE id =:id';

		$args = [':id' => $id];

		return $this->exec($query, $args);
	}

	public function dodeletecomment($id) {

		$query = 'DELETE FROM `comment` WHERE id =:id';

		$args = [':id' => $id];

		return $this->exec($query, $args);
	}
}