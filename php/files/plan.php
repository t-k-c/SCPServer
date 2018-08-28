<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 21:15
 */
if(isset($_COOKIE['scp_number'])){
	include_once  '../classes/scp_plan_manager.php';
	$scp_plan_man = new scp_plan_manager();
	$scp_plan = $scp_plan_man->getPlan();
$i=1;
		foreach ($scp_plan as $array) {

			?><a href="#!" class="collection-item plan-<?php echo $i++; ?>"><?php echo $array['content'];?></a><?php

		}

}
