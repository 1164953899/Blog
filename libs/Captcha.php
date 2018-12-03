<?php
namespace libs;

/**
 * Captcha.php
 *
 * 版本5:
 *
 * 类中存在很多的方法, 但是这些方法从功能上来划分, 并不都是用来给使用者调用的, 大量的方法实际上是拆分出来的, 例如 绘制干扰项, 绘制验证码, 绘制随机色 等等, 这些方法不应该被用户调用, 所以为了让用户知道 哪些方法是给他用的, 哪些方法不是给他用的, 应该有个区分的方式!
 *
 * 访问权限词
 * public     公开的:  类外  类自身 都可以用
 * protected  保护的:  类自身使用, 类外无法使用
 *
 * 好处:
 * 1.用户写代码时, 只提示 公开的方法和属性, 排除很多干扰项
 * 2.用户无法在类外调用保护的方法和属性, 对于类来说更加安全
 */

class Captcha {
	const DISTURB_LINE = 0;
	const DISTURB_PIXEL = 1;
	const DISTURB_BOTH = 2;

	//最常用的属性 写成成员变量
	//好处: 维护时, 位置很明显, 容易被看到
	//这些参数 在很多方法中都用到了, 提取出来, 就可以节省方法传参

	//宽度, 带有默认值的写法
	protected $width = 200;
	//高度
	protected $height = 80;
	//构造传入的值, 通常都要有对应的成员变量
	protected $len; //验证码个数

	protected $type; //保存干扰项类型

	//画布: 每个方法中几乎都会用到同一块画布, 所以提取出来
	//画布的初始值 是通过调用函数之后生成的, 此写法不能在成员变量的时候赋予
	// public $image = imagecreatetruecolor(200, 80);
	protected $image;

	//期望: 能够在类实例化的时候, 自动给$image赋初始值!!

	//构造方法: 当 new 类(); 时 会自动触发
	//
	//此方法有两大应用时机:
	//1. 简化初始化时 成员变量的赋值, new 类(值1, 值2, 值3....)
	//2. 有些成员变量的初始值 需要计算出来
	public function __construct($width = 200, $height = 80, $len = 4, $type = self::DISTURB_BOTH) {
		$this->len = $len;
		$this->width = $width;
		$this->height = $height;
		$this->type = $type;

		//初始化的时候, 给 $image 初始值
		$this->image = imagecreatetruecolor($this->width, $this->height);
	}

	//析构方法: 当前对象占据的内存被释放时,触发
	public function __destruct() {
		//通常: 在此处把构造方法中产生的垃圾进行回收
		imagedestroy($this->image);
	}

	/**
	 * 呈现 宽200 高80 4个验证码 干扰线+干扰点 的图片在浏览器
	 * @return string 验证码的值
	 */
	public function show() {
		$height = $this->height;

		$this->drawBG();
		/**
		 * 常量的调用方式很随意:
		 * self::常量
		 * $this::常量
		 * 类名::常量
		 */
		switch ($this->type) {
		case self::DISTURB_BOTH:
			$this->drawPixel();
			$this->drawLines();
			break;
		case $this::DISTURB_LINE:
			$this->drawLines();
			break;
		case Captcha::DISTURB_PIXEL:
			$this->drawPixel();
			break;
		default:
			# code...
			break;
		}

		$code = $this->drawCode();
		header('content-type:image/png');
		imagepng($this->image);
		return $code;
	}

	//为了缩短随机颜色的获取代码
	protected function randColor() {
		//参数过多时的 书写方式, 可以把参数回车换到单独的行
		return imagecolorallocate(
			$this->image,
			mt_rand(0, 200),
			mt_rand(0, 200),
			mt_rand(0, 200)
		);
	}

	//width 和height 被提取成 成员变量了, 则使用$this即可调用, 无需通过参数传递
	protected function drawPixel() {
		for ($i = 0; $i < 300; $i++) {
			$x = mt_rand(1, $this->width);
			$y = mt_rand(1, $this->height);

			$color = $this->randColor();

			imagesetpixel($this->image, $x, $y, $color);
		}
	}

	protected function drawLines() {
		for ($i = 0; $i < 3; $i++) {
			$x1 = mt_rand(1, $this->width);
			$y1 = mt_rand(1, $this->height);

			$x2 = mt_rand(1, $this->width);
			$y2 = mt_rand(1, $this->height);

			$color = $this->randColor();

			imageline($this->image, $x1, $y1, $x2, $y2, $color);
		}
	}

	protected function drawCode() {
		$code = '';
		$string = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNM';
		for ($i = 0; $i < $this->len; $i++) {
			$size = $this->height / 2;
			$angle = mt_rand(-30, 30);
			$x = $this->width / $this->len * $i;
			$y = $this->height * 3 / 4;
			$color = $this->randColor();
			$fontfile = __DIR__ . '/cour.ttf';

			$index = mt_rand(0, strlen($string) - 1);
			$text = $string[$index];
			$code .= $text; //拼接验证码

			imagettftext(
				$this->image,
				$size,
				$angle,
				$x,
				$y,
				$color,
				$fontfile,
				$text
			);
		}
		return $code;
	}

	protected function drawBG() {
		$bgC = imagecolorallocate($this->image, 220, 220, 220);
		imagefill($this->image, 0, 0, $bgC);
	}
}
