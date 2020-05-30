<?php
	
	class  a
	{
		
		 public function odd($x)
		{
			if ($x%2==0) {
				echo "even";
			}else{
				echo "odd";
			}
		}
	}

$b=new a;
$b->odd(10);


?>