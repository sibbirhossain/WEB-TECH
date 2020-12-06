<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>

	<?php
	  	$idError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["id"])) {
				  $idError = "ID is required";
			}
			else {
				echo "ID : " . $_REQUEST["id"];
			}
		}
        echo "<br>";
        $nameError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["name"])) {
				  $nameError = "Name is required";
			}
			else {
				echo "Name : " . $_REQUEST["name"];
			}
		}
        echo "<br>";
        $genderError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["gender"])) {
				  $gernderError = "Gender is required";
			}
			else {
				echo "Gender : " . $_REQUEST["gender"];
			}
		}
        
        echo "<br>";
        $emailError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["email"])) {
				  $emailError = "Email is required";
			}
			else {
				echo "Email : " . $_REQUEST["email"];
			}
		}
        
        echo "<br>";
        $addressError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["address"])) {
				  $addressError = "Address is required";
			}
			else {
				echo "Address : " . $_REQUEST["address"];
			}
		}
    
        echo "<br>";
        $cityError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["city"])) {
				  $cityError = "City is required";
			}
			else {
				echo "City : " . $_REQUEST["city"];
			}
		}
    
        echo "<br>";
        $stateError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["state"])) {
				  $stateError = "State is required";
			}
			else {
				echo "State : " . $_REQUEST["state"];
			}
		}
    
        echo "<br>";
        $countryError = "";
	  	if($_SERVER["REQUEST_METHOD"] == "POST") {
			if(empty($_REQUEST["country"])) {
				  $countryError = "country is required";
			}
			else {
				echo "Country : " . $_REQUEST["country"];
			}
		}
        echo "<hr>";
        
	?>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
	<span></span>
	<strong>Student Id</strong>
	<br/> 
    <input type="text" name="id" required>
	<br />
	<span><?php echo $idError; ?></span><br />
     
    <strong>Student Name</strong>   
	 <br/>
    <input type="text" name="name" required>
	<br /><br />
    <span><?php echo $nameError; ?></span><br />


	<strong>Gender</strong><br/>
	<input type="radio" name="gender" value="male" required>Male
    <br/>
	<input type="radio" name="gender" value="female" required>Female
    <br/>
    <span><?php echo $genderError; ?></span><br />
  
    <strong>Student Email</strong>    
     <br/>
    <input type="text" name="email" value="@" required>
	<br /><br />
    <span><?php echo $emailError; ?></span><br />
    
    <strong>Address</strong>
    <br/>
    <input type="text" name="address" required style=" width:333px">
	<br />       
    Street Address
    <br />
    <input type="text" name="address2"  style=" width:333px">
	<br />
    Address line 2 
    
    <span><?php echo $addressError; ?></span><br />
        
    <input type="text" name="city" required>
    <span><?php echo $cityError; ?></span>
    
    <input type="text" name="state" required style=" width:157px">
    <span><?php echo $stateError; ?></span>
    <br/>

    <span style="margin-right:125px">City</span>
    <span>State/Province/Region</span>
    <br/>
        
    <input type="text" name="zip" >
    <select name="country" style=" width:162px">
    <option value="Bangladesh">Bangladesh</option>
    <option value="India">India</option>
    <option value="Pakisthan">Pakisthan</option>
    <option value="Nepal">Nepal</option>
    </select>
    <span><?php echo $countryError; ?></span>
    <br/>

    <span style="margin-right:50px">Zip/Postal Code</span>
    <span>Country</span>
	
	<br /><br />
	<input type="submit" value="Save Form" style="color:green; font-weight:bold">
	</form>
</body>
</html>