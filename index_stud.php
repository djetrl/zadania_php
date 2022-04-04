<?php
	header('Content-type: text/html; charset=utf-8');
	require_once 'Group.php';
	require_once 'Student.php';
	require_once 'Descepline.php';

	function LoadStudents($group, $path){
		$file = nl2br(file_get_contents($path));
		$students = explode('<br />', $file);
		foreach ($students as $s) {
			$tmp = explode(';', $s);
			$surname = $tmp[0];
			$name = $tmp[1];
			$patr = $tmp[2];
			new Student($name, $surname, $patr, $group);
		}
	}
	$group1 = new Group(1,'И-01', 2);
	LoadStudents($group1, 'i01.txt');
	
	$d1 = new Descepline(1, 'Основы программирования');
	$d2 = new Descepline(2, 'Web-дизайн');
	$d3 = new Descepline(3, 'Элементы высшей математики');
	$d4 = new Descepline(4, 'Прикладное программное обеспечение');
	$d5 = new Descepline(5, 'Компьютерная графика');

	$group1->addDescepline($d1);
	$group1->addDescepline($d2);
	$group1->addDescepline($d3);
	$group1->addDescepline($d4);
	$group1->addDescepline($d5);

	$group1->display();

 ?>