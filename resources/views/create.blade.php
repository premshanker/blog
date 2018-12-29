<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="/user" method="POST">
{{csrf_field()}}
  First name:<br>
  <input type="text" name="first_name" >
  <br><br>
  Last name:<br>
  <input type="text" name="last_name" >
  <br><br>
  Email:<br>
  <input type="email" name="email" >
  <br><br>
  Password:<br>
  <input type="text" name="password" >
  <br><br>
  <input type="submit" value="Submit">
</form> 



</body>
</html>