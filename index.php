<!doctype html">
<html>
<head>
<meta charset= "utf-8" />
<title>-CNN WORLD-</title>
<link type="text/css" rel="stylesheet" href="style.css"/>

</head>
<body>
<?php

$file = "http://rss.cnn.com/rss/edition_world.rss";
$feed =  simplexml_load_file('http://rss.cnn.com/rss/edition_world.rss');

?>

<h1 id="header1">
<?php

echo $feed -> channel -> title;
?>
</h1>

<?php
echo "<ul>";

foreach ($feed -> channel -> item as $item) {
		$data = strtotime($item->pubDate);
		$time = date('j M  g:i A', $data);
	echo "<li class='item'>
	     <span class='title'>".$item -> title."</span>
	     <span class='time'>".$time."</span>
		 <span class='description'>".$item -> description."
		 <a href='".$item -> link."'>Read More...</a>
		 </span>
		 </li>";
	}
echo "</ul>";


?>



</body>
</html>
