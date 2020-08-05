<?php
  class Car {
    //keyword public same meaning as var, its available to the whole program.
    public $wheels = 4;
    //protected is available to it's class or any subclasses or an exednts class.
    protected $hood = 1;
    // only available to this class. Not avaialble to an extends.
    private $doors = 4;
    var $egine = 1;

    // you can make methods public, protected or private too.
    function showProperty() {
      //$this refers to the Car class. By using $this it refers to the instantiated
      // class.
     echo "hood: " . $this->hood . "<br>";
    }
  }

  class Semi extends Car {

  }


  $bmw = new Car();
  echo "Wheels: " . $bmw->wheels . "<br>"; //shows on the browser
  // echo $bmw->hood; //show an error because we are trying to use it OUTSIDE of the class.
  echo $bmw->showProperty(); //displays the hood property on the dom because the function is returning the variable value that it has access too.
  $semiTruck = new Semi();
  echo "semiTruck ";
  echo $semiTruck->showProperty(); //displays the hood property on the dom because the function is returning the variable value that it has access too.

?>
