<?php
class Player
{
private $name;
private $symbol;


public function __construct ($name,$symbol)
{
	$this->name = $name;
	$this->symbol = $symbol;
	
}
public function getName()
{
	$this->name = $name;
}
public function getSymbol()
{
	$this->symbol = $symbol;
	
}
}
?>