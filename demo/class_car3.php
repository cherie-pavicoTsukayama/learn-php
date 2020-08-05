<?php
  class Car {
    var $wheels = 4;
    var $hood = 1;
    var $doors = 4;
    var $egine = 1;

    function moveWheels($n) {
      //$this refers to the Car class. By using $this it refers to the instantiated
      // class.
      $this->wheels = $n;
    }

    function createDoors($n) {
      $this->doors = $n;
    }
  }

  $bmw = new Car();
//to see the properties, or call methods of a Class you use the -> sign. Instead of dot notaion for an
//object like you would in javascript;
  echo "bmw has " . $bmw->wheels . " wheels.<br>";
  //I can change the value of the wheel property by doing the below.
  // $bmw->wheels = 8;
  $bmw->moveWheels(9);
  echo "bmw now has " . $bmw->wheels . " wheels.<br>";

  $truck = new Car();
  $truck->moveWheels(10);
  echo "the truck has " . $truck->wheels . " wheels.<br>";
?>
