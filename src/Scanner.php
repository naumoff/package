<?php
/**
 * Created by PhpStorm.
 * User: andre
 * Date: 29.10.2017
 * Time: 14:22
 */

class Scanner {
	
	private $name;
	
	public function __construct()
	{
		$this->name = "Sergio Leone";
		$this->getAllFileds();
	}
	
	private function getAllFileds()
	{
		echo "<pre>";
		print_r($this->name);
	}
}