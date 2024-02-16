<?php
include("header.php");
?>


<?php
session_start();

if (!isset($_SESSION['admin_username'])) {
    // header("Location: login_page.php");
    exit;
}
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Welcome, <?php echo $_SESSION['admin_username']; ?> </h1>
   
</body>

</html>

<!-- <p>This is your admin panel content.</p> -->

<?php
    include("footer.php");
?>
<!-- <a href="logout.php">Logout</a> -->