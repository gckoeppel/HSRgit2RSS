<?php

	// append.php?fn=asdf&rn=asdf&a=gian&d=07.03.2013&id=1234&m=commitmessage
	
	$reponame = $_GET['rn'];
	$feedname = $_GET['fn'];
	$author = $_GET['a'];
	$date = $_GET['d'];
	$message = $_GET['m'];
	// for unique links in the rss feed
	$id = $_GET['id'];	
	
	$xml = "feeds/{$feedname}.rss";
	$rss = file_get_contents($xml);
	$dom = new DOMDocument();
	$dom->loadXML($rss);

	// should have only 1 node in the list
	$nodeList = $dom->getElementsByTagName('channel');

	// assuming there's only 1 channel tag in the RSS file:
	$nChannel = $nodeList->item(0);

	// now create the new item
	$newNode = $dom->createElement('item');
	$newNode->appendChild($dom->createElement('title', 'a new commit in '.$reponame));
	$newNode->appendChild($dom->createElement('link', 'https://git.hsr.ch/git/'.$reponame.'/'.$id));
	$newNode->appendChild($dom->createElement('description', 'Autor = '.$author.', date = '.$date.' Message: '.$message));

	// add item to channel
	$nChannel->appendChild($newNode);
	$rss = $dom->saveXML();
	file_put_contents($xml, $rss);

?>