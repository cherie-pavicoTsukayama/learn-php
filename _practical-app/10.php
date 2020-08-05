<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>


	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">


	<?php

	/*  Step 1: Use the Make a class called Dog

		Step 2: Set some properties for Dog, Example, eye colors, nose, or fur color

		Step 4: Make a method named ShowAll that echos all the properties

		Step 5: Instantiate the class / create object and call it pitbull

		Step 6: Call the method ShowAll
	*/

	?>
	<?php
		class Dog {
			var $eyeColor = "blue";
			var $nose = "Black";
			var $furColor = "Grey";

			function showAll() {
				echo "The eye color of the dog is: " . $this->eyeColor . ". <br>";
				echo "The nose color of the dog is: " . $this->nose . ". <br>";
				echo "The fur color of the dog is: " . $this->furColor . ". <br>";
			}
		}

		$pitbull = new Dog();
		$details = $pitbull->showAll();
		echo $details;
	?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
