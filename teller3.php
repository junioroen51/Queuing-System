<html>
<head>
	<title>Teller</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="../css/mystyle.css">
</head>
<body>
	<div class="container content">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			
			<button class="btn btn-default kurso" value="1874"> Window 3 </button> <br>
			<br><br><br>
			
			<button  class="btn btn-danger" id="reset" > RESET </button>
		</div>

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
			<div class="topBox"><center>YOU ARE SERVING</center></div>
			<div class="container" id="panel">

			</div>
			<button  class="btn btn-warning" id="next" value="" disabled> NEXT</button>
			<button class="btn btn-success sesclos">Closee</button>
		</div>
	</div>

	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/myscript.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('.sesclos').click(function(){
				 $.ajax({
		            type : "POST",
		            url : "window.php",
		            data : {
		                'win':"window3",
		                'pro':"tell3"
		                
		            },
		            success: function(datas){
		                         
		            }
        		});
			});
		})

	</script>
</body>
</html>