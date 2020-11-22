<!DOCTYPE html>
<html>

<head>
  <title>Booking</title>
  
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>

<body>

  <?php require '_nav.php' ?>

  <?php

  $name = $phone = $gender = $email = $address  = "";
  $nameErr = $phoneErr = $genderErr = $emailErr = $addressErr = "";
  $status = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $counter = 0;
    if (isset($_POST["name"]) & !empty($_POST["name"])) {
      $name = test_input($_POST["name"]);
    } else {
      $nameErr = "Please enter your name";
      $counter = $counter + 1;
    }

    if (isset($_POST["phone"]) & !empty($_POST["phone"])) {
      $phone = test_input($_POST["phone"]);
    } else {
      $phoneErr = "Please enter your phone number";
      $counter = $counter + 1;
    }

    if (isset($_POST["gender"]) & !empty($_POST["gender"])) {
      $gender = test_input($_POST["gender"]);
    } else {
      $genderErr = "Please select gender";
      $counter = $counter + 1;
    }

    if (isset($_POST["email"]) & !empty($_POST["email"])) {
      $email = test_input($_POST["email"]);
    } else {
      $emailErr = "Please enter your email";
      $counter = $counter + 1;
    }

    if (isset($_POST["address"]) & !empty($_POST["address"])) {
      $address = test_input($_POST["address"]);
    } else {
      $addressErr = "Please enter your address";
      $counter = $counter + 1;
    }


    if ($counter == 0) {
      $status = "Added  Successful";

      $user = fopen("../data/booking.txt", "a") or die("Unable to open file!");
      fwrite($user, $name . "," . $phone . "," . $gender . "," . $email . "," . $address);
      fwrite($user, "\n");
      fclose($user);
    } else {
      $tatus = "Added Failed";
      $counter = 0;
    }
  } else {
    $status = "Added Failed";
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>

  <form style="display:flex; flex-direction:column; align-items:center;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
    <div>
      <div>
        <br>
        <h1>Booking Info.</h1>
        <p>Please input your details for booking.</p>
        <br />

      </div>
      

      <div>
        <label for="name"><b>Name</b></label>
        <input style="width:179px;" type="text" placeholder="Enter your name" name="name" required>
        <span><?php echo $nameErr; ?></span>
      </div>

      <br />

      <div>
        <label for="phone"><b>Phone</b></label>
        <input style="width:175px;" type="text" placeholder="Enter your number" name="phone" required>
        <span><?php echo $phoneErr; ?></span>
      </div>

      <br />

      <div>
        <b>Gender</b>
        <input type="radio" name="gender" value="male" required>Male

        <input type="radio" name="gender" value="female" required>Female
        <br />
        <span><?php echo $genderErr; ?></span>
      </div>
      <br />

      <div>
        <label style="text-align: left;" for="email"><b>Email ID</b></label>
        <input style="width:159px;" type="email" name="email" required="" placeholder="Enter Email" name="email" required>
        <span><?php echo $emailErr; ?></span>
      </div>

      <br />


      <div>
        <label for="address"><b>Address</b></label>
        <input style="width:160px;" type="text" placeholder="Enter your address" name="address" required>
        <span><?php echo $addressErr; ?></span>
      </div>

      <br />
      



      <div>
        
        <button type="submit" value="Save Form" class="btn btn-success" onClick="document.location.href='bookingsubmit.php' " > Submit</button>
        <button type="button" onClick="document.location.href='welcome.php' " class="btn btn-secondary">Cancel</button>

      </div>
    </div>
  </form>
<div>
<?php require 'footer.php' ?>
</div>
  

</body>

</html>