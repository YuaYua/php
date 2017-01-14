<?php
	/**
	 * 
	 */
	class Person{
		public $name;
		public $pass;
		private $age;
	}
	$person=new Person();
	$person->age=99;
	var_dump($person);
//	$person->age;
	
?>