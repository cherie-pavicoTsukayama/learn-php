<?php
  class Car {
    var $wheels = 4;
    var $hood = 1;
    var $doors = 4;
    var $egine = 1;

    function __construct() {
      //$this refers to the Car class. By using $this it refers to the instantiated
      // class.
      echo $this->wheels;
    }
  }

  $bmw = new Car();

function console_log( $data ){
  echo '<script>';
  echo 'console.log('. json_encode( $data ) .')';
  echo '</script>';
}

Usage:
$myvar = array(1,2,3);
console_log( "typeof: " . gettype($myvar) );
?>
