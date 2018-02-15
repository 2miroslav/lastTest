<?php
namespace Controlers\Core\Web;
class Pages{
	public function render()
	{
		return 'Hello World';
	}
	public function calculator($x,$y){
			return $x+$y;
	}
}

