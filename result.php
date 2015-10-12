<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Code</title>

<style>

html { font-family:monospace ,Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New"}

#resultBox { width:500px; height:700; margin:0 auto;}
.results { width:500px; min-height:700px;}
.target { width:500px; height:50px; margin:0 auto; text-align:left; margin-top:50px;}


</style>



</head>

<body>


<?php



//Text Are Input Results
$myCode = $_POST['code'];


?>




<!---- LOOK UP HTML BUTTONS ---->
<a href="http://localhost/practice/rss/production.php"><button>Return</button></a>


<br>
<br>


<div id="resultBox">
<?php




//echo htmlspecialchars($myCode);


//Converts Code and HTML Characters to String
$spitCode = htmlspecialchars($myCode);




/*
//Count Instances
echo substr_count($spitCode, "meta"); // will echo Times Meta is in code
*/




//find if string exist


/* if(false !== stripos($spitCode, '[FirstName]')){
	echo substr_count($spitCode, '[FirstName]');
}

*/





?>

<textarea class="results" id="to_copy" name="results"> <?php echo $spitCode; ?> </textarea>
<button id='copy_button' data-clipboard-target='to_copy' onClick="add_content()" value="write"><b>Copy To Clipboard</b></button>



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