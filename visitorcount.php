<?php
session_start();
if (isset($_SESSION['visitor_count'])) {
    $_SESSION['visitor_count']++;
} else {
    $_SESSION['visitor_count'] = 1;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<style>
.footer{
position:fixed;
left:0;
bottom:0;
width:100%;
color:white;
background:green;
text-align:center;
}
</style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Visitor Count</title>
</head>
<body>
    <h2 align="center">This is First PHP Program</h2>
    
<div class="footer">
<p align="center"> &copy; N.Ushasree--Allrights Reserved
<p>This page has been visited <?php echo $_SESSION['visitor_count']; ?> times.</p>
</div>
</body>
</html>