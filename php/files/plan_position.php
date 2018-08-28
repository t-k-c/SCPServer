<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 21:42
 */
if(isset($_COOKIE['scp_number'])){
	$data = file_get_contents('plan_data');
	if($data!=''){
		echo $data;
	}
	else{
		echo '0';
	}
}