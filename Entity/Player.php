<?php

namespace Entity;

/**
* 
*/
class Player
{
	public  $dice;
	private $life;
	private $isAlive = true;

	function __construct($life)
	{
		$this->life = $life;
	}

	public function player ($point)
	{
		$life = $points;
	} 

	public function Roll()
    {
    	$this->dice = new Dice();
        return $this->dice->roll(6);
    }   

    public function Attack($player)
    {
    	$attack_monstre = $this->Roll();
    	$attack_player = $player->Roll();
    	if ($attack_monstre  > $attack_player)
    	{
    		$player->Dammage(DAMMAGE);
    	}
    }

    public function hasDammage($dammage)
    {
    	if(Shiel() === true) {
    		$life -= $dammage;
    	}
    }

    public function isAlive()
    {
        if($life < 0)
        {
            return $isAlive = false;
        }
    }

    private Shield()
    {
    	$this->dice = new Dice();
        return $this->dice->Roll(6) <= 2;
    }

}

  

}
