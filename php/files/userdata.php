<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 29/01/2018
 * Time: 12:46
 */

include_once  '../classes/scp_user_manager.php';
$users = new scp_user_manager();
$students = $users->getStudents();
foreach ($students as $student) {
	/*`Name`, `Surname`, `Email`, `Phone`, `Android`, `Web`, `Programming`, `Language`, `scp_number`, `class`, `icon`
	*/
	$android = json_decode($student['Android'],true);
	$web = json_decode($student['Web'],true);
	$programmation = json_decode($student['Programming'],true);
	?>
	<tr>
		<td>
			<center>
				<div style="height:70px;width:70px;border-radius: 50%;line-height: 70px;font-size: 2em"
				     class="blue white-text ">
					T
				</div>
			</center>
		</td>
		<td><p>ScpNumber: &nbsp;&nbsp; <?php echo $student['scp_number']?></p>
			<p>Name: &nbsp;&nbsp; <?php echo $student['Name']?></p>
			<p>Surname: &nbsp;&nbsp; <?php echo $student['Surname']?></p>
			<p>Class: &nbsp;&nbsp; <?php echo $student['class']?></p>
			<p>PH: &nbsp;&nbsp; <?php echo $student['Phone']?></p>
			<p>@: &nbsp;&nbsp; <?php echo $student['Email']?></p>
		</td>

		<!-- <td>ITT3IR</td>
		 <td>en</td>-->
		<td>
			<p>Java: &nbsp;&nbsp;
				<progress value="<?php echo $android['java']?>" max="10" style="    position: relative; top: 2px;"></progress>
			</p>
			<p>XML: &nbsp;&nbsp;
				<progress value="<?php echo $android['xml']?>" max="10" style="    position: relative; top: 2px;"></progress>
			</p>
			<p>Android: &nbsp;&nbsp;
				<progress value="<?php echo (((int)$android['java']+(int)(int)$android['java'])/2) ?>" max="10" style="    position: relative; top: 2px;"></progress>
			</p>
		</td>
		<td>
			<p>JS: &nbsp;&nbsp;
				<progress value="<?php echo $web['javascript'];?>" max="10" style="    position: relative; top: 2px;"></progress>
			</p>
			<p>CSS: &nbsp;&nbsp;
				<progress value="<?php echo $web['css'];?>" max="10" style="    position: relative; top: 2px;"></progress>
			</p>
			<p>HTML: &nbsp;&nbsp;
				<progress value="<?php echo $web['html'];?>" max="10" style="    position: relative; top: 2px;"></progress>
			</p>
			<p>PHP: &nbsp;&nbsp;
				<progress value="<?php echo $web['php'];?>" max="10" style="    position: relative; top: 2px;"></progress>
			</p>
			<p>MYSQL: &nbsp;&nbsp;
				<progress value="<?php echo $web['mysql'];?>" max="10" style="    position: relative; top: 2px;"></progress>
			</p>
		</td>
		<td>
			<p>Python: &nbsp;&nbsp;
				<progress value="<?php echo $programmation['python'];?>" max="10" style="    position: relative; top: 2px;"></progress>
			</p>
			<p>C++: &nbsp;&nbsp;
				<progress value="<?php echo $programmation['cpp'];?>" max="10" style="    position: relative; top: 2px;"></progress>
			</p>
		</td>
	</tr>
	<?php
}?>