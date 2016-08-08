<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<HTML>
<head> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link rel='stylesheet' type='text/css' href='//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css'>
<style type="text/CSS">
body{
	margin-top:10px;
	font-family: "Tahoma";
	font-size:15px;
	text-align:center;
        background-image:url(relax.jpg);
}
#quiz2{
	text-align:left;
	padding-left:100px;
	padding-bottom:50px;
}
.col-sm-6{
	text-align:center;
	background-color:white;
	
}
#wynik{
	margin-top:50px;
        margin-bottom:150px;
        font-family: "Tahoma";
	font-size:15px;
        color:black;
	
}
button{
	font-family: "Tahoma";
	font-size:15px;	
}

span{
color:#295766;
font-size:20px;
font-weight:bold;)
</style>

<script>

function validate() {
var radios = document.getElementById("quiz2").getElementsByTagName("input");
var y = 0;
var n = 0; 
for(var i=0, j=radios.length ; i<j ; i++) 
{  if(radios[i].value == "d") 
		{    
			if(radios[i].checked == true)
			{     
				y++;      
			  
			}
			else{ 
				n++;      
	 		       
           		 } 
		 }
}
   document.getElementById("wynik").innerHTML = 'Correct: '+ y +'<br>'+'Incorrect: ' +   n; 
}

function clearFun()
{
	var radios = document.getElementById("quiz2").getElementsByTagName("input");

	for(var i=0, j=radios.length ; i<j ; i++) 
		{
			radios[i].checked = false;
		if (radios[i].value == "d")
			{ 
				radios[i].parentNode.parentNode.className = '';
			}
		}
				document.getElementById("wynik").innerHTML = '';
}
</script>
</head>
</body>
<div class="container">
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<h4>
<?
echo "<span>Hi " . $_SESSION["name"] . " </span><br><br> Welcome to <br>";
?></h4>
<h3>Second Yoga Quiz</h3>
<h4>Choose the correct sanskrit name for a pose</h4><br><br>
<div id="quiz2">

        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/boat.jpg" alt="yogacards.com"><br><br>
	<label><input type="radio" name="q1" value="d"/>Navasana</label><br>
	<label><input type="radio" name="q1" value="a"/>Navasola</label><br> 
	<label><input type="radio" name="q1" value="b"/>Moonisloa</label><br>
 	<label><input type="radio" name="q1" value="c"/>HeadStand</label><br><br><br>
	    	 
        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/baddhakona.jpg" alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q2" value="a"/>HeadPose</label><br> 
	<label><input type="radio" name="q2" value="d"/>Baddha Konasana</label><br>
 	<label><input type="radio" name="q2" value="b"/>Sunasa</label><br> 
	<label><input type="radio" name="q2" value="c"/>FloPose</label><br><br><br>

        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/back-bend-salute.jpg" alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q3" value="a"/>TrePose</label><br> 
	<label><input type="radio" name="q3" value="b"/>HeadPose</label><br>
 	<label><input type="radio" name="q3" value="c"/>FloPose</label><br> 
	<label><input type="radio" name="q3" value="d"/>Sun Salutation</label><br><br><br>

        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Bow-Pose.jpg" alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q4" value="a"/>Dohose</label><br> 
	<label><input type="radio" name="q4" value="b"/>Flopose</label><br>
 	<label><input type="radio" name="q4" value="c"/>Dohanaose</label><br> 
	<label><input type="radio" name="q4" value="d"/>Dhanurasana</label><br><br><br>
 
        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/camel.jpg" alt="yogacards.com"><br><br>
	<label><input type="radio" name="q5" value="a"/>Yordaose</label><br> 
	<label><input type="radio" name="q5" value="b"/>Meeose</label><br>
	<label><input type="radio" name="q5" value="c"/>Catdse</label><br>
	<label><input type="radio" name="q5" value="d"/>Ustrasana</label><br><br><br>
	
	 <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/chair.jpg" alt="yogacards.com"><br><br>
	<label><input type="radio" name="q6" value="a"/>Yordaose</label><br> 
	<label><input type="radio" name="q6" value="b"/>Uhatose</label><br>
	<label><input type="radio" name="q6" value="c"/>Cataose</label><br>
	<label><input type="radio" name="q6" value="d"/>Utkatasana</label><br><br><br>

	<img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/child.jpg" alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q7" value="a"/>Tree Pose</label><br> 
	<label><input type="radio" name="q7" value="b"/>Head Moon Pose</label><br>
 	<label><input type="radio" name="q7" value="c"/>Flower Pose</label><br> 
	<label><input type="radio" name="q7" value="d"/>Balasana</label><br><br><br>

        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Corpse-Pose.jpg" alt="yogacards.com"><br><br>
	<label><input type="radio" name="q8" value="a"/>Yordose</label><br> 
	<label><input type="radio" name="q8" value="b"/>Mooose</label><br>
	<label><input type="radio" name="q8" value="c"/>Caose</label><br>
	<label><input type="radio" name="q8" value="d"/>Savasana</label><br><br><br>

	
        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/crane.jpg"alt="yogacards.com"><br><br>
	<label><input type="radio" name="q9" value="d"/>Bakasana</label><br>
	<label><input type="radio" name="q9" value="a"/>Mooose</label><br> 
	<label><input type="radio" name="q9" value="b"/>Moonhoas</label><br>
 	<label><input type="radio" name="q9" value="c"/>Heatand</label><br><br><br>
	    	 
        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Galavasana.jpg"alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q10" value="a"/>Headose</label><br> 
	<label><input type="radio" name="q10" value="d"/>Galavasana</label><br>
 	<label><input type="radio" name="q10" value="b"/>Sunose</label><br> 
	<label><input type="radio" name="q10" value="c"/>Flowose</label><br><br><br>
      
	<button type="button" class="btn btn-primary" onclick="validate()">Check</button>
        <button type="button" class="btn btn-primary" onclick="clearFun()">Clear</button>
	<button type="button" class="btn btn-primary" onClick="document.location.href='yoga.php'">Home</button>

        <div id="wynik"></div>
     </div>
    </div>
  </div>
<div class="col-sm-3"></div>
</div>

</body>
</HTML>
