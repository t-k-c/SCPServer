<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 21:44
 */
if(isset($_COOKIE['scp_number'],$_POST['operation'])){
	$operation =  $_POST['operation'];
	$data = (int)file_get_contents('plan_data');
	if($operation == '1'){
		file_put_contents('plan_data',$data+1);
	}
	else{
		if($data>0)
			file_put_contents('plan_data',$data-1);
	}
}