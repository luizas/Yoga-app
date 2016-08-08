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
#quiz1{
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
var radios = document.getElementById("quiz1").getElementsByTagName("input");
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
	var radios = document.getElementById("quiz1").getElementsByTagName("input");

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
echo "<span>Hi " . $_SESSION["name"] . " </span><br><br>Welcome to <br>";
?></h4>

<h3>Yoga Quiz</h3>
<h4>Select correct english name of yoga positions</h4><br><br>

<div id="quiz1">

        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Half-Moon-Pose.jpg" alt="yogacards.com"><br><br>
	<label><input type="radio" name="q1" value="d"/>Half Moon Pose</label><br>
	<label><input type="radio" name="q1" value="a"/>Moon Pose</label><br> 
	<label><input type="radio" name="q1" value="b"/>Moon</label><br>
 	<label><input type="radio" name="q1" value="c"/>Head Stand</label><br><br><br>
	    	 
        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/headstand-side.jpg" alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q2" value="a"/>Head Pose</label><br> 
	<label><input type="radio" name="q2" value="d"/>Side Headstand Pose</label><br>
 	<label><input type="radio" name="q2" value="b"/>Sun Pose</label><br> 
	<label><input type="radio" name="q2" value="c"/>Flower Pose</label><br><br><br>

        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/headstand-splits.jpg" alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q3" value="a"/>Tree Pose</label><br> 
	<label><input type="radio" name="q3" value="b"/>Head Moon Pose</label><br>
 	<label><input type="radio" name="q3" value="c"/>Flower Pose</label><br> 
	<label><input type="radio" name="q3" value="d"/>Extanded Leg Headstand Pose</label><br><br><br>

        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/headstand.jpg" alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q4" value="a"/>Dog Pose</label><br> 
	<label><input type="radio" name="q4" value="b"/>Flower Pose</label><br>
 	<label><input type="radio" name="q4" value="c"/>Moon Pose</label><br> 
	<label><input type="radio" name="q4" value="d"/>Headstand</label><br><br><br>
 
        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Yoganidrasana.jpg" alt="yogacards.com"><br><br>
	<label><input type="radio" name="q5" value="a"/>Yordani Pose</label><br> 
	<label><input type="radio" name="q5" value="b"/>Moon Pose</label><br>
	<label><input type="radio" name="q5" value="c"/>Cat Pose</label><br>
	<label><input type="radio" name="q5" value="d"/>Yogic sleep Pose</label><br><br><br>

	<img src="http://www.yogacards.com/yoga_poses/tadasana-200.jpg" alt="yogacards.com"><br><br>
	<label><input type="radio" name="q6" value="d"/>Mountain</label><br>
	<label><input type="radio" name="q6" value="a"/>Moon </label><br> 
	<label><input type="radio" name="q6" value="b"/>Sun</label><br>
 	<label><input type="radio" name="q6" value="c"/>Wind</label><br><br><br>
	    	 
        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Vrisikasana.jpg" alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q7" value="a"/>Cancer</label><br> 
	<label><input type="radio" name="q7" value="d"/>Scorpion</label><br>
 	<label><input type="radio" name="q7" value="b"/>Rose</label><br> 
	<label><input type="radio" name="q7" value="c"/>Sun</label><br><br><br>

        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Virasana.jpg" alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q8" value="a"/>Dog Pose</label><br> 
	<label><input type="radio" name="q8" value="b"/>Cat Pose</label><br>
 	<label><input type="radio" name="q8" value="c"/>Flower Pose</label><br> 
	<label><input type="radio" name="q8" value="d"/>Hero Pose</label><br><br><br>

        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/lunge.jpg" alt="yogacards.com"><br><br>
 	<label><input type="radio" name="q9" value="a"/>Dog Pose</label><br> 
	<label><input type="radio" name="q9" value="b"/>Flower Pose</label><br>
 	<label><input type="radio" name="q9" value="c"/>Moon Pose</label><br> 
	<label><input type="radio" name="q9" value="d"/>Lunge Pose</label><br><br><br>
 
        <img src="http://www.yogacards.com/yoga-postures-2/yoga-cards/Bow-Pose.jpg" alt="yogacards.com"><br><br>
	<label><input type="radio" name="q10" value="a"/>Yordani Pose</label><br> 
	<label><input type="radio" name="q10" value="b"/>Moon Pose</label><br>
	<label><input type="radio" name="q10" value="c"/>Cat Pose</label><br>
	<label><input type="radio" name="q10" value="d"/>Bow Pose</label><br><br><br>
	
      
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
