


<form method="post" action="display.php">
<label name="first">Firs Name</label><br>
<input type="text" name="fname" value="" required><br><br>

<label name="last">Last Name</label><br>
<input type="text" name="lname" value="" required><br><br>

<label name="contact">Contact</label><br>
<input type="text" name="contact" value="" required><br><br>

<label name="email">Email</label><br>
<input type="email" name="email" value="" required><br><br>

<label name="address">Adress</label><br>
<input type="text" name="address" value="" required><br><br>

<label name="city">City</label><br>
<select name="city" required>
  <option value="">Select</option>
  <option value="dhaka">Dhaka</option>
  <option value="khulna">Khulna</option>
  <option value="rajshahi">Rajshahi</option>
  <option value="feni">Feni</option>
  <option value="chittagong">Chittagong</option>
</select>
<br><br>

<label name="gender">Gender</label><br>
<input type="radio" name="gender" value="male" required>Male
<input type="radio" name="gender" value="female" required>Female
<br><br>

<input type="submit" name="submit" value="Register"><br>
</form>