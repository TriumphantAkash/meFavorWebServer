<?php
	function foo() 
	{ 
		global $color; 
		include 'vars.php'; 
		echo "A".$color.$fruit; 
	}
	
	function foo1() 
	{ 
		$color; 
		//include 'vars.php'; 
		echo "A".$color.$fruit; 
	}
/*vars.phpisinthescopeoffoo()so* *$fruitisNOTavailableoutsideofthis* *scope.$colorisbecausewedeclaredit* *asglobal.*/

	foo();//Agreenapple 
	echo "A$color$fruit";//Agreen
	foo1();
?> 
