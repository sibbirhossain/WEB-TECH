<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
</head>
<body style="background-color: #87CEEB;">

	<div>
		<h1 style="text-align: center;">Welcome </h1>
	</div>

	<form style="text-align: center;">
		<label for="fname">First Name </label>
		<input type="text" id="fname" class="cfname">

		<br>


		<label for="lname">Last Name </label>
		<input type="text" id="lname" class="clname" >

		<br>

		<label for="email" >Email ID </label>
		<input type="text" id="email" class="cemail">

		<br>
		<label for="sex">Sex</label>
		<input type="radio" id="male" name="gender" value="male">Male
		<input type="radio" id="female" name="gender" value="femal">Female
		<br>
		
		<label for="subject">Subject</label>
  		<select id="subject" name="subject">
    	<option value="Webtech">Web Technology</option>
    	<option value="compilerdesign">Compiler Design</option>
    	<option value="engmanagement">Engineering Management</option>
    	<option value="datacom">Data Communication</option>
  		</select>
  		<br>

		<label for="email">Message </label>
		<textarea name="message" rows="3" cols="20" title="message"></textarea>

		<br>

		<input type="submit" value="Submit">
		<input type="submit" value="Reset">
	</form>


</body>
</html>
