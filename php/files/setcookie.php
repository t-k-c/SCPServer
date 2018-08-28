<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 22:39
 */
if(isset($_POST['scp_number']) && !isset($_COOKIE['scp_number'])){
	$data = $_POST['scp_number'];
	setcookie('scp_number',$data, time() + (86400 * 30), "/");
}