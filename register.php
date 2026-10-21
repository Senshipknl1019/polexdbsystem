
<?php
$message = "";

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];

    if ($password == $confirm) {
        $message = "Registration successful!";
    } else {
        $message = "Passwords do not match!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Basic Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>Register</h2>

    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <label>Confirm Password:</label>
        <input type="password" name="confirm" required>
        <br><br>

        <button type="submit" name="register">Register</button>
    </form>

    <p><?php echo $message; ?></p>

    <p>Naa nakay account account? <a href="login.php">Login</a></p>

</body>
</html>
