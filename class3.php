<?php
class Car{

    var $wheels=4;
    var $hood=1;
    var $engine=1;
    var $doors=4;

    function move(){
        // echo "move please";
        $this->wheels=10;
       }

       function door()
       {
         $this->doors=6;

       }
}



$bmw= new Car();

$bmw->move();
echo $bmw->wheels;
 $bick= new Car();
 echo "<br>";
 $bick->door();
 echo $bick->doors;
// $bmw->move();



?>