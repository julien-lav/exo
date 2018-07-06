<?php

declare(strict_types=1);
namespace Entity;

class Dice
{
	
	public function __construct()
	{
	
	}

	public function roll ($sides = 6)
	{
		return mt_rand(1, $sides);
	}
    	
}
