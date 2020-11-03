<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: black;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $phoneErr = $zipErr = $passErr = "";
$name = $email = $phone = $zip = $pass = $rpass = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["username"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z]*$/",$name)) {
      $nameErr = "Only letters are allowed"; 
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format"; 
    }
  }

  if (empty($_POST["phone"])) {
    $phoneErr = "Phone is required";
  } else {
    $phone = test_input($_POST["phone"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^\+[0-9]*$/",$phone)) {
      $phoneErr = "Invalid phone number format"; 
    }
  }

  if (empty($_POST["zipcode"])) {
    $zipErr = "Zip is required";
  } else {
    $zip = test_input($_POST["zipcode"]);
    // check if e-mail address is well-formed
    if (!preg_match("/^[0-9]*$/",$zip)) {
      $zipErr = "Invalid zip format"; 
    }
  }

  if (empty($_POST["psw"]) || empty($_POST["psw-repeat"])) {
    $passErr = "Password and repeat password is required";
  } else {
    $pass = test_input($_POST["psw"]);
    $rpass = test_input($_POST["psw-repeat"]);
    // check if e-mail address is well-formed
    if (!($pass == $rpass)) {
      $passErr = "password and repeat password are not same"; 
    }
  }


}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

 <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
  <div class="container">
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>

    <label for="email"><b>Username*</b></label>
    <input type="text" name="username" id="username" value="<?php echo $name;?>"><span class="error"><?php echo $nameErr;?><br><br></span>

    <label for="email"><b>Email*</b></label>
    <input type="text" name="email" id="email" value="<?php echo $email;?>"><span class="error"><?php echo $emailErr;?><br><br></span>

    <label for="psw"><b>Password</b></label>
    <input type="password" name="psw" id="psw" >

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" name="psw-repeat" id="psw-repeat" ><span class="error"><?php echo $passErr;?><br><br></span>

    <label ><b>First Name</b></label>
    <input type="text" name="firstName" id="firstName" >

    <label ><b>Last Name</b></label>
    <input type="text" name="lastName" id="lastName" >

    <label ><b>Phone*</b></label>
    <input type="text" name="phone" id="phone" value="<?php echo $phone;?>"><span class="error"><?php echo $phoneErr;?><br><br></span>
    
    <label ><b>Street</b></label>
    <input type="text" name="street" id="street" >

    <label ><b>City</b></label>
    <input type="text" name="city" id="city" >

    <label ><b>State</b></label>
    <input type="text" name="state" id="state" >
   
   <label ><b>Zipcode*</b></label>
    <input type="text" name="zipcode" id="zipcode" value="<?php echo $zip;?>"><span class="error"><?php echo $zipErr;?><br><br></span>

    <label ><b>Country</b></label>
    <input type="text" name="country" id="country" >

    <hr>
    <p>Free membership</p>

    <button type="submit" class="registerbtn">Register</button>
  </div>
</form>

</body>
</html>

