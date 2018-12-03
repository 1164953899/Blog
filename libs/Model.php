<?php

// car/libs/Model.php
// libs 文件夹是固定名称, 英文是 图书馆,仓库等意思, 我们习惯把自己封装的公共类 存放在这个文件夹中
// 存放 model 中的共同代码
namespace libs;

use Exception;
use PDO;

class Model {
	public $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=blog';
	public $link;

	//构造方法: 某些成员变量的默认值是计算得到的,所以必须写在构造方法中
	public function __construct($dsn = '') {
		// if (!empty($dsn)) {
		//     $this->dsn = $dsn;
		// }
		// ?? 和 ?: 是近似功能的两个运算符
		$this->dsn = $dsn ?: $this->dsn;
		$this->link = new PDO($this->dsn, 'root', 'root');
	}

	//自动化: 自动根据条件来选择执行的方式
	public function fetchAll($query, $args = []) {
		if (empty($args)) {
			//非预处理
			return $this->noFetchAll($query);
		} else {
			//预处理
			return $this->preFetchAll($query, $args);
		}
	}

	//提取了 非预处理方式的 查询所有
	public function noFetchAll($query) {
		$stmt = $this->link->query($query);
		if ($stmt === false) {
			print_r($this->link->errorInfo());
			throw new Exception($query);
		}
		return $stmt->fetchAll();
	}

	//预处理方式 查询所有
	//参数1: SQL语句
	//参数2: 绑定的参数数组
	public function preFetchAll($query, $args) {
		$stmt = $this->link->prepare($query);
		if ($stmt === false) {
			print_r($this->link->errorInfo());
			throw new Exception($query);
		}
		$suc = $stmt->execute($args);
		if ($suc === false) {
			print_r($stmt->errorInfo());
			throw new Exception($query);
		}
		return $stmt->fetchAll();
	}

//增删改操作的 预处理
	protected function preExec($query, $args) {
		$stmt = $this->link->prepare($query);
		if ($stmt === false) {
			print_r($this->link->errorInfo());
			throw new Exception($query);
		}
		$suc = $stmt->execute($args);
		if ($suc === false) {
			print_r($stmt->errorInfo());
			throw new Exception($query);
		}
		//返回影响的行数
		return $stmt->rowCount();
	}

	//非预处理方式 增删改
	protected function noExec($query) {
		// exec() 非预处理方式的增删改, 返回影响的行数 和 false
		$stmt = $this->link->exec($query);
		if ($stmt === false) {
			print_r($this->link->errorInfo());
			throw new Exception($query);
		}
		return $stmt;
	}

	//自动化
	protected function exec($query, $args = []) {
		if (empty($args)) {
			return $this->noExec($query);
		} else {
			return $this->preExec($query, $args);
		}
	}

	//预处理单条
	protected function preFetch($query, $args) {
		$stmt = $this->link->prepare($query);
		if ($stmt === false) {
			print_r($this->link->errorInfo());
			throw new Exception($query);
		}
		$suc = $stmt->execute($args);
		if ($suc === false) {
			print_r($stmt->errorInfo());
			throw new Exception($query);
		}
		//返回值确认只能有1个或0个
		return $stmt->fetchObject();
	}

	//非预处理单条
	protected function noFetch($query) {
		$stmt = $this->link->query($query);
		if ($stmt === false) {
			print_r($this->link->errorInfo());
			throw new Exception($query);
		}
		//返回值确认只能有1个或0个
		return $stmt->fetchObject();
	}

	//自动化
	protected function fetch($query, $args = []) {
		if (empty($args)) {
			return $this->noFetch($query);
		} else {
			return $this->preFetch($query, $args);
		}
	}
}
