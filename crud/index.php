<?php include("header.php");  ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>

    <div class="container">
        <form method="POST" action="index.php"> <!-- Added method and action attributes -->
            <h2 class="">ADD BOOK</h2>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="description" class="form-label"> Description </label>
                <textarea class="form-control" name="description" id="description" rows="3" placeholder="description"></textarea>
            </div>

            <button type="submit" name="submit" class="btn btn-primary" id="submit">Submit</button>
        </form>
    </div>

   

</body>

</html>

<?php include("footer.php"); ?>

<?php

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    $title = $_POST['title']; // Add this line to get the value of title
    $description = $_POST['description']; // Add this line to get the value of description

    $sql = "INSERT INTO `notes` (`sno`, `title`, `description`, `time`) VALUES ('', '$title', '$description', current_timestamp())";
    mysqli_query($conn, $sql); // Add this line to execute the insert query
}
?>
