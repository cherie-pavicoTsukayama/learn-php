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
  //using the extends key word just like in a jsx file when creating a new class it
  //inherits the properties and methods (like protos in jsx).
  class Plane extends Car {
  }
  $jet = new Plane();
  echo $jet->wheels;
  // if(class_exists('Plane')) {
  //   echo "The Plane class exists!";
  //  } else {
  //    echo "the class not exists...";
  //  }
?>
