<?php 

static $x=null; 
function myTest() 
{ 
	global $x;
	$sampleArray = array("haha", "huhu", "hehe");
	echo "Variable x is: $x"; 
	echo "<br>"; $x++; 
	foreach ($sampleArray as $item) {
		print $item;
		print "</br>";
	}
} 
	myTest(); 
	myTest(); 
	myTest();
	
	echo "</br></br>";
	var_dump($x);
?>