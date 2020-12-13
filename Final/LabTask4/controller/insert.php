<?php require '../data/_dbconnection.php' ; ?>

<?php
	if(isset($_POST['submit']))
	{
		$id = $_POST['id'];
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];


		$result = mysqli_query($mysqli, "INSERT into Labtask3 values('',' $id ',' $username ',' $pass ',' $email ',' $dob ')");


		if($result)
		{
			echo "Success";
		}
		else{
		echo "Failed";
	}
	}
?>