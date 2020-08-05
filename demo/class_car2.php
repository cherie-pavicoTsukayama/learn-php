<?php
  class Car {

    function moveWheels() {
      echo "Wheels move";
    }
  }

  // if(class_exists("Car")) {
  //   echo "This class exisits already!";
  // } else {
  //   echo "nope";
  // }

  //The below 'method_exists' method takes two arguments. The class it needs to check
  //for the method and the method name. 
  if(method_exists("Car", "moveWheels")) {
    echo "The wheelsMove method exisits!";
  } else {
    echo "The wheelsMove method does not exisits!";
  }
?>
