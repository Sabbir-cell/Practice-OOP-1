<?php
	class calculator{
		public $x;
		public $y;
		public $z;
		public function add($a,$b){
			$this->x=$a;
			$this->y=$b;
			$this->z=$this->x+$this->y;
			return $this->z;
		}
	}






?>