<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 17:21
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=no">
    <title>SCP</title>
    <link href="assets/css/materialize.min.css" rel="stylesheet"/>
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body>
<!--<div class="body"></div>-->
<div style="position: fixed;height: 100%;/*background: url('assets/images/Life-of-Pix-free-stock-photos-sunset-sea-light-mikewilson.jpeg') no-repeat;*/background-size: cover;;width: 100%;top: 0;"></div>

<div style="margin: 0px 0 0;padding: 1% 8%;overflow: auto;background: #eee repeat;min-height: 100%;" class="card row">
    <div class="col s12"><center><h2><?php  if(!isset($_COOKIE['scp_number'])) echo 'Héy'; else echo 'Plan'?>..</h2>
   <!-- <p>Accessing your information/level</p>-->
        <a <?php  if(!isset($_COOKIE['scp_number'])) echo 'hidden'?>  style="height: 100px;
    width: 100px;
    line-height: 100px;
    border-radius: 50%;
    position: fixed;
    font-size: 3em;
    top: 1%;
    left: 2%;" class="btn-large waves-effect tap-target-wave" href="#!" onmousedown="return ringManager(1)" onmouseup="return ringManager(0)" on>&bigotimes;</a>
        </center></div>

<form <?php  if(isset($_COOKIE['scp_number'])) echo 'hidden'?> onsubmit="return submitForm()" name="form">
    <div class="input-field col s12 m6 l6 xl6">
        <input required type="text" id="name" pattern="[a-zA-Z0-9]+">
        <label for="name">Nom</label>
    </div>
    <div class="input-field  col s12 m6 l6 xl6">
        <input required type="text" id="surname" pattern="[a-zA-Z0-9]+" >
        <label for="surname" >Prenom</label>
    </div>
    <div class="input-field  col s12 m6 l6 xl6">
        <input required type="email" id="email">
        <label for="email">Email</label>
    </div>
    <div class="input-field  col s12 m6 l6 xl6">
        <input required type="tel" id="tel">
        <label for="tel">Tel</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
        <select name="filiere">
            <option value="ITT1A" selected>ITT1A</option>
            <option value="ITT1B">ITT1B</option>
            <option value="ITT1 ALT">ITT1 ALT</option>
            <option value="ITT2A">ITT2A</option>
            <option value="ITT2B">ITT2B</option>
            <option value="IPT2">IPT2</option>
            <option value="IPT2 ALT">IPT2 ALT</option>
            <option value="ITT2 ALT">ITT2 ALT</option>
            <option value="ITT3 IR">ITT3 IR</option>
            <option value="ITT3 RC">ITT3 RC</option>
            <option value="ITT3 RT">ITT3 RT</option>
            <option value="ITT3 RT ALT">ITT3 RT ALT</option>
            <option value="ITT3 RC ALT">ITT3 RC ALT</option>
            <option value="ITT3 IR ALT">ITT3 IR ALT</option>
            <option value="IPT3 MGT ALT">IPT3 MGT ALT</option>
            <option value="IPT3 LT ALT">IPT3 LT ALT</option>
            <option value="IPT3 COMPTA ALT">IPT3 COMPTA ALT</option>
            <option value="IPT3 MGT ">IPT3 MGT </option>
            <option value="IPT3 LT ">IPT3 LT </option>
            <option value="IPT3 COMPTA ">IPT3 COMPTA </option>
            <option value="ADM 1">ADM 1</option>
            <option value="ADM 2">ADM 2</option>
            <option value="IT 1">IT 1</option>
            <option value="IT 2">IT 2</option>
        </select>
        <label>Sélectionnez votre filiere</label>
    </div>
    <div class="input-field col s12 m6 l6 xl6">
        <select name="lang">
            <option value="fr" selected>Francais</option>
            <option value="en">English</option>

        </select>
        <label>Sélectionnez votre langue</label>
    </div>
    <div class="col s12">
    <p style="text-align: left;opacity: 0.6;font-style: italic">
        Évaluez vos différents langages sur une échelle de 1 à 10.</p>
    <hr>
    <br>
    </div>
    <div class="col s12">
        <br>
        <div class="col s12"> <label>1. Android</label></div>
        <div class="col s12 l6 m6 xl6">
    <p class="range-field" style="margin-top: 0">
        <label>JAVA</label>
        <input required type="range" id="java" min="0" max="10"/>
    </p>
        </div>
        <div class="col s12 l6 m6 xl6">
    <p class="range-field" style="margin-top: 0">
        <label>XML</label>
        <input required type="range" id="xml" min="0" max="10"/>
    </p>
        </div>
    <br>
    </div>
    <div class="col s12">
        <br>
        <div class="col s12"> <label>2. Web</label></div>
        <div class="col s12 l6 m6 xl6">
    <p class="range-field" style="margin-top: 0">
        <label>JavaScript</label>
        <input required type="range" id="javascript" min="0" max="10"/>
    </p></div>
        <div class="col s12 l6 m6 xl6">
    <p class="range-field" style="margin-top: 0">
        <label>HTML</label>
        <input required type="range" id="html" min="0" max="10"/>
    </p></div><div class="col s12 l6 m6 xl6">
    <p class="range-field" style="margin-top: 0">
        <label>CSS</label>
        <input required type="range" id="css" min="0" max="10"/>
    </p>
    <p class="range-field" style="margin-top: 0">
        <label>PHP</label>
        <input required type="range" id="php" min="0" max="10"/>
    </p></div><div class="col s12 l6 m6 xl6">
    <p class="range-field" style="margin-top: 0">
        <label>MYSQL</label>
        <input required type="range" id="mysql" min="0" max="10"/>
    </p></div>
    <br>
        </div>
    <div class="col s12">
        <br>
        <div class="col s12"> <label>3. Programmation</label></div>
        <div class="col s12 l6 m6 xl6">
    <p class="range-field" style="margin-top: 0">
        <label>C++</label>
        <input required type="range" id="cpp" min="0" max="10"/>
    </p></div><div class="col s12 l6 m6 xl6">
    <p class="range-field" style="margin-top: 0">
        <label>PYTHON</label>
        <input required type="range" id="python" min="0" max="10"/>
    </p></div>
    <br>
    </div>
