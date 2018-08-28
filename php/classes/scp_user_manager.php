<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 15:12
 */

class scp_user_manager {
	private $handler;

	public function __construct() {
		try {
			$config = json_decode("{
  \"host\":\"127.0.0.1\",
  \"user\":\"root\",
  \"password\":\"\",
  \"dbname\":\"scp\"
}",true);//json_decode( file_get_contents( '../config/credentials.json' ), true );
			$this->handler = new PDO( 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] ,
			'' . $config['user'],'' . $config['password'] );
		}
		catch (Exception $exception) {
		die('Cannont connect to sever');
		}
	}
	public function insertStudent($name,$surname,$email,$phone,$android,$web,$programming,$language,$class){
	$query0 = $this->handler->prepare("SELECT * FROM `scp_info` WHERE `Email` = ?");
	$query0->execute(array($email));
	if(!empty($query0->fetchAll(PDO::FETCH_ASSOC)))
		return 'false';
	$sql = "INSERT INTO `scp_info`(`Name`, `Surname`, `Email`, `Phone`, `Android`, `Web`, `Programming`, `Language`, `class`) VALUES (?,?,?,?,?,?,?,?,?)";
	$query = $this->handler->prepare($sql);
	$data = $query->execute(array($name,$surname,$email,$phone,$android,$web,$programming,$language,$class)) ? $this->handler->lastInsertId() : 'false';
	return $data;
}
	public function getStudents(){
		$sql = "SELECT * FROM `scp_info`";
		$query = $this->handler->prepare($sql);
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

}
