<?php
Class myColor {
	public $color = 'red';
	
	function __construct(){
		echo 'Class '.__CLASS__." construct<br/>";
	}
	
	function __destruct(){
		echo 'Class '.__CLASS__.' destruct<br/>';		
	}
	
	function __toString(){
		return 'Class '.__CLASS__.' toString<br/>';
	}
	
	function getColor(){
		echo $this->color.'<br/>';
	}
}

Class childColor extends myColor {
	public $cl = "blue";
	
	function __construct(){
		echo 'Class '.__CLASS__.' construct<br/>';
		//parent::__construct();
	}
	function getColor(){
		echo $this->cl.'<br/>';
	}
}


$test = new mycolor();
$test->getcolor();
unset($test);
echo '--------------------<br/>';

$test = new childcolor;

echo $test->getcolor();