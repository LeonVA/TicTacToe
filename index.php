<?php
session_start();

if (!isset($_SESSION['key'])) {
   echo "ein zug wurde gemacht";
   $_SESSION['key'] = serialize("$board");
   $usestatus = unserialize($SESSSION["key"]);
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