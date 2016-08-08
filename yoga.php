<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<HTML>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<style type="text/CSS">

body{
	margin-top:20px;
	background-image:url(relax.jpg);
	font-family: "Tahoma", Georgia, Serif;
	color:white;
	font-size:18px;
	text-align:center;
}
a{
 color:hotpink;
}



</style>

</head>
<body>
<div class="container">

<div class="row">
    <div class="col-sm-4">
</div>

    <div class="col-sm-4">
	<h3>CS230 Laboratory Assignment<h3>
        <h5> *php session used<br><br>
        <a href="http://www.yogacards.com" target="_blank">Pictures borrowed from webside www.yogacards.com Thank You </a> </h5>

<?php 
 require_once("yoga.php");

 if (isset($_POST['Submit'])) { 
 $_SESSION['name'] = $_POST['name'];
 } 
?> 


	<h3>Enter your name</h3>
	<form action="" method="post">
		<input type="text" style="color:gray"name="name"/><br><br><br>
		<input type="submit" class="btn btn-primary"name="Submit" value="Submit!"/>
	</form><br>

	<button type="button" class="btn btn-primary" onClick="document.location.href='yogaquiz.php'"/>Quiz number one </button><br><br>
	<button type="button" class="btn btn-primary" onClick="document.location.href='yogaquiz2.php'"/>Quiz number two </button>

</div>
   <div class="col-sm-4"></div>
 </div>

</body>
</HTML>

