<?php
  class Car {
    //use the keyword static to define a static property.
    static $wheels = 4; //this property is  only attached to the class, not to it's instances.
    var $hood = 1;


    function moveWheels($n) {
      //$this refers to the Car class. By using $this it refers to the instantiated
      // class.
      Car::$wheels = $n;
    }

 }

  $bmw = new Car();
  //You can use a static variable any where only if we refer to the class that it's located in
  // ie. Car::$wheels;
  echo "this is the static wheel variable value from the class Car: " . Car::$wheels . "<br>";
  Car::moveWheels(10);
  echo "This is the return of the method moveWheels using the static variable wheels: " . Car::$wheels;
?>
