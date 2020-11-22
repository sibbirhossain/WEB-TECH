<!DOCTYPE html>
<html>

<head>
    <title>Payment</title>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  
    
</head>


<body>

  <?php require '_nav.php' ?>

  <?php

  $name = $phone = $cardno = $cvv = $validity  = "";
  $nameErr = $phoneErr = $cardnoErr = $cvvErr = $validityErr = "";
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

    if (isset($_POST["cardno"]) & !empty($_POST["cardno"])) {
      $cardno = test_input($_POST["cardno"]);
    } else {
      $cardnoErr = "Please select card no.";
      $counter = $counter + 1;
    }

    if (isset($_POST["cvv"]) & !empty($_POST["cvv"])) {
      $cvv = test_input($_POST["cvv"]);
    } else {
      $cvvErr = "Please enter your CVV";
      $counter = $counter + 1;
    }

    if (isset($_POST["validity"]) & !empty($_POST["validity"])) {
      $validity = test_input($_POST["validity"]);
    } else {
      $validityErr = "Please enter your validity";
      $counter = $counter + 1;
    }


    if ($counter == 0) {
      $status = "Added  Successful";

      $user = fopen("../data/payment.txt", "a") or die("Unable to open file!");
      fwrite($user, $name . "," . $phone . "," . $cardno . "," . $cvv . "," . $validity);
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
        <h1>Payment</h1>
        <p>Please input your details for payment.</p>
        <br />

      </div>
      

      <div>
        <label for="name"><b>Name</b></label>
        <input style="width:190px;" type="text" placeholder="Enter your name" name="name" required>
        <span><?php echo $nameErr; ?></span>
      </div>

      <br />

      <div>
        <label for="phone"><b>Phone</b></label>
        <input style="width:190px;" type="text" placeholder="Enter your number" name="phone" required>
        <span><?php echo $phoneErr; ?></span>
      </div>

      <br />

      <div>
        <label for="cardno"><b>Card no.</b></label>
        <input style="width:175px;" type="text" placeholder="Enter your card number" name="cardno" required>
        <span><?php echo $cardnoErr; ?></span>
      </div>
      <br />

      <div>
        <label style="text-align: left;" for="cvv"><b>CVV</b></label>
        <input style="width:159px;" type="text" name="cvv" required="" placeholder="CVV" name="cvv" required>
        <span><?php echo $cvvErr; ?></span>
      </div>

      <br />


      <div>
        <label for="validity"><b>Validity</b></label>
        <input style="width:160px;" type="date" placeholder="Validity" name="validity" required>
        <span><?php echo $validityErr; ?></span>
      </div>

      <br />
      



      <div>
      
        <button  type="submit" value="Save Form" class="btn btn-primary" onClick="document.location.href='paymentsubmit.php' " > PAY</button>
        <button type="button" onClick="document.location.href='welcome.php' " class="btn btn-secondary">Cancel</button>

      </div>
      <br><br>
      <img style="height:200px; width:1000px; ;" src="../images/cards.png" alt="">
    </div>
  </form>


  
<?php require 'footer.php' ?>
</div>

</body>

</html>