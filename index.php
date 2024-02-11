<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        <form action="includes/register.php" method="post">
            <h1>Registration Form</h1>
            <br>

            <label for="firstname">First name: </label>
            <input type="text" name="firstname" id="firstname">
            <br>

            <label for="lastname">Last name: </label>
            <input type="text" name="lastname" id="lastname">
            <br>

            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
            <br>

            <label for="password">Password: </label>
            <input type="password" name="password" id="password">
            <br>

            <label for="confirm-password">Confirm password: </label>
            <input type="password" name="confirm-password" id="confirm-password">
            <br>

            <label for="birthdate">Birthdate: </label>
            <input type="date" name="birthdate" id="birthdate">
            <br>

            <label for="mobile-number">Mobile number: </label>
            <input type="number" name="mobile-number" id="mobile-number">
            <br><br>

            <button type="submit" name="register-btn" id="register-btn">Register</button>

        </form>
    </div>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>