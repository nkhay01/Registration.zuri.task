<!DOCTYPE HTML>  
<html>
<head>
</head>
<body>  

<h2>Registration Form</h2>
<form method="post" action="user_data.php">  
  
      Name: <input type="text" name="name">
      <br><br>
      
      E-mail: <input type="text" name="email">
      <br><br>

      Date of birth: <input type="date" name="dob" />
      <br><br>
      
      Gender: <br>
      <input type="radio" name="gender" value="female">Female <br>
      <input type="radio" name="gender" value="male">Male <br>
      <input type="radio" name="gender" value="other">Other
      <br><br>

      Country:<input type="text" name="country" />
      
      <br><br>

      <input type="submit" name="submit" value="Submit">

</form>
</body>
</html>