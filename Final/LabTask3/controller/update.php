<?php require '../data/_dbconnection.php' ; ?>

<?php
	if(isset($_POST['update']))
	{
		
		$stmt = $conn -> prepare("UPDATE Users SET username = ? , email= ? , pass =? , dob =?  WHERE id = ?");
		$stmt -> bind_param("sssi", $username, $email, $pass, $dob);

		$id = $_POST['id'];
		$username = $_POST['username'];
		$pass = $_POST['password'];
		$email = $_POST['email'];
		$dob = $_POST['dob'];

		$stmt -> execute();
		echo "<p>Records Updated Successfully</p>";
		$stmt-> close();

		
	
	}
?>
