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
<div style="position: absolute;height: 200px;background: url('assets/images/gradient-background-1920x1200-iphone-WTG200224143.jpg') no-repeat;background-size: cover;;width: 100%;top: 0;"></div>
    <div style="width: 100%;position: fixed;top: 20px;padding: 0 2%;z-index: 80">
        <a href="#!" onclick=" $.ajax({
            type:'POST',
            url:'php/files/manage_plan.php',
            data:{'operation':0},
            success: function(msg){

            },
            error: function(p1,p2,p3){
                Materialize.toast('Connection Error',500);
        }
        });" style="color:blue;font-size: 3em" class="left">&laquo;</a>
        <a href="#!" onclick="$.ajax({
            type:'POST',
            url:'php/files/manage_plan.php',
            data:{'operation':1},
            success: function(msg){

            },
            error: function(p1,p2,p3){
                Materialize.toast('Connection Error',500);
        }
        });" style="color:blue;font-size: 3em" class="right">&raquo;</a>
    </div>
    <div style="margin: 100px 2% 2%;padding: 1%;overflow: auto;" class="card row">
        <table class="highlight bordered stripped">
            <thead>
            <tr>
                <th></th>
                <th>Info</th>

                <!--<th>Class</th>
                <th>Lang</th>-->
                <th>Android</th>
                <th>Web</th>
                <th>Programming</th>
            </tr>
            </thead>
      <!--option-->

        </table>
    </div>
<div class="modal" id="ringModal">
    <div class="modal-content">
        <center class="contentRing">

        </center>
    </div>
    <div class="modal-footer">
        <a class="btn btn-flat modal-close modal-action" href="#!" onmousedown="rejectRing()">REJECT</a>
    </div>
</div>
</body>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/jquery-ui.min.js"></script>
<script src="assets/js/materialize.min.js"></script>
<script src="assets/js/script.js"></script>
<script>
   var previousContent="";
    $(document).ready(function(){
        $('.modal').modal();
      setInterval(function(){  $.ajax({
            type:'POST',
            url:'php/files/userdata.php',
            success: function(msg){
//                alert(msg);
                if(previousContent!==msg){
                    var them = msg.replace(previousContent,"");
                    $('table').append(them);
                    var td = document.getElementsByTagName('tr');
                    $('body,html').animate({scrollTop:$(td[td.length-1]).offset().top},800);
                    previousContent=msg;
                }

            },
            error: function(p1,p2,p3){
                Materialize.toast("Connection Error",500);
            }
        });},500);

        setInterval(function(){
            $.ajax({
                type:'POST',
                url:'php/ring/ring_status.php',
                success: function(msg){
                    if(msg!=='false') {
                        document.getElementsByClassName('contentRing')[0].innerHTML = msg;
                        $('#ringModal').modal('open');
                    }else{
                        $('#ringModal').modal('close');
                    }
                },
                error: function(p1,p2,p3){
                    Materialize.toast("Connection Error",500);
                }
            });
        },500);
    });
    function rejectRing(){
        $.ajax({
            type:'POST',
            url:'php/ring/rejectRing.php',
            success: function(msg){

            },
            error: function(p1,p2,p3){
                Materialize.toast("Connection Error",500);
            }
        });
    }
    function frontPresentation(){
        $.ajax({
            type:'POST',
            url:'php/files/manage_plan.php',
            data:{'operation':1},
            success: function(msg){

            },
            error: function(p1,p2,p3){
                Materialize.toast("Connection Error",500);
            }
        });
    }
    function backPresentation(){
        $.ajax({
            type:'POST',
            url:'php/files/manage_plan.php',
            data:{'operation':0},
            success: function(msg){

            },
            error: function(p1,p2,p3){
                Materialize.toast("Connection Error",500);
            }
        });
    }
</script>
</html>