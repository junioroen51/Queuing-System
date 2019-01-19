<html>
<head>
	<title>Costumer</title>	
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="../css/mystyle.css">
</head>
<body>



	<div class="container content">
		<div class="row topBox">
			NOW SERVING 
		</div> <br>
		<div class="row">
			<div class="container-fluid col-lg-12 col-md-12 " id="ads">
			
				<div class="carousel">

					<div id="theCarousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#theCarousel" data-slide-to="0" class="active" ></li>
							<li data-target="#theCarousel" data-slide-to="1"  ></li>
							<li data-target="#theCarousel" data-slide-to="2"  ></li>
						</ol>
					

						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="../img/1.png" style="width:100%; height:50%">
							</div>
							<div class="item">
								<img class="img img-responsive" src="../img/2.png" style="width:100%; height:50%">
							</div>
							<div class="item">
								<img class="img img-responsive" src="../img/3.png" style="width:100%; height:50%">
							</div>
		
						</div>
					</div>

					<a class="left carousel-control" href="#theCarousel" data-slide="prev">
						<span class="glyphicon glyphicon-chevron-left"></span>
					</a>
					<a class="right carousel-control" href="#theCarousel" data-slide="next">
						<span class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
			<div class="row">
		
			<div class="col-lg-3 col-md-3" style="margin-top: 110px; font-size: 50px;color:black"><center>Window 1</center>
	
			</div>
		
			<div class="col-lg-3 col-md-3" style="margin-top: 110px; font-size: 50px;color:black"><center>Window 2</center>
				
			</div>
	;
			<div class="col-lg-3 col-md-3" style="margin-top: 110px; font-size: 50px;color:black"><center>Window 3</center>
				
			</div>
		
			<div class="col-lg-3 col-md-3 " style="margin-top: 110px; font-size: 50px;color:black"><center>Window 4</center>
			</div>
		</div>
		</div>
		<div class="row">
		
			<div class="col-lg-3 col-md-3 serving" id="AE">
	
			</div>
		
			<div class="col-lg-3 col-md-3 serving" id="ME">
				
			</div>
	
			<div class="col-lg-3 col-md-3 serving" id="GE">
				
			</div>
		
			<div class="col-lg-3 col-md-3 serving" id="ECE">
			</div>
		</div>
	</div>

	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/myscript.js"></script>

	<script type="text/javascript">
	
	$(document).ready(function(){
		setInterval(updateScreen,1000);

		var prog = ['GE','AE','ECE','ME'];
		function updateScreen(){
			$.ajax({
				url: '../php/myphp.php',
				type: 'POST',
				data: { action: 'display' },
				success: function (data){
					data = JSON.parse(data);
					console.log(data);
					
					for(var i=0;i<data.length;i++){
						var j = 0;
						while(j < prog.length){
							if(prog[j] == data[i].name){
								$('#'+prog[j]).html(data[i].name + ' - ' + data[i].current);
								break;
							}
							j++;
						}
					}
				}
			});
		}
	});
	</script>
</body>
</html>