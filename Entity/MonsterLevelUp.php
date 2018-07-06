<?php

namespace Entity;

/**
* 
*/
class MonsterLevelUp extends Monster
{

	public $dice;
    private $isAlive = true;
   	private CONST DAMMAGE = 10;
        
    public function __construct($dice, $isAlive)
    {	
    	$this->isAlive = $isAlive;
	    $this->dice = $dice;
    } 

}