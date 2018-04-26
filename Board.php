<?php
class Board
{
/*@var array string $board*/
private $board = array();

/*constructs a 2d arrayList*/
public function __construct()
{
	$board = array(
	array("","",""),
	array("","",""),
	array("","",""),);
	
}

/*gives the players the symbol and position*/
public function playsSymbol($symbol,$position)
{
	
// todo: implement	
}


public function getBoard()
{
	return $this->Board;
}
	
} 
?>