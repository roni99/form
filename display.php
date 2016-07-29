<?php
if(isset($_POST["submit"]))
{
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$city=$_POST['city'];
	$gender=$_POST['gender'];
	
	$connection=mysqli_connect('localhost','root','','form');
	$sql="insert into student(fname,lname,contact,email,address,city,gender) values('".$fname."','".$lname."','".$contact."','".$email."','".$address."','".$city."','".$gender."')";
	if(mysqli_query($connection,$sql))
	{
		print "Data Saved Successfully";
		
	}
	else
	{
		print "Data Missing";
	}
}

?>

<hr>
<a href="registationform.php">New Entry</a><br><br>
<?php
$connection=mysqli_connect('localhost','root','','form');
if(isset($_GET["id"]))
{
	$sql="delete from student where id= ".base64_decode($_GET['id']);
	if(mysqli_query($connection,$sql))
	{
		print "Data Deleted";
	}
}

$sql="select * from student";
$rs=mysqli_query($connection,$sql);

print '<table>';
print '<tr><th>First Name</th><th>Last Name</th><th>Contact</th><th>Email</th><th>Address</th><th>City</th><th>Gender</th><th>Delete</th></tr>';
while($rs2=mysqli_fetch_array($rs))
{
	print '<tr>';
	//print '<td>'.$rs2['id'].'</td>';
	print '<td>'.$rs2['fname'].'</td>';
	print '<td>'.$rs2['lname'].'</td>';
	print '<td>'.$rs2['contact'].'</td>';
	print '<td>'.$rs2['email'].'</td>';
	print '<td>'.$rs2['address'].'</td>';
	print '<td>'.$rs2['city'].'</td>';
	print '<td>'.$rs2['gender'].'</td>';
	print '<td>
			 <a href="?p=display&id='.base64_encode($rs2['id']).'">Delete</a>
			</td>';
	print '</tr>';
}
print '</table>';

?>