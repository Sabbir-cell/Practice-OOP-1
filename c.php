<?php
	class calculator{
		public $x;
		public $y;
		public $z;
	public function twonumber($a,$b){
		$this->x=$a;
		$this->y=$b;

		if ($this->x > $this->y) {
			echo $this->x."is bigger";
		}else if ($this->y > $this->x) {
			echo $this->y."is bigger";
		}else{
			echo "numbers are equals";
		}


	}

}

?>