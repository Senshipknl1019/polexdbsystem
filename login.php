
<?php
$message = "";

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username == "admin" && $password == "1234") {
        $message = "Login successful!";
    } else {
        $message = "Invalid username or password!";
    }
}
?>
<link rel="stylesheet" href="style.css">
<!DOCTYPE html>
<html>
<head>
    <title>Basic Login</title>
</head>
<body>

    <h2>Login</h2>

    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username" required>
        <br><br>

        <label>Password:</label>
        <input type="password" name="password" required>
        <br><br>

        <button type="submit" name="login">Login</button>
    </form>

    <p><?php echo $message; ?></p>

     <p> wala pa kay account? <a href="register.php">register</a></p>

</body>
</html>
