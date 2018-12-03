<?php

//Page.php
namespace libs;

/**
 * 期望:
 * $page = new Page(总数量,每页数量);
 * $page->show();
 * 就可以实现分页的显示
 */
class Page {
	//通常来说, 通过构造方法传递的参数应该对外是只读的
	protected $total;
	protected $num;
	protected $param;

	protected $pageNum; //总页数 = ceil(总数量/每页数量)
	protected $p; //当前页

	//只读
	public function __get($key) {
		return $this->$key;
	}

	//改造: 超链接中应该有任意的其他参数
	//$param 隐藏的参数, 默认值是空字符串, 传入的值会拼接到所有的URL中
	//可能传入的参数 $param = 'c=blog&a=list'
	public function __construct($total, $num, $param = '') {
		$this->total = $total;
		$this->num = $num;
		$this->param = '&' . $param;
		$this->pageNum = ceil($total / $num);

		//当前文件真正使用的时候, 是在具体的分页文件里, 一定会有传参
		$this->p = $_GET['p'] ?? 1;
	}

	//首页
	protected function firstPage() {
		if ($this->p != 1) {
			echo '<a href="?p=1' . $this->param . '">首页</a>';
		} else {
			echo '<span>首页</span>';
		}
	}

	//上一页
	protected function prevPage() {
		if ($this->p > 1) {
			echo '<a href="?p=' . ($this->p - 1) . $this->param . '">上一页</a>';
		} else {
			echo '<span>上一页</span>';
		}
	}

	//中间页  midPage
	protected function midPage() {
		//分页的阈值  中间值 -5  和 +4

		//左侧极限值是 1, 不能小于1
		$min = max($this->p - 5, 1);

		//左侧值 和 右侧值 差额9
		$max = $min + 9;
		//最大值和总页数比, 取较小的
		$max = min($max, $this->pageNum);
		//最小值 不能小于1
		$min = max($max - 9, 1);

		for ($i = $min; $i <= $max; $i++) {
			if ($i == $this->p) {
				echo '<span>' . $i . '</span>';
			} else {
				echo ' <a href="?p=' . $i . $this->param . '">' . $i . '</a> ';
			}

		}
	}

	//下一页  nextPage
	protected function nextPage() {
		if ($this->p < $this->pageNum) {
// 通过超链接传递p参数, 值是当前页+1
			// ($p + 1) 必须要写() , 否则会先拼接$p, 会出错误
			echo '<a href="?p=' . ($this->p + 1) . $this->param . '">下一页</a>';
		} else {
			echo '<span>下一页</span>';
		}
	}

	//末页    lastPage
	protected function lastPage() {
		if ($this->p != $this->pageNum) {
			echo '<a href="?p=' . $this->pageNum . $this->param . '">末页</a>';
		} else {
			echo '<span>末页</span>';
		}
	}

	public function show() {
		$this->firstPage();
		$this->prevPage();
		$this->midPage();
		$this->nextPage();
		$this->lastPage();
	}
}
