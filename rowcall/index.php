<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 31/01/2018
 * Time: 10:16
 */
if(isset($_GET['id'],$_GET['class'])){
	$id = $_GET['id'];
	$class = $_GET['class'];
	include_once '../php/classes/scp_user_manager.php';
	$user = new scp_user_manager();
	$android = '{"java":'.rand(0,10).',"xml":'.rand(0,10).'}';
	$web = '{"html":"'.rand(0,10).'","css":"'.rand(0,10).'","php":"'.rand(0,10).'","javascript":"'.rand(0,10).'","mysql":"'.rand(0,10).'"}';
	$programmation = '{"cpp":'.rand(0,10).',"python":'.rand(0,10).'}';
	$user->insertStudent(randomTextGenerator(6).",CODE: ".$id,randomTextGenerator(7),
		randomTextGenerator(4)."@gmail.com","6".randomPhoneNumber(7),
		$android,$web,$programmation,"en",$class
		);

}
else{
echo "empty";
}
function randomTextGenerator($length){
	$val = "abcdefghijklmnopqrstuvwxyz";
	$resp="";
	for($i=0;$i<$length;$i++){
		$resp.=$val[rand(0,strlen($val)-1)];
	}
	return $resp;
}
function randomPhoneNumber($length){
	$val = "0123456789";
	$resp="";
	for($i=0;$i<$length;$i++){
		$resp.=$val[rand(0,strlen($val)-1)];
	}
	return $resp;
}