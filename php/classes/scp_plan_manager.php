<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 21:15
 */

class scp_plan_manager {
	public function __construct() {
		try {
			$config = json_decode( file_get_contents( '../config/credentials.json' ), true );
			$this->handler = new PDO( 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] ,
				'' . $config['user'],'' . $config['password'] );
		}
		catch (Exception $exception) {
			die('Cannont connect to sever');
		}
	}
	public function getPlan(){
		$sql = "SELECT * FROM `scp_plan` ";
		$query = $this->handler->prepare($sql);
		$query->execute(array());
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
}