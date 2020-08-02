<?php include "functions.php"; ?>
<?php include "db.php"; ?>
<?php include "includes/header.php";?>


	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>


		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">



	<?php

	/*  Step 1 - Create a database in PHPmyadmin

		Step 2 - Create a table like the one from the lecture

		Step 3 - Insert some Data

		Step 4 - Connect to Database and read data

*/
	if(isset($_POST['submit'])) {
		$name = $_POST['name'];
		$age = $_POST['age'];
		$query = "INSERT INTO dogs(dogName,age) ";
		$query .= "VALUES ('$name', '$age')";
		$result = mysqli_query($connection, $query);
		if(!$result) {
			die('Query FAILED' . mysqli_error($connection));
		} else {
			echo 'Dog has been added!';
		}

		function readDogNames() {
			global $connection;
			$query = "SELECT * FROM dogs";
			$result = mysqli_query($connection, $query);
			if(!$result) {
				die('Query FAILED') . mysqli_error($connection);
			}
			while($row = mysqli_fetch_assoc($result)) {
				$name = $row['dogName'];
				$age = $row['age'];
				echo "Name: " . $name . "<br>";
				echo "Age: " . $age . "<br>";
			}
		}
	}
	?>
	<div>
		<h1>Dogs</h1>
		<form action="7.php" method="post">
			<div class="form-group">
				<label for="name">Name</label>
				<input class="form-control" type="text" name="name" >
			</div>
			<div class="form-group">
				<label for="age">Age</label>
				<input class="form-control" type="text" name="age" >
			</div>
			<input class="btn btn-primary" type="submit" name="submit" value="submit">
		</form>
		<div>
			<?php
				readDogNames()
			?>
		</div>
	</div>




</article><!--MAIN CONTENT-->

<?php include "includes/footer.php"; ?>
