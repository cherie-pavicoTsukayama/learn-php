<?php include "functions.php"; ?>
<?php include "includes/header.php";?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>


		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">


	<?php


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
echo "Using the pre-built PHP math function pow(10, 10):" . pow(10, 10) . "<br>";
$string = "PHP is almost like JS";
echo "This is the string: " . $string . "<br>";
echo "Using the strtoupper method to turn string into all upercased letters: " . strtoupper($string) . "<br>";
$newArray = [3234, 346, 56875, 684673, 239, 1];
echo "<br>";
echo "This is the array for the below example: " . "<br>";
print_r($newArray);
echo "<br>";
echo "Using the max( ) method to find the biggest number in the array: " . max($newArray);
echo "<br>";
echo "<br>";
echo "Using the sort( ) method to sort the array: ";
echo "<br>";
sort($newArray);
print_r($newArray);

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
