<?php

class Pickachu extends Pokemon
{
	public function __construct($name, $energyType, $hitPoints, $weakness, $resistance, $attackOne, $attackTwo){
		parent::__construct($name, $energyType, $hitPoints, $weakness, $resistance, $attackOne, $attackTwo);
	}
}