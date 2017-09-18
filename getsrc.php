<?php
$imageurl = "<img src='http://example.com/test/img.jpg'>";
$html =  $imageurl;
$doc = new DOMDocument();
$doc->loadHTML($html);
$xpath = new DOMXPath($doc);
echo $src = $xpath->evaluate("string(//img/@src)");
?>
