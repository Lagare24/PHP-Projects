<?php
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmpassword = $_POST["confirm-password"];
$birthdate = $_POST["birthdate"];
$mobilenumber = $_POST["mobile-number"];

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (empty($firstname) || empty($lastname) || empty($email) || empty($password) || empty($confirmpassword) || empty($birthdate) || empty($mobilenumber)) {
        header("Location: ..\index.php");
    } else {
        if ($password == $confirmpassword) {
            echo "<script>alert(\"User registered successfully!\")</script>";
            echo "<h1>User registered successfully!</h1>";
        } else {
            header("Location: ..\index.php");
        }
    }
}

function errormsg()
{
    echo "<script>alert(\"Somethings wrong!\")</script>";
}
