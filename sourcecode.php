<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body bgcolor="blue"> 
<?php

$pinErr = $repinErr = $numberErr = $OTPErr = "";
$pin = $repin = $number = $OTP = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["pin"])) {
     $pinErr = "pin is required";
   } else {
     $pin = test_input($_POST["pin"]);
     // only in numbers
     if (!preg_match("/^[0-9]*$/",$pin)) {
       $pinErr = "Only numbers are allowed"; 
     }
   }
    if (empty($_POST["repin"])) {
     $repinErr = "repin is required";
   } else {
     $repin = test_input($_POST["repin"]);
     // check if pin address is well-formed
     if (!preg_match("/^[0-9]*$/",$repin)) {
       $repinErr = "only numbers are allowed"; 
     }
   }
     if (empty($_POST["number"])) {
     $numberErr = "number is required";
  } else {
     $number = test_input($_POST["number"]);
     // check if number is valid or not
     if (!preg_match("/^[0-9]*$/",$number)) {
       $numberErr = "Invalid number"; 
     }
   }

   if (empty($_POST["OTP"])) {
     $OTPErr = "OTP is required";
   } else {
     $OTP = test_input($_POST["OTP"]);
        //check OTP is valid or not
     if(!preg_match("/^[0-9]*$/",$OTP)) {
     $OTPErr = "invalid OTP";
   }
}

function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
    }
}

?>

<center>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
   Pin: <input type="text" name="name" value="<?php echo $pin;?>">
   <span class="error">* <?php echo $pinErr;?></span>
   <br><br>
   Repin: <input type="text" name="repin" value="<?php echo $repin;?>">
   <span class="error">* <?php echo $repinErr;?></span>
   <br><br>
   Number: <input type="text" name="number" value="<?php echo $number;?>">
   <span class="error">* <?php echo $number;?></span>
      <br><br>
   OTP: <input type="text" name="OTP" value="<?php echo $OTP;?>"> 
    <span class="error">* <?php echo $OTP;?></span>
   <br><br>
  
   <input type="submit" action="submit" values="subit">or
<a href="https://contacts.google.com" target="_self">login</a>
</form>
</center>


</body>
</html>
