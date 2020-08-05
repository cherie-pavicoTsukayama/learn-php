<?php include "functions.php"; ?>
<?php include "includes/header.php";?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">



	<?php

	/*  Create a link saying Click Here, and set
	the link href to pass some parameters and use the GET super global to see it

		Step 2 - Set a cookie that expires in one week

		Step 3 - Start a session and set it to value, any value you want.
	*/
	$name = 'Ryze';
	$class = 'mage';
	$button = 'Click Me!';
	?>
	<div>
		<a href="9.php?id=<?php echo $name ?>&class=<?php echo $class ?>"><?php echo $button ?></a>
	</div>
<?php
	print_r($_GET);
?>



</article><!--MAIN CONTENT-->
<?php include "includes/footer.php"; ?>
