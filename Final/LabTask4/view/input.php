<!DOCTYPE html>
<html>
<head>
	<title>Home</title>

	<script>
			function validate() {
				var a = document.getElementById('id').value;
				
				if(a == "") {
					document.getElementById('errorMsg1').innerHTML = "ID is empty";
					document.getElementById('errorMsg1').style.color = "red";
					return false;	
				}
				else{
					return true;
				}
				var b = document.getElementById('username').value;
				
				if(b == "") {
					document.getElementById('errorMsg2').innerHTML = "Name is empty";
					document.getElementById('errorMsg2').style.color = "red";
					return false;	
				}
				else{
					return true;
				}
				var c = document.getElementById('email').value;
				
				if(c == "") {
					document.getElementById('errorMsg3').innerHTML = "Email is empty";
					document.getElementById('errorMsg3').style.color = "red";
					return false;	
				}
				else{
					return true;
				}
				var d = document.getElementById('password').value;
				
				if(d == "") {
					document.getElementById('errorMsg4').innerHTML = "Password is empty";
					document.getElementById('errorMsg4').style.color = "red";
					return false;	
				}
				else{
					return true;
				}
				var e = document.getElementById('dob').value;
				
				if(e == "") {
					document.getElementById('errorMsg5').innerHTML = "DOB is empty";
					document.getElementById('errorMsg5').style.color = "red";
					return false;	
				}
				else{
					return true;
				}
			}
		</script>
</head>

<body style="text-align: center; background-color: lightblue;">
	

	<form method="POST" onsubmit="return validate()" action="../controller/insert.php">


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

	<p id="errorMsg1"></p>
	<p id="errorMsg2"></p>
	<p id="errorMsg3"></p>
	<p id="errorMsg4"></p>
	<p id="errorMsg5"></p>

	
</body>
</html>