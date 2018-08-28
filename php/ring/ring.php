<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 17:12
 */
if(isset($_COOKIE['scp_number'],$_POST['operation'])){
	$id  =  $_COOKIE['scp_number'];
	$operation = $_POST['operation'];
		echo $operation;
	include_once 'ringManager.php';
	$ring = new ringManager();
	if($operation =='1')
		$ring->startRinging($id);
	else
		$ring->stopRinging($id);
}