<?php
	header("Content-type:text/html; charset=utf-8");
	require_once 'Toy.php';
	require_once 'cat.php';
	require_once 'dog.php';

	$toy1 = new Toy('Игрушечная мышка');

	$pet1 = new dog("Шарик", "пудель" ,new Toy('Мячик'));
	$pet2 = new cat("Василий", "кот", $toy1);

	$pet1 -> show();
	$pet1 -> voice();
	$pet1 -> game();
  
  	$pet2 -> show();
	$pet2 -> voice();
	$pet2 -> game();
?>