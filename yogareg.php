
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
	font-size:15px;
	text-align:center;
}
#w{
color:#295766;
text-align:left;
padding-left:15px;
text-align:left;

}

</style>

</head>
<body>
<div class="container">

<div class="row">
    <div class="col-sm-4">
</div>
	<div class="col-sm-4">

	<h3>CS270 Laboratory Assignment<br>Registration Screen</h3><br><br>

	<form action="proces.php" method="POST" >
		Name:<br><input type="text" class="form-control"id="w" name="name"  required><br><br/>
		Password:<br><input type="text" class="form-control" id="w" name="password" required><br><br>
		<input type="submit" class="btn btn-primary" value="Submit">
	</form>

</div>
   <div class="col-sm-4"></div>
  </div>

</body>
</HTML>

