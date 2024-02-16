<!-- login_process.php -->

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Database connection
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbName = "wellcare";

    $connection = mysqli_connect($host, $dbUsername, $dbPassword, $dbName);

    // Check connection
    if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Query to check admin credentials
    $query = "SELECT * FROM admins WHERE username='$username' AND password='$password'";
    $result = mysqli_query($connection, $query);

    if (mysqli_num_rows($result) === 1) {
        // Admin credentials are valid
        $_SESSION['admin_username'] = $username;
        header("Location: ../wellcare/welcare");
        exit();
    } else {
        // Invalid credentials
        header("Location: 404.php");
        $loginError = "Invalid username or password.";
    }

    mysqli_close($connection);
}
?>

<!-- Continue the HTML below -->

<!DOCTYPE html>
<html>
<head>
    <!-- <title>Login R</title> -->
</head>
<body>

<?php
if (isset($loginError)) {
    echo "<p>$loginError</p>";
}
?>

</body>
</html>
