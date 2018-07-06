<?php


require 'vendor/autoload.php';

use Entity\Game;
use Entity\Dice;
use Entity\Player;
use Entity\Monster;
use Entity\MonsterLevelUp;

$dice = new Dice();
//$player = new Player();
//$monster = new Monster();
//$monsterLevelUp = new MonsterLevelUp();
$game = new Game();
$dice = new Dice();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Jeux des monstres</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

</head>
<body>

	<h2 class="container" style="margin-top: 150px;">

		<?php

		 echo $dice->roll(6);   

		?>
		
	</h2>
	<a href=""></a>

  
</body>
</html>