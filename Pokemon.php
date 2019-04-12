<?php
 
class Pokemon
{
	private $name;
	private $energyType;
	private $hitPoints;
	private $attacks;
	private $weakness;
	private $resistance;

	public function __construct($name, $energyType, $hitPoints, $weakness, $resistance, $attackOne, $attackTwo) 
	{
	  	$this->name = $name;
	   	$this->energyType = $energyType;
	   	$this->hitPoints = $hitPoints;
	   	$this->weakness = $weakness;
	   	$this->resistance = $resistance;
	   	$this->attacks = [$attackOne, $attackTwo];
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



	public function setAttacks($attacks){
		$this->attacks[] = $attacks;
	}

	public function getWeakness(){
		return $this->weakness;	
	}

	public function setWeakness($weakness){
		$this->weakness = $weakness;
	}

	public function getResistance(){
		return $this->resistance;
	}

	public function setResistance($resistance){
		$this->resistance = $resistance;
	}

	// $target = the pokemon that will be attacked
	// $attacknr = 0 or 1 
	public function Attack($target, $attacknr)
	{
		$attack = $this->attacks[$attacknr];
		printf("%s attacks %s with %s <br>", $this->name, $target->getName(), $attack->getName() );
		$target->DoDamage($this->energyType, $attack->getDamage() );
	}
	
	// aanval met fire voor 30 punten
	public function DoDamage($energytype_attacker, $damagepoints) {
		// handle weakness
		
		
		// handle resistance
		
		// handle damage
		printf("%s: help, I'm attacked with %s %s <br>", $this->name, $energytype_attacker, $damagepoints );
		
	}



}



// class Bulbasaur extends Pokemon
// {
// 	public functon __construct
// 	{
		
// 	}
// }

?>
