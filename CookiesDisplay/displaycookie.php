<html>
<head>
<style>
#footer { Position: fixed;
padding: 10px 10px 0px 10px; bottom: 0;
width: 100%;
height: 40px;
}
</style>
</head>
<body>
<?php
$cookie=$_COOKIE;
foreach ($cookie as $key=>$val) echo "<br>$key : $val";
?>
<div id = "footer">
<p align = "center"> &copy;  N.Ushasree all rights --reserved </p>
</div>
</body>
</html>