<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
    <style>
        p{
    font-weight: normal;
    text-align: center;
    font-family: 'Courier New', Courier, monospace; 
}
    </style>
<head>
    <meta http-equiv="refresh" content="3; url='Index.php'">
    <title>Redirecting...</title>
    <link rel="stylesheet" href="style6.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You will be redirected shortly...</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
    <img src="Astronaut_Run.gif" style="height: 400px;margin-left: 675px;width: 500px;margin-top: 40px;">
</body>
</html>