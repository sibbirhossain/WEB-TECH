<?php require '../data/_dbconnection.php' ; ?>

<?php
	if(isset($_POST['delete']))
	{
		
		$stmt = $conn -> prepare("DELETE from Users WHERE id = ?");
		$stmt -> bind_param("i", $id);

		$id = $_POST['id'];
		
		$stmt -> execute();
		echo "<p>Records deleted Successfully</p>";
		$stmt-> close();

		
	
	}
?>



