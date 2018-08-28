<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 17:04
 */

class ringManager {
	private $data_file,$data_filename = "ring_data";
	public function __construct() {
		$this->data_file =file_get_contents("".$this->data_filename);
	}
	public function canRing(){
		if($this->data_file==""){
			return true;
		}
		return false;
	}
	public function canStopRing($id){
		if($this->data_file==$id){
			return true;
		}
		return false;
	}
	public function stopRinging($id){
		if($this->canStopRing($id)){
			file_put_contents("".$this->data_filename,"");
		}
	}
	public function startRinging($id){
		if($this->canRing()){
			file_put_contents("".$this->data_filename,"".$id);
		}
	}
	public function isRinging(){
		if($this->data_file!=''){
				$config = json_decode( file_get_contents( '../config/credentials.json' ), true );
				$handler = new PDO( 'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] ,
					'' . $config['user'],'' . $config['password'] );
			$query = $handler->prepare("SELECT * FROM `scp_info` WHERE `scp_number` = ?");
			if ( $query->execute(array($this->data_file)))
			{
				return $query->fetch(PDO::FETCH_ASSOC);
			}
			else
				return 'false';
		}
		else{
			return 'false';
		}
	}
}