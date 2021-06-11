<!DOCTYPE html>
<html>
<head>
<title>User Registration | PHP</title>
</head>
<body> 
<div>  
  <?php
   if(isset($_POST["create"])){
       echo"User Submited.";
   }

  ?>


</div>
<div>
<from action="registration.php" method="post">
<div class="container">
<h1>Registration</h1>

<p>Fill up the from with the correct value.</p>

<lable for="firstname"><b>First Name</b></lable>
<input type="text" name="firstname" required>

<lable for="lastname"><b>last Name</b></lable>
<input type="text" name="lastname" required>

<lable for="email"><b>Email Address</b></lable>
<input type="text" name="email" required>

<lable for="phonnumber"><b>Phone Number</b></lable>
<input type="text" name="phonenumber" required>

<lable for="password"><b>Password</b></lable>
<input type="text" name="Password" required>
<input type="Submit" name="create" value="sign up">
 
</div>
</from>
</div>

</body>


</html>


