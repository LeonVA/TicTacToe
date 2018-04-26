<?php
session_start();

if (!isset($_SESSION['visited'])) {
   echo "Du hast diese Seite noch nicht besucht";
   $_SESSION['visited'] = true;
}

require_once("TicTacToe.php");
require_once("Player.php");
require_once("Board.php");
require_once("bordervorlage.php");


$spieler1 = new Player("Leon","X");
$spieler2 = new Player("gegner","O");

$board = new Board();
$print = $board->getBoard();





?>