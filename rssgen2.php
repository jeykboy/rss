<?php

/*    

***Upcoming Features***

Extracting item RSS

*Title
*Link
*Description
*Image

SAMPLE
**********

if (strpos($a,'are') !== false) {
    echo 'true';
}

http://php.net/manual/en/function.strpos.php

**********

*/



//Pull List Items

$content = file_get_contents('http://feeds.feedburner.com/elise/simplyrecipes') ; // Gets Code

if (strpos($content,'<item>') !== false) {
    echo 'true';
} elseif (strpos($content,'<item>') == false) {

echo "False";	
	
}


?>





<?php


	$rss = new DOMDocument();
	
	
	$rss->load('http://feeds.feedburner.com/elise/simplyrecipes');
	
	
	$feed = array();
	foreach ($rss->getElementsByTagName('item') as $node) {
		$item = array ( 
			'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
			'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
			'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
			'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
			);
			
		array_push($feed, $item);
		
	}
	$limit = 5;
	for($x=0;$x<$limit;$x++) {
		$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
		$link = $feed[$x]['link'];
		$description = $feed[$x]['desc'];
		
		$date = date('l F d, Y', strtotime($feed[$x]['date']));
		
		echo '<p><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong><br />';
		
		echo '<small><em>Posted on '.$date.'</em></small></p>';
		
		echo '<p>'.$description.'</p>';
	}
?>

