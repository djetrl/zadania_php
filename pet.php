<?php
 class Pet{
    	private $name;
    	private $poroda;
      private $toy;
       public function __construct($n,$p,$t){
           $this -> name = $n; 
           $this -> poroda =$p;
           $this -> toy =$t;
       }
    	public function show(){
    		echo ('Привет, я %s и я %s<br>'. $this -> name. ' '. $this -> poroda);
    	}
      public function voice(){
         echo "Голос<br>";
      }
    public function game(){
         echo 'Я играю с ';
         $this -> toy ->display();
    }
 }



?>