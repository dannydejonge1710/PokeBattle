<?php

class Pickachu extends Pokemon
{
	public function __construct($name) {
		$energyType = "Lightning";
		$hitPoints = 60;
		$weakness = new Weakness('Fire', 1.5);
		$resistance = new Resistance('Fighting', 20);
		$attackOne = new Attacks('Electric Ring', 50);
		$attackTwo = new Attacks('Pika Punch', 20);
		parent::__construct($name, $energyType, $hitPoints, $weakness, $resistance, $attackOne, $attackTwo);
	}

	public function getAttacks($key){
		return $this->attacks[$key];	
	}

}