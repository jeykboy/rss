<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Code</title>



<!-- Boootstrap Start -->


  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<!-- Boootstrap End -->
<style>

html { font-family:monospace ,Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New"}

body { background-color:#EEEEEE;}

#resultBox { width:500px; height:auto; margin:0 auto;}
.results { width:500px; min-height:500px; color:#FF7321; background-color:#252525;}
.target { width:500px; height:50px; margin:0 auto; text-align:left; margin-top:30px; color:#5cb85c; font-weight:bold;}
#jump { width:400px; height:250px; margin:0 auto;}

</style>



</head>

<body>



<div id="jump">
<div class="jumbotron">
  <h1>E-mail</h1>
  <p>This is where the code stops</p>
  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
</div>
</div>
<?php



//Text Are Input Results
$myCode = $_POST['code'];


?>




<!---- LOOK UP HTML BUTTONS ---->
<a href="http://localhost/practice/rss/production.php"><span class="glyphicon glyphicon-refresh" aria-hidden="true"></span></a>
<br>
<br>


<div id="resultBox">
<?php




//echo htmlspecialchars($myCode);









//Converts Code and HTML Characters to String
$spitCode = htmlspecialchars($myCode);


if(stristr($spitCode, '[firstname]') == true) {
    str_ireplace("[FirstName]", "[[dVar=FirstName]]", "[FirstName]");
  } else {
	echo "Nothing Here"; 
  }
  



/*
//Count Instances
echo substr_count($spitCode, "meta"); // will echo Times Meta is in code
*/




//find if string exist


/* if(false !== stripos($spitCode, '[FirstName]')){
	echo substr_count($spitCode, '[FirstName]');
}

*/


/*

if(stristr($spitCode, '[firstname]') == true) {
    echo '"Name" was founded in string';
  } else {
	echo "Nothing Here"; 
  }

*/


?>

<textarea class="results" id="to_copy" name="results"><?php
 
 
 
 
 
 

$personalization = array("[FirstName]","car");



$token = array("[[dVar=FirstName]]","truck");

echo preg_replace($personalization, $token, $spitCode);


  //echo str_ireplace("[FirstName]","[[dVar=FirstName]]",$spitCode);
 
 
 
 
  ?></textarea>
<button class="btn" id='copy_button' data-clipboard-target='to_copy' onClick="add_content()" value="write"><b>Copy To Clipboard</b></button>



</div>

<div id="target" class="target"></div>



<!------ START OF COPY TO CLIPBOARD------>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="javascripts/ZeroClipboard.js"></script>
    
    <script language="JavaScript">
$(document).ready(function() {

  var clip = new ZeroClipboard($("#copy_button"), {
      moviePath: "javascripts/ZeroClipboard.swf"
    });     
});
</script>

<script type="text/javascript">
function add_content(){
	document.getElementById("target").innerHTML="Copied";

}

</SCRIPT>

<!------ END OF COPY TO CLIPBOARD------>

</body>
</html>