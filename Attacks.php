<?php

class Attacks extends Pokemon
{
	private $name;
	private $damage;

	public function getName(){
		return $this->name;
	}

	public function getDamage(){
		return $this->damage;
	}
}

?>