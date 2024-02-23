<?php
    // include('header.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Information</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        *{
            margin: auto;
            padding: 5px;
        }

        body {
            font-family: Poppins, sans-serif;
            background-color: #f1f1f1;
            padding: 20px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f5f5f5;
        }

        tr:hover {
            background-color: #e0e0e0;
        }
    </style>
</head>
<body>
    <div class="btn btn-dark">
            <a href="./index.php" class="text-light">Back</a>
    </div>
    <h1>Appointment Information</h1>



    <?php
    include("db_connection.php"); 
    

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["id"])) 
    {
        $delete_id = $_POST["id"];
        $delete_query = "DELETE FROM home_visit WHERE id = $delete_id";
        mysqli_query($con, $delete_query);
    }

    $query = "SELECT * FROM home_visit"; 
    //  table name is 'home_visit'
    $result = mysqli_query($con, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<table>";
        echo "<tr>
                <th>Id</th>
                <th>Type</th>
                <th>Name</th>
                <th>Email</th>
                <th>Pain Type</th>
                <th>Mobile No</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Delete</th>
              </tr>";
        $id = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $id +1;
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['therapy_type'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['pain_type'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . $row['address'] . "</td>";
            echo "<td>" . $row['gender'] . "</td>";
            
            echo "<td>
                    <form method='post' onsubmit='return confirm(\"Are you sure you want to delete this record?\")'>
                        <input type='hidden' name='id' value='" . $row['id'] . "'>
                        <button type='submit'>Delete</button>
                    </form>
                  </td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "No contact entries found.";
    }

    mysqli_close($con);
    ?>

<!-- <a href="../wellcare/admin" class="button">back</a> -->

<style>
    .button {
    display: inline-block;
    padding: 12px 24px;
    background-color: #3498db;
    color: #fff;
    border: none;
    border-radius: 4px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s, transform 0.2s;
  }

  .button:hover {
    background-color: #2980b9;
  }

  .button:focus {
    outline: none;
  }

  .button:hover:active {
    transform: scale(0.95);
  }
</style>

</body>
</html>

    
</body>
</html>
