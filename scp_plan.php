<?php
/**
 * Created by PhpStorm.
 * User: codename-tkc
 * Date: 28/01/2018
 * Time: 17:21
 */ ?>
<?php  if(!isset($_COOKIE['scp_number'])){ echo '<script>window.location=\'index.php\'</script>';}?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>SCP</title>
	<link href="assets/css/materialize.min.css" rel="stylesheet"/>
	<link href="assets/css/animate.css" rel="stylesheet"/>
	<link href="assets/css/style.css" rel="stylesheet"/>
</head>
<body>
<!--<div class="body"></div>-->
<div style="position: fixed;height: 100%;/*background: url('assets/images/Life-of-Pix-free-stock-photos-sunset-sea-light-mikewilson.jpeg') no-repeat;*/background-size: cover;;width: 100%;top: 0;"></div>

<div style="margin: 0px 0 0;padding: 1% 8%;overflow: auto;background: #eee repeat;min-height: 100%;" class="card row">
	<div class="col s12"><center><h2>Plan..</h2>
			<!-- <p>Accessing your information/level</p>-->
			<a  style="height: 100px;
    width: 100px;
    line-height: 100px;
    border-radius: 50%;
    position: fixed;
    font-size: 3em;
    top: 1%;
    left: 2%;cursor:pointer;" class="btn-large waves-effect tap-target-wave"  onmousedown="ringManager(1)" onmouseup="ringManager(0)">&bigotimes;</a>
		</center></div>


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
    }

</script>
</html>
