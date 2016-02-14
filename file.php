<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body bgcolor="blue"> 

<?php
// define variables and set to empty values
$pinErr = $re-pinErr = $numberErr = $OTPErr = "";
$pin = $re-pin = $number = $comment = $OTP = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["pin"])) {
     $pinErr = "pin is required";
   } else {
     $pin = test_input($_POST["pin"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[0-9]*$/",$pin)) {
       $pinErr = "Only numbers are allowed"; 
     }
   }
   
   if (empty($_POST["re-pin"])) {
     $re-pinErr = "re-pin is required";
   } else {
     $re-pin = test_input($_POST["re-pin"]);
     // check if e-mail address is well-formed
     if (!preg_match("/^[0-9]*$/",$re-pin) {
       $re-pinErr = "only numbers are allowed"; 
     }
   }
     
   if (empty($_POST["number"])) {
     $numberErr = "number is required";
 

  } else {
     $number = test_input($_POST["number"]);
     // check if number is valid or not
     if (!preg_match("/^[0-9]*$/",$number) {
       $numberErr = "Invalid number"; 
     }
   }

   if (empty($_POST["OTP"])) {
     $OTPErr = "OTP is required";
   } else {
     $OTP = test_input($_POST["OTP"]);
        //check OTP is valid or not
     if(!preg_match("/^[0-9]*$/",$OTP) {
     $OTPErr = "invalid OTP"
   }
}


function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<center>
<form> 
   Pin: <input type="text" name="name" value="pin">
   <span class="error">* <?php echo $pinErr;?></span>
   <br><br>
   Re-pin: <input type="text" name="re-pin" value="re-pin">
   <span class="error">* <?php echo $re-pinErr;?></span>
   <br><br>
   Number: <input type="text" name="number" value="number">
   <span class="error">* <?php echo $number;?></span>
      <br><br>
   OTP: <input type="text" name="OTP" value="OTP"> 
    <span class="error">* <?php echo $OTP;?></span>
   <br><br>
  
   <a href="https://contacts.google.com" target="_self">submit</a>
</form>
</center>


</body>
</html>
