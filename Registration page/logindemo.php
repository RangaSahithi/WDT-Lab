<html>
<head>
<title>Login </title>
<style>
#footer{
position:fixed;
padding: 10px 10px 0px 10px;
bottom: 0;
width: 100%;
height: 40px;
}
</style>
</head>
<body>
<form name="form1" method="post">
<table align="center" width="70%" border="0" cellpadding="3" cellspacing="1">
<tr>
<td colspan=2 align="center"><b><h3>Member Login</h3> </b></td>
</tr>
<br/>
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
<td ><input type="submit" name="btnlog" value="Login"></td>
</tr>
</table>
<br/>
<br/>
<center><h4>For Registeration : <a href="Registrationdemo.php">Click Here</a></h4></center>
</form>
<?php
if(isset($_POST['btnlog']))
{
$host = 'localhost';
$user = 'root';
$pass = '';
$dbname='logindatabase';
$conn = mysqli_connect($host, $user, $pass,$dbname);
$uname=$_POST["uname"];
$pwd=$_POST["pwd"];
$sql = "SELECT * FROM logindetails where uname='$uname'";
$retval=mysqli_query($conn, $sql);
if(mysqli_num_rows($retval))
{
  while($row = mysqli_fetch_assoc($retval))
  {
    if($row["pwd"]==$pwd)
    {
      //session_start();
      //$_SESSION["fname"]=$row["Fname"];
      echo "Login Successfully";
      //header('Location: Welcomedemo.php');
    }
    else
    {
      echo " <center><b><font color='red'>Password Mismatch </font></b></center>";
    }
  }
}
else
{
  header('Location: Registrationdemo.php');
  // echo "<center><b><font color='red'>User Not Exist.. Please Register</font></b></center>";
}
  mysqli_close($conn);
}
?>
<div id = "footer">
<p align = "center"> &copy;Sahithi All rights --reserved </p>
</div>
</body>
</html>