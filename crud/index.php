<?php include("header.php");  ?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/js/dataTables.min.js">
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
  
<table class="table table-striped">
  <thead>
      <th scope="row">display </th>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Delete</th>
      <th scope="col">Update</th>
    </tr>
  </thead>
  <tbody>
    <?php
        include("include.php");

         $sql = "SELECT * FROM notes";
         $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
                echo"
                    <tr>
                        <th scope='row'>". $row['sno'] ."</th>
                          <td>". $row['title'] ."</td>
                          <td>". $row['description'] ."</td>
                          <td></td>
                          <td></td>
                    </tr> 
                ";
                echo "<br/>";
            }
       ?>    
  </tbody>
</table>


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
