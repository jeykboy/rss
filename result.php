<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Code</title>

<style>

#resultBox { width:400px; height:800; margin:0 auto;}


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

$spitCode = strtolower($spitCode);


/*
//Count Instances
echo substr_count($spitCode, "meta"); // will echo Times Meta is in code
*/




//find if string exist


/* if(false !== stripos($spitCode, '[FirstName]')){
	echo substr_count($spitCode, '[FirstName]');
}

*/


echo $spitCode;

?>


</div>




</body>
</html>