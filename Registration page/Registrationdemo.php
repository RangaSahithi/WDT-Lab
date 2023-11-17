<html>
<head>
<title>Registration</title>
<style>
.footer{
position:fixed;
left:0;
bottom:0;
width:100%;
color:white;
background:Green;
text-align:center;
}
</style>
</head>
<body>
<form name="form1" method="post">
<table align="center" width="70%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td colspan=2 align="center"><b><h3>User Registration</h3></b></td>
</tr>
<br/>
<tr>
<td>Full name : </td>
<td><input name="fname" type="text"></td>
</tr>
<tr>
<td>Username : </td>
<td><input name="uname" type="text"></td>
</tr>
<tr>
<td>Password : </td>
<td><input name="pwd" type="password"></td>
</tr>
<tr>
<td></td>
<td ><input type="submit" name="btnreg" value="Register"></td>
</tr>
</table>
<br/>
<br/>
<center><h4>For Login : <a href="LoginDemo.php">Click Here</a></h4></center>
</form>
<?php
if(isset($_POST['btnreg']))
{
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname='logindatabase';
$conn = mysqli_connect($host, $user, $pass,$dbname);
$fname=$_POST["fname"];
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$sql = "insert into logindetails values('$fname','$uname','$pwd')";
if(mysqli_query($conn, $sql))
{
echo "<center><b><font color='green'>Registration Successful</font></b></center>";
}
else
{
echo "<center><b><font color='red'>Registration failure</font></b></center>";
}
mysqli_close($conn);
}
?>
<div class="footer">
<p align="center"> &copy; Sahithi--All rights Reserved</div>
</body>
</html>