<?php 
$tid=1;
$sql = "SELECT tbltestimonial.Testimonial,tblusers.FullName from users join tblusers on tbltestimonial.UserEmail=tblusers.EmailId where tbltestimonial.status=:tid";
$query = $dbh -> prepare($sql);
$query->bindParam(':tid',$tid, PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{  ?>


        <div class="testimonial-m">
 
          <div class="testimonial-content">
            <div class="testimonial-heading">
              <h5><?php echo htmlentities($result->FullName);?></h5>
            <p><?php echo htmlentities($result->Testimonial);?></p>
          </div>
        </div>
        </div>
        <?php }} ?>


        <html>
<head>
	<title>Ticket</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link type="text/css" rel="stylesheet" href="../css/mystyle.css">
</head>
<body>
	<div class="container content">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
			<!-- <button class="btn btn-default ticket" value="1870"> Window 1 </button> <br>
			<button class="btn btn-default ticket" value="1872"> Window 2 </button> <br>
			<button class="btn btn-default ticket" value="1871"> Window 3 </button> <br> -->
			<button class="btn btn-default ticket" value="1875"> Window 1 </button> <br>
			<button class="btn btn-default ticket" value="1876"> Window 2 </button> <br>
			<button class="btn btn-default ticket" value="1874"> Window 3 </button> <br>
			<button class="btn btn-default ticket" value="1873"> Window 4 </button> <br>
		</div>

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12" >
			<div class="topBox"><center>YOUR NUMBER</center></div>
			<div class="container" id="num-panel" style="padding-left: 280px;">

			
	</div>

	<script type="text/javascript" src="../js/jquery.js"></script>
	<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
	<script type="text/javascript" src="../js/myscript.js"></script>
</body>
</html>
        