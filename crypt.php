<?php
usleep(2);
$start = microtime(true);
include "class.alphapad.php";

if(isset($_COOKIE["key"]) && isset($_COOKIE["pad"])) {
	$permutation = new alphaPad($_COOKIE["key"],$_COOKIE["pad"]);
	switch ($_POST['prefix']){
	 case "set":{if(isset($_POST['key']) && isset($_POST['pad'])){set($_POST['key'],$_POST['pad']);echo "done";}}break;
	 case "en": {if(isset($_POST['name'])){$permutation->_encrypt($_POST['name']);get_Time($start);}}break;
	 case "de": {if(isset($_POST['code'])){$permutation->_decrypt($_POST['code']);get_Time($start);}}break;
	 default: echo "bad";
	}
}
else {
	//- default setup
	echo "<div>Loading the default settings...";
	set(2013,10); 
	echo "<br>Done! Please try the encrypt/decrypt again</div>";
}

function set($key, $pad) {
	 setcookie('key', $key, time() + 1*24*60*60);
     setcookie('pad', $pad, time() + 1*24*60*60);
}

function get_Time($start){
	$end = microtime(true);
	$time = $end - $start;
	echo "<br>Execution time: ".$time." seconds</div>";
}