<!--    <div class="file-field input-field col s12">
        <br>
        <div class="btn">
            <span>Photo</span>
            <input  type="file" accept="image/*" id="file">
        </div>
        <div class="file-path-wrapper">
            <input required class="file-path validate" type="text" placeholder="Télécharger une photo (facultatif)">
        </div>
    </div>-->
    <br><br> <br><br>
    <button class="btn right">Submit</button>
    <br><br>
    <br><br>
</form>
    <div class="collection plans" <?php  if(!isset($_COOKIE['scp_number'])) echo 'hidden'?> >

    </div>
</div>

</body>
<div style="position:fixed;z-index: 99;top: 0;left:0;right:0;bottom:0;background: white;padding-top: 25%;" class="loader" hidden>
    <Center><div class="animated infinite bounce blue-text">Loading</div></Center>
</div>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/materialize.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
    var previousPlan = 0;
    $(document).ready(function(){
        $.ajax({
            type:'POST',
            url:'php/files/plan.php',
            success: function(msg){

                document.getElementsByClassName('plans')[0].innerHTML = msg;
            },
            error: function(p1,p2,p3){
                Materialize.toast("Connection Error",3000);
            }
        });
        setInterval(function(){
            $.ajax({
                type:'POST',
                url:'php/files/plan_position.php',
                success: function(msg){
                    console.log("msg ="+msg);
                    console.log("previousplan ="+previousPlan);
                    if(previousPlan!==msg){
                        $(document.getElementsByClassName('plan-'+previousPlan)[0]).css('background','white');
                        $(document.getElementsByClassName('plan-'+msg)[0]).css('background','rgba(69, 39, 160, 0.4)');
                        previousPlan = msg;
                    }
                },
                error: function(p1,p2,p3){
                    Materialize.toast("Connection Error",500);
                }
            });
        },500);
    });
    function submitForm(){
        $('.loader').show();
        $.ajax({
            type:'POST',
            url:'php/files/upload.php',
            data:{
                'name': $('#name').val(),
                'surname': $('#surname').val(),
                'email': $('#email').val(),
                'tel':$('#tel').val(),
                'java':$('#java').val(),
                'xml':$('#xml').val(),
                'javascript':$('#javascript').val(),
                'html':$('#html').val(),
                'css':$('#css').val(),
                'php':$('#php').val(),
                'cpp':$('#cpp').val(),
                'mysql':$('#mysql').val(),
                'python':$('#python').val(),
                'filiere':form.filiere.value,
                'lang':form.lang.value
            },
            success: function(msg){
                if(msg==="false"){
                    Materialize.toast("Erreur!!! assurez-vous que l'e-mail n'existe pas déjà dans la base de données",3000);
                    $('.loader').hide();
                }
                else{
                    alert(msg);
                    Materialize.toast("Sucess!!!",1000);
                    $('.loader').hide();
                    $.ajax({
                        type:'POST',
                        url:'php/files/setcookie.php',
                        data:{'scp_number': msg},
                        success: function(msg){
                                window.location='';
                        },
                        error: function(p1,p2,p3){
                            Materialize.toast("Connection Error",500);
                        }
                    });
                }
            },
            error: function(p1,p2,p3){
                Materialize.toast("Connection Error",3000);
                $('.loader').hide();
            }
        });
        return false;
    }
    function ringManager(operation){
        console.log("operation"+operation);
        $.ajax({
            type:'POST',
            url:'php/ring/ring.php',
            data:{'operation':operation},
            success: function(msg){
                console.log(msg);
//                document.getElementsByClassName('plans')[0].innerHTML = msg;
            },
            error: function(p1,p2,p3){
                Materialize.toast("Connection Error",3000);
            }
        });
        return false;
    }

</script>
</html>
