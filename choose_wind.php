<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Choose Window</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div><h1 class="center">Choose Window</h1></div>
<br>
<br>
<div class="center">
  <ul>
    
    <a href="page/teller1.php" ><li class="win" value="1" id=1> Window 1 </li></a>
    <a href="page/teller2.php" ><li class="win" value="2" id=2> Window 2 </li></a>
    <a href="page/teller3.php" ><li class="win" value="3" id=3> Window 3 </li></a>
    <a href="page/teller4.php" ><li class="win" value="4" id=4> Window 4 </li></a>
    

  </ul>
</div>


</body>
<script type="text/javascript" src="include/js/jquery.js"></script>
<script type="text/javascript">
  $(document).ready(function(){


       $.ajax({
            type : "POST",
            url : "page/window.php",
            data : {
                'pro':"2"

            },
            success: function(datas){
                var myobj = JSON.parse(datas);
                
                if(myobj.window1=="window1"){
                  $('#1').hide();
                }
                if(myobj.window2=="window2"){
                  $('#2').hide();
                }
                if(myobj.window3=="window3"){
                  $('#3').hide();
                }
                if(myobj.window4=="window4"){
                  $('#4').hide();
                }

                if(myobj.window1=="window1"&&myobj.window2=="window2"&&myobj.window3=="window3"&&myobj.window4=="window4"){
                  alert("No vacant teller");
                }

            }
        });


      $(".win").click(function(){
   
         $.ajax({
            type : "POST",
            url : "page/window.php",
            data : {
                'window':$(this).val(),
                'pro':"1"
                
            },
            success: function(datas){
                            
            }
        });

      })
  });

</script>
</html>