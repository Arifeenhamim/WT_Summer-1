<?php
session_start();
if (empty($_SESSION["username"]) && empty($_SESSION["password"])) {
    header("location: ../View/adminlogin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
</head>

<body>
    <center>
        <h3>
            Welcome to the deshboard<?php include('../Control/cookie.php'); ?>
        </h3>

        <h3 align="left">
            <a href="viewinformation.php">View Admins Login Data</a>
        </h3>

        <h3 align="left">
            <a href="viewinfonewadmin.php">View New Admin Registrations.</a>
        </h3>

        <h5>
            Do you want to <a href="../Control/adminlogout.php">logout</a>
        </h5>
    </center>
</body>

</html>