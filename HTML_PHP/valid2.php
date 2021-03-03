<html>
<head>
<style>
.error {color: #FF0000;}
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css" >
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body style="background-color:wheat;">  
<div  >
 
<nav class="navbar sticky-top navbar-expand-sm navbar-dark bg-dark">
           
            <button class="navbar-toggler" data-target="#nav" data-toggle="collapse">
                <span class="navbar-toggle-icon">
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav">
                    <li class="nav-items">
                        <a class="nav-link text-white btn btn-info" href="nirman assignment.html" 
                        style="border-top-left-radius: 25px;
                        border-bottom-right-radius:25px ;margin-left: 8;">
                            Home
                        </a>
                   
                    </li>

                </ul>
            </div>
            
            <button class="btn btn-primary" data-target="#signin" data-toggle="modal"
            style="border-top-left-radius: 25px;border-bottom-right-radius: 25px;">
            Sign Up
            </button>
            
        </nav>

<div style="height:500px;width:500px;margin-left: 35%">
<?php
// define variables and set to empty values
$nameErr = $emailErr = $passwordErr = "";
$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
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
    
  if (empty($_POST["password"])) {
    $password = "";
  } else {
    $password = test_input($_POST["password"]);
    // check if URL address syntax is valid
    if (strlen($_POST["password"]) <= 5) {
      $passwordErr = "Invalid URL";
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
<h2>PHP Form Validation</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  Name: <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>
  E-mail: <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>
  Password <input type="text" name="password">
  <span class="error">*<?php echo $passwordErr;?></span>
  <br><br>
  <input type="submit" name="submit" value="Submit">  
</form>

</div>
</div>
</body>
</html>