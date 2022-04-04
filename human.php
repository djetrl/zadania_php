<?php 
class Human {
	private $name;
	private $surname;
	private $batya;

	public function __construct($n, $s, $p) {
		$this->name = $n;
		$this->surname = $s;
		$this->batya = $p;
	}

	public function display() {
		echo sprintf('%s %s %s ', $this->surname,$this->name,$this->batya);
	}

	public function group() {
		echo 'Я в группе ';
		$this->group->display();
	}
}
?>