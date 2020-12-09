<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
</head>

<body style="text-align: center; background-color: lightblue;">

	<form method="POST" action="../controller/insert.php">


		<br><br><br><br>
		<label>ID</label>
		<input type="text" name="id">
		<br><br>
		<label>User Name</label>
		<input type="text" name="username">
		<br><br>
		<label>Email</label>
		<input type="email" name="email">
		<br><br>
		<label>Password</label>
		<input type="password" name="password">
		<br><br>
		<label>DOB</label>
		<input type="date" name="dob">
		<br><br>

		<input type="submit" value="submit" style="color:green; font-weight:bold">

	</form>

	

	
</body>
</html>