<?php 
class Descepline{
	private $title;
	private $id;

	public function __construct($t, $i) {
		$this->id = $i;
		$this->title = $t;
	}

	public function getTitle() {
		return $this->title;
	}
}
?>