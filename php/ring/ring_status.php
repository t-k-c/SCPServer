<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 22:10


 */
include_once 'ringManager.php';
$ringMan = new ringManager();
$ringStatus = $ringMan->isRinging();
if($ringStatus!='false'){
	?>
	<br><br>
	<div  style="height:70px;width:70px;border-radius: 50%;line-height: 70px;font-size: 2em" class="blue white-text animated infinite shake"><?php echo $ringStatus['Name'][0]?></div>
	<p><?php echo $ringStatus['Name'].' '.$ringStatus['Surname'];?></p>
	<p><?php echo $ringStatus['class']?></p>
<?php
}
else{
	echo 'false';
}