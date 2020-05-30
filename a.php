<?php
	class number{
		public $x;
		public $y;
		public $z;
		function __construct($a,$b){
			$this->x=$a;
			$this->y=$b;
		//echo "welcome sabbir <br>";
			}
		public function welcome(){
			echo "welcome"." ".$this->x." ".$this->y."<br>";
		}

		/*public function sum($a,$b){
			$this->x=$a;
			$this->y=$b;
			$this->z=$this->x+$this->y;
			return $this->z;
		}*/
		function __destruct(){
			echo $this->x." ".$this->y;
		}

	}




?>