<?php include "functions.php"; ?>
<?php include "includes/header.php";?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>

	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */

	$num = 0;
	for ($num = 0; $num < 6; $num++)
	if($num === 4) {
		echo 'ok... its pretty cool' . "<br>";
	} else if($num < 5) {
		echo 'php is ight' . "<br>";
	} else {
		echo 'I love PHP!'. "<br>";
	}

	for ($num1 = 1; $num1 <= 10; $num1++){
		echo $num1 . "<br>";
	}

	$num2 = 10;
	switch($num2) {
		case 10:
			echo "it is 10!";
			break;
		case 5:
			echo "it is 5!";
			break;
		case 5:
			echo "it is 5!";
			break;
		case 5:
			echo "it is 5!";
			break;
		case 5:
			echo "it is 5!";
			break;
		default:
			echo "no cases matched...";
			break;
	}

?>






</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
