<?php 
require_once(dirname(__FILE__) . "/config.php");

/**
* 
*/
class DB
{
	private $con;
	function connent()
	{
		$this->con = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);
		if (!$this->con) {
			die("Connent Fail;\nError: " . mysql_error());
		}
	}

	function insert($table, $array)
	{
		$field = '';
		$val = '';
		foreach ($array as $key => $value) {
			$field = $field . $key . ',';
			$val = $val . $value . ',';
			if (condition) {
				# code...
			}
		}
		$sql = "insert into {$table} ("
	}
}


$db = new DB();
$db->connent();
?>