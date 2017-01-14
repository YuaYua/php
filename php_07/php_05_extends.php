<?php
class Person{
	//protected和private两个修饰符
	//都是只能在类内使用而无法在类外使用的
	//但是 private 不能通过继承给子类使用
	//protected 可以 将我们的属性继承给子类让子类在类内使用
	protected $name;
	private $age;
	public $gender="man";
	
	function __construct($name,$age){
		$this->name=$name;
		$this->age=$age;
//		$this->hello();
	}
	
	protected function hello(){
		echo "hello";
	}
	function info(){
		$this->hello();
		echo $this->name.$this->gender;
	}
}
/**
 * 
 */
class Children extends Person {
	public $money;
	
	//在继承当中 如果自身写了构造函数，则不继承父类的
	//需要通过 parent::__construct()传参来让父类调用他的构造函数帮我们创建对应的属性
	//而自己独有的属性就在子类自身的构造函数中去设置
	function __construct($name,$age,$money){
		//
		parent::__construct($name,$age);
		$this->money=$money;
//		$this->hello();
	}
	
	function hello(){
		echo "lanou";
	}
	
	
	
}

$person=new Person("lck",18);
//var_dump($person);
$person->info();
echo "<hr>";
$children=new Children("tangseng",200,1000);
//var_dump($Children);
$children->info();

?>