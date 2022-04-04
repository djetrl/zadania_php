<?php 
header("Content-type:text/html; charset=utf-8");
require_once 'student.php';
require_once 'group.php';

$group1 = new Group(1,'i-02',2);
$s1 = new Student('Иван', 'Иванов', 'Иванович', $group1);
$s2 = new Student('Петр', 'Петров', 'Петрович', $group1);
$s3 = new Student('Ольга', 'Ольгова', 'Ольговна', $group1);





$group1->display();
?>