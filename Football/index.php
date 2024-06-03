<?php 


require_once "football_team.php";

$team1 = new FootballTeam();

$team1->setName("Real ")->setCoachName("Bernard Ng")->setPlayers(25)->setManagerName('Pat')->setCreatedAt('cre');

$team2=clone'$team1';


