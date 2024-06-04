<?php 
require_once "football_team.php";

$team1 = new FootballTeam();
$team2=clone $team1;

$team1->setName("Real Madrid")
      ->setCoachName("Ancelotti")
      ->setPlayers(25)
      ->setManagerName("Perez")
      ->setCreatedAt("30-juin-1960");


$team2->setName("Barcelona")
      ->setCoachName("Xavi")
      ->setPlayers(20)
      ->setManagerName("Laporta")
      ->setCreatedAt("30-juin-1960");


echo "Team: ".$team1->getName()."\n".
     "Coach: ".$team1->getCoachName()."\n".
     "Players: ".$team1->getPlayers()."\n".
     "Manager Name: ".$team1->getManagerName()."\n".
     "Created At: ".$team1->getCreatedAt()."\n\n";


echo "Team: ".$team2->getName()."\n".
     "Coach: ".$team2->getCoachName()."\n".
     "Players: ".$team2->getPlayers()."\n".
     "Manager Name: ".$team2->getManagerName()."\n".
     "Created At: ".$team2->getCreatedAt();
        



