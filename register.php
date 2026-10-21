<?php
include('conecctiondb.php');

$message = "";

if (isset($_POST['register'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm'];

    if ($password === $confirm) {
        $query = "INSERT INTO users (username, password) VALUES ('$username', '$password')";
        if (mysqli_query($conn, $query)) {
            $message = "Registration successful! You can now login.";
        } else {
            $message = "Error: " . mysqli_error($conn);
        }
    } else {
        $message = "Passwords do not match!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css?v=1">
</head>
<body>

    <div class="container">
        <h2>Register</h2>

        <form method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirm">Confirm Password:</label>
            <input type="password" id="confirm" name="confirm" required>

            <button type="submit" name="register">Register</button>
        </form>

        <?php if (!empty($message)): ?>
            <p class="message"><?php echo $message; ?></p>
        <?php endif; ?>

        <p>Naa nakay account? <a href="login.php">Login</a></p>
    </div>

</body>
</html>