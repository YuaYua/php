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
?>