<?php
if(isset($_POST["submitButton"])){
      echo "<h4>Welcome to the movie zone!</h4>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title></title>
      <link rel="stylesheet" type="text/css" href="assets/styles/styles.css"/>
</head>
<body>
      <div class="signInContainer"> 
het
<div class="column"> 
<form method="POST"> 

<input type="text" name="firstname" placeholder="First name" required>
<input type="text" name="lastname" placeholder="Last name" required>
<input type="text" name="username" placeholder="User name" required>
<input type="email" name="email" placeholder="Email" required>
<input type="email" name="email2" placeholder="Confirm email" required>
<input type="password" name="password" placeholder="Password" required>
<input type="password" name="password2" placeholder="Confirm password" required>
<input type="submit" name="submitButton" value="SUBMIT">

</form>

</div>
      
      </div>
</body>
</html> 