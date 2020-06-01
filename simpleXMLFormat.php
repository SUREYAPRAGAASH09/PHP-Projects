<?php

$xml = new SimpleXMLElement('<xml/>');

 
    $track = $xml->addChild('track');
    $track->addChild('path', "song$i.mp3");
    $track->addChild('title', "Track $i - Track Title");
 

Header('Content-type: text/xml');
print($xml->asXML());
?>
