
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

}

</style>
<script>
function check(){
    var n=document.getElementById("usr").value;
    var p=document.getElementById("pwd").value;
    var hr = new XMLHttpRequest();
    var a;
    var results = document.getElementById("output");

    hr.open("GET", "yogajson.json", true);
    hr.setRequestHeader("Content-type", "application/json");
    hr.onreadystatechange = function() {
	    if(hr.readyState == 4 && hr.status == 200) {
		    var data = JSON.parse(hr.responseText); 

          for (var i = 0, l = data.length; i < l; i++) {

                     if(data[i].name==n && data[i].password == p){
				 a ="Welcom";break;}
                  else{a="sorry you are not registrat";
			document.getElementById("usr").value="";
 		       document.getElementById("pwd").value="";}
                }

		if(a=="Welcom"){window.location.href="yoga.php";}
                 else {alert("sorry you are not registered");
                       document.getElementById("usr").value="";
 		       document.getElementById("pwd").value="";}	
	    }
    
    }

    hr.send(null); 
	 
}

</script>
</head>
<body>
<div class="container">

<div class="row">
    <div class="col-sm-4">
</div>
    	<div class="col-sm-4">
	<h3>CS230 Laboratory Assignment<br>Login Screen</h3><br>

	 
 		 Name:<br><input type="text" class="form-control" id="usr">
		Password:<br><input type="password" class="form-control" id="pwd"><br><br>
	

  <button type="button" class="btn btn-primary" onclick="check()">Login</button><br><br>

  <button type="button" class="btn btn-primary" onClick="document.location.href='yogareg.php'">Registration</button><br>
<br>

<div class="well" id="w">
<p>Examples of names <br> and passwords from json file</p><br>
<p>valid login: luiza password:luiza1</p>
<p>valid login: cat password:cat1</p>
<p>valid login: dog password:dog1</p>
<p>valid login: mouse password:mouse1</p>

</div>

</div>
   <div class="col-sm-4"></div>
  </div>

</body>
</HTML>

