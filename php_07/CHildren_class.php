<?php
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

?>