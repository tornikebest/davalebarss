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
$feed =  simplexml_load_file($file);
?>
<a href="http://cnn.com"><img id="logo" src='http://i.cdn.turner.com/cnn/.e/img/3.0/global/header/intl/hdr-globe-central.gif'/></a>

<h1 id="header1">
<?php

echo $feed -> channel -> title;
?>
</h1>

<?php
echo "<ul>";

foreach ($feed -> channel -> item as $item) {
echo "<div>";
		$data = strtotime($item->pubDate);
		$time = date('j M  g:i A', $data);
	echo "<li class='item' >
	     <span class='title'><a href='".$item -> link."'>".$item -> title."</a></span>
	     <span class='time'>".$time."</span>
		 <span class='description'><a href='".$item -> link."'><img src='http://cdn3.iconfinder.com/data/icons/eightyshades/512/23_Play-48.png'/></a>".$item -> description."
		 <a href='".$item -> link."'>Read More...</a>
		 
		 </span></div><br/>
		 </li>";
	}
echo "</ul>";


?>



</body>
</html>
