<?php

namespace Entity;

class Game
{
    private $player;

    public function __construct()
    {   
        $this->player = $player;
    } 
    
    public function launchGame() 
    {
        $new = new Player();
        $new_player = $new->player(150);
        while($new_player->isAlive())
        {
            $monster = new monster();
            while($new_player->isAlive() && $monster->isAlive())
            {   
            
                $new_player->Attack($monster);
                if($monster->isAlive() == true)
                {
                   $monster->Attaque($new_player);
                }
            }
        }
    }
}

