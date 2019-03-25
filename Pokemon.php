<?php
 
class Pokemon
{
	private $name;
	private $energyType;
	private $hitPoints;
	private $health;
	private $attacks;
	private $weakness;
	private $resistance;

	public function __construct($name = null, $energyType = null, $hitPoints = null, $health = null, $attacks = null, $weakness = null, $resistance = null) 
	{
	  	$this->name = $name;
	   	$this->energyType = $energyType;
	   	$this->hitPoints = $hitPoints;
	   	$this->health = $health;
	   	$this->attacks = $attacks;
	   	$this->weakness = $weakness;
	   	$this->resistance = $resistance;
	}

	public function getName(){
		return $this->name;
	}

	public function getEnergyType(){
		return $this->energyType;
	}

	public function getHitPoints(){
		return $this->hitPoints;
	}

	public function getHealth(){
		return $this->health;
	}

	public function getAttacks(){
		return $this->attacks;	
	}

	public function getWeakness(){
		return $this->weakness;	
	}

	public function getResistance(){
		return $this->resistance;
	}
}

// class Bulbasaur extends Pokemon
// {
// 	public functon __construct
// 	{
		
// 	}
// }

?>
