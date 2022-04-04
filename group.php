<?php 
class Group {
	private $id;
	private $title;
	private $course;
	private $students = array();
	private $descepline = array();

	public function __construct($i, $t, $c) {
		$this->id = $i;
		$this->title = $t;
		$this->course = $c;
	}

	public function addStudent($student)
	{
		array_push($this->students, $student);
	}

	public function display() {
		echo '<h1> Группа '.$this->title.'</h1>';
		foreach ($this->students as $s) {
			$s->display();
			
		}
	}

	public function addDescepline($descepline)
	{
		array_push($this->descepline, $descepline);
	}

	public function getTitle() {
		return $this->title;
	}
}
?>