<?php
class php
{
	
	public $a= "shadik";
	private $b="samrat";
	protected$c="robin";
}
class html extends php
{
	public function css(){
		echo $this->c;
	}
	
	
}
$name=new html;
$name->css();








?>