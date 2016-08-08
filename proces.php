
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


</style>

</head>
<body>
<div class="container">

<div class="row">
    <div class="col-sm-4">
</div>
    <div class="col-sm-4">

<?php
   	
   $myFile = "yogajson.json";
   $arr_data = array();

  try
  {	
	   $formdata = array(
	      'name'=> $_POST['name'],
	      'password'=> $_POST['password'],
	     
	   );

	   $jsondata = file_get_contents($myFile);
	   $arr_data = json_decode($jsondata, true);
	   array_push($arr_data,$formdata);
	   $jsondata = json_encode($arr_data, JSON_PRETTY_PRINT);
	
	   if(file_put_contents($myFile, $jsondata)) {
	        echo 'Data successfully saved';     
	    }
	   else 
	        echo "error";
   }
  		 catch (Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
   }

?>
<br><br><br>
<button  class="btn btn-primary" onClick="document.location.href='index.php'"> Go to Login screen </button>
<button  class="btn btn-primary" onClick="document.location.href='yoga.php'"> Go to Main screen </button>

</div>
   <div class="col-sm-4"></div>
</div>

</body>
</HTML>

