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

	public function getAttacks($key){
		return $this->attacks[$key];	
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
}



// class Bulbasaur extends Pokemon
// {
// 	public functon __construct
// 	{
		
// 	}
// }

?>
