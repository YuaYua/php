<?php
	/**
	 * 
	 */
	class Stat{
		static $name="lck";
		static function say(){
			echo self::$name;
			self::haha();
		}
		static function haha(){
			echo "hahaha我被调用了";
		}
	}
	Stat::say();
	
?>