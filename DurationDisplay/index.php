<html>
<head>
<title>Index</title>
<style>
#footer { Position: fixed;
padding: 10px 10px 0px 10px; bottom: 0;
width: 100%; height: 40px;
}
</style>
</head>
<body>
<form name="form1" method="post">
<table align="center" width="70%" border="0" cellpadding="3" cellspacing="1">
<br/>
<tr>
<td>Name : </td>
<td><input name="uname" type="text"></td>
</tr>
<tr>
<td></td>
<td ><input type="submit" name="Submit" value="SUBMIT"></td>
</tr>
</table>
</form>
<?php if(isset($_POST['Submit']))
{
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'h:i:s A', time () );
$uname=$_POST["uname"]; session_start();
$_SESSION["name"] = $_POST["uname"];

    $_SESSION["stime"] = $currentTime;       
      header('Location: Home.php');
}
?>
<div id = "footer">
<p align = "center"> &copy;Sahithi all rights --reserved </p>
</div>
</body>
</html>