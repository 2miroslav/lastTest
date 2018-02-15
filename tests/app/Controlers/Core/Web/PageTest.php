<?php
class PageTest extends PHPUnit_Framework_TestCase
{
	public function testRenderHelloWorld(){
		$pages= new \Controlers\Core\Web\Pages();
		$expected= 'Hello World';
		//$waitings= $pages->render();
		$this->assertEquals($expected,$pages->render());
	}

	public function testCalculator(){
		$pages= new \Controlers\Core\Web\Pages();
		$this->assertEquals(4,$pages->calculator(2,2));
	}
}
