<?php
namespace app\client\Model;
use libs\Model;

class UserModel extends Model {
	public $link;
	public function register($username, $pwd, $phone, $email, $balance, $create, $admin) {
		//把数据用PDO的预处理方式 INSERT 进入到表中
		//提示: Model父类中只有 fectchAll()方法, 用于查询
		//需要大家自己去封装一个 exec() 方法, 负责执行增删改, 返回值是影响的条数
		//(如果不会封装, 就直接写原始的PDO来完成此过程)
		$query = 'INSERT INTO `user`(`username`,`password`,`phone`,`email`,`balance`,`create`,`admin`) VALUES(:username,:pwd,:phone,:email,:balance,:create,:admin)';

		$args = [
			':username' => $username,
			':pwd' => $pwd,
			':phone' => $phone,
			':email' => $email,
			':balance' => $balance,
			':create' => $create,
			':admin' => $admin,
		];
		return $this->exec($query, $args);
	}

	public function login($username, $password) {
		//返回查询出来的结果, 应该是单条的数据
		//提示: 需要模仿父类的fetchAll()方法, 封装一个fetch()方法. 来读取单条数据
		//(如果不会封装, 就用PDO的原始方式 预处理 来读取)
		$query = 'SELECT*FROM `user` WHERE `username` = :username AND `password`=:password';
		$args = [
			':username' => $username,
			':password' => $password,
		];

		return $this->fetch($query, $args);
	}

	public function getUser($uid) {
		$query = 'SELECT*FROM `user` WHERE id=:id';

		$args = [':id' => $uid];

		return $this->fetch($query, $args);
	}

	public function getBlogsByUid($uid) {

		$query = 'SELECT*FROM `blog` WHERE uid=:uid ORDER BY `create` DESC';

		$args = [':uid' => $uid];

		return $this->fetchAll($query, $args);
	}

}