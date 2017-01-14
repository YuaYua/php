<?php
	/**
	 * 
	 */
	class Person{
		public $name;
		public $gender;
		private $age;
		protected $weapon;
		
		//常量
		const PI=879;
		//方法名没有修饰符默认为公有的，但是变量必须有修饰符
		function say(){
			//类内部访问常量
			echo self::PI;
			echo $this->weapon;
			$this->haha();
		}
		private function haha(){
			echo $this->name."今年".$this->age;
		}
	}
	$person=new Person();
	$person->name="Jinx";
	$person->gender="female";
	//对象可以看见但不能调用私有的,受保护的属性和方法还有常量，只能通过公有方法调用
//	$person->age=18;
//	$person->weapon="gun";
	var_dump($person);
	$person->say();
	//类外部访问常量
	echo Person::PI;
	
?>