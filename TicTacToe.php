<?php
class TicTacToe
{
	
private $currentPlayer;

private function __construct($currentPlayer = "X")
{
	$this->currentPlayer = $currentPlayer;	
}

/*toggles the currentPlayer if it has the symble X to an O*/
private function switchPlayer ()
{
	if($currentPlayer == "X" )
	{
		$currentPlayer = "0";
	} else{
		$currentPlayer = "X";
	}
}

public function move($player,$position)
{
	// todo: implement	
}

/*shows if the correnStatus is a win or a loose */
public function currentStatus()
{
	// todo: implement	
}	

}
?>