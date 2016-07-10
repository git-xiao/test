<?php
// echo "string";
// $con = mysql_connect("127.0.0.1", "root");
// if(!$con){
// 	die("Could not connect: " . mysql_error());
// }
// mysql_select_db("xiaohaizhou", $con);

// $res = mysql_query("select * from user_info");

// while($row = mysql_fetch_array($res)){
// 	echo $row['id'];
// }

/**
* 
*/
class User { 
	private $age = 1;
	private $sal;
	private $payoff ;	
	//声明全局属性 
	//构造函数,中创建Payoff的对象 
	public function __construct() { 
		// $this->payoff = new Payoff(); 
	}
	public function getAge() { 
		$this->setAge(3);
		return $this->age; 
	} 
	public function setAge($age) { 
		$this->age = $age; 
	} 
	// 获得工资 
	public function getSal() { 
		$this->sal = $this->payoff->figure($this); 
		return $this->sal; 
	} 
}
$user = new User();
echo $user->getAge();
