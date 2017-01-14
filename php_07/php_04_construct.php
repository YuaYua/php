<?php
class Teacher {
	public $name;
	private $age;
	protected $money;
	//构造函数的声明
	//function __construct([arg1, arg2,…]) {
		// class init code
//	}
	
	function __construct($name,$age,$money) {
		$this -> name = $name;
//		$this->age=$age;
		$this->ages($age);
		$this->info();
		$this->money=$money;
	}
	
	function __destruct(){
		echo "<hr>";
		echo "see you next time";
	}
	
	private function ages($age){
		$age-=3;
		$this->age=$age;
	}
	
	private function info(){
		echo $this->name."今年".$this->age;
	}
	
	function getMoney(){
		return $this->money;
	}
	
	function setMoney($money){
		$this->money+=$money;
	}
}

$tea = new Teacher("lck",20,0.9999);
//var_dump($tea);
echo "<hr>";
echo $tea->getMoney();
echo "<hr>";
$tea->setMoney(0.0001);
echo $tea->getMoney();
?>