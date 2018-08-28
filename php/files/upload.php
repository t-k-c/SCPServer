<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 18:51

'name': $('#name').val(),
'surnname': $('#surname').val(),
'email': $('#email').val(),
'tel':$('#tel').val(),
'java':$('#java').val(),
'xml':$('#xml').val(),
'javascript':$('#javascript').val(),
'html':$('#html').val(),
'css':$('#css').val(),
'php':$('#php').val(),
'cpp':$('#cpp').val(),
'python':$('#python').val()
 */
/*echo $_POST['name'],$_POST['surname'],$_POST['tel'],$_POST['java'],$_POST['xml'],$_POST['javascript'],$_POST['html'],
$_POST['css'],$_POST['php'],$_POST['cpp'],$_POST['mysql'],$_POST['python'];*/

if(isset($_POST['name'],$_POST['surname'],$_POST['email'],$_POST['tel'],$_POST['java'],$_POST['xml'],$_POST['javascript'],$_POST['html'],
	$_POST['css'],$_POST['php'],$_POST['cpp'],$_POST['mysql'],$_POST['python'],$_POST['filiere'],$_POST['lang'])){
 $name = $_POST['name'];
 $surname = $_POST['surname'];
 $email = $_POST['email'];
 $tel = $_POST['tel'];
 $lang = $_POST['lang'];
 $java = $_POST['java'];
 $xml = $_POST['xml'];
 $javascript = $_POST['javascript'];
 $html = $_POST['html'];
 $css = $_POST['css'];
 $php = $_POST['php'];
 $cpp = $_POST['cpp'];
 $mysql = $_POST['mysql'];
 $python = $_POST['python'];
 $filiere = $_POST['filiere'];
 $android = '{"java":'.$java.',"xml":'.$xml.'}';
 $web = '{"html":"'.$html.'","css":"'.$css.'","php":"'.$php.'","javascript":"'.$javascript.'","mysql":"'.$mysql.'"}';
 $programmation = '{"cpp":'.$cpp.',"python":'.$python.'}';
 include_once '../classes/scp_user_manager.php';
 $manager = new scp_user_manager();
$data =  $manager->insertStudent($name,$surname,$email,$tel,$android,$web,$programmation,$lang,$filiere);
if($data !== 'false'){
//	setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");
	setcookie('scp_number',$data, time() + (86400 * 30), "/");
}
echo $data;
}
else{
	echo "something is wrong";
}