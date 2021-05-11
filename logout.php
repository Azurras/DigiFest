<?php
	session_start();
	session_unset(); 
	session_destroy();


	$doc = new DOMDocument();
	$doc->loadHTMLFile("index.html");
	echo $doc->saveHTML(); 
?>