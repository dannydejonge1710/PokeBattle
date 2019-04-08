<?php

class Charmeleon extends Pokemon
{
	public function __construct($name, $energyType, $hitPoints, $weakness, $resistance, $attackOne, $attackTwo){
		parent::__construct($name, $energyType, $hitPoints, $weakness, $resistance, $attackOne, $attackTwo);
	}
}