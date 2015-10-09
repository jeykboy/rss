<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Code Test</title>


<style>



</style>

</head>

<body>


<?php

$a = 5;

$b = 9;

if ($a > $b){
	
	$rssImageStyle = "width=300px";
	
} else{
	
	$rssImageStyle = "display:inline;";
	
}




?>



<?php

$rssImageSrc = "http://rack.3.mshcdn.com/media/ZgkyMDE1LzEwLzA5L2I5L09iYW1hLjU2MTNlLmpwZwpwCXRodW1iCTU3NXgzMjMjCmUJanBn/b6127565/ac7/Obama.jpg";

$rssImageLink = "http://mashable.com/2015/10/09/obama-syria-collapse/?utm_campaign=Feed%3A+Mashable+%28Mashable%29&utm_cid=Mash-Prod-RSS-Feedburner-All-Partial&utm_source=feedburner&utm_medium=feed#xLh0.fC8viqb";

$rssImage = "<img src='".$rssImageSrc."'"." style='".$rssImageStyle."'" ;

?>




<a href="<?php echo $rssImageLink; ?>">


<?php echo $rssImage;  ?>


</a>
<?php ?>

</body>
</html>