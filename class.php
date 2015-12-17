<?php 
	class Car { 
		public $color; 
		public function Car($color) 
		{ 
			$this->color = $color; 
		} 
		
		public function what_color() 
		{ 
			return $this->color; 
		} 
	}

	$car1 = new Car("red"); 
	echo $car1->what_color(); 
?>
