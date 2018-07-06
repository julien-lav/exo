<?php

namespace Entity;

/**
* 
*/
class Monster
{
	
	public $dice;
    private $isAlive = true;
   	private CONST DAMMAGE = 5;

    public function __construct($dice, $isAlive)
    {	
    	$this->isAlive = $isAlive;
	    $this->dice = $dice;
    }    

    public function Roll()
    {
    	$this->dice = new Dice();
        return $this->dice->roll(6);
    }   

    public function Attack($player)
    {
    	$attack_monstre = $this->Roll(6);
    	$attack_player = $player->Roll(6);
    	if ($attack_monstre  > $attack_player)
    	{
    		$player->Dammage(DAMMAGE);
    	}
    }

    public function isAlive()
    {
    	return $isAlive;
    }
}



