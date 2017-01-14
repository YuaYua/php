<?php
	/**
	 * 
	 */
	class Student{
		public $name="lck";
		private $age="18";
		
		//常量
		const PI=3.1232;
		
		//方法不写修饰符相当于 public 但是属性必须加修饰符
	 	function say(){
			echo $this->age;
			
			//$this代表我们当前调用这个方法的对象
			$this->haha();
			
			//self 代表我们当前的类
			echo self::PI;
		}
		
		protected function haha(){
			 echo $this->name."今年".$this->age;
		}
	}
	$stu=new Student();
	var_dump($stu);//私有、受保护属性可以看见但不可使用，只能在共有函数内进行调用，然后调用共有函数
	$stu->say();
	echo "<hr>";
	echo Student::PI;
	
	
?>