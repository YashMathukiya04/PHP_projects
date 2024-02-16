<!DOCTYPE html>
<html>
<head>
    <title>Delete Therapy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
    
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }

        h1 {
            font-size: 24px;
            text-align: center;
            margin-bottom: 20px;
        }

        form {
            background-color: #f9f9f9;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
        }

        tr {
            margin-bottom: 10px;
        }

        td {
            padding: 10px;
        }

        label {
            font-weight: bold;
            color: #007BFF; /* Colorful label */
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #ff3030; /* Red for delete button */
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Hover effect */
        }

        input[type="submit"]:hover {
            background-color: #ff0000; /* Darker red on hover */
        }
    </style>
</head>
<body>
    <div class="btn btn-dark mt-2 ml-4">
         <a href="./index.php" class="text-light">Back</a>
    </div>
    <h1>Delete a Therapy</h1>
    <form action="delete_therapy.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="therapy_id">Therapy ID to Delete:</label>
                </td>
                <td>
                    <input type="text" id="therapy_id" name="therapy_id" required>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Delete Therapy">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
<?php
// Database connection (adjust connection details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "wellcare"; // Database name

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['therapy_id'])) {
    $therapy_id = $_POST['therapy_id'];

    // Fetch the therapy image file path from the database
    $sql = "SELECT therapy_image FROM therapy WHERE therapy_id = $therapy_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $imageFilePath = $row['therapy_image'];

        // Delete the therapy record from the database
        $deleteSql = "DELETE FROM therapy WHERE therapy_id = $therapy_id";
        if ($conn->query($deleteSql) === TRUE) {
            // Delete the image file
            if (file_exists($imageFilePath)) {
                unlink($imageFilePath); // Delete the image file
            }
            echo "Therapy with ID $therapy_id deleted successfully.";
        } else {
            echo "Error deleting therapy: " . $conn->error;
        }
    } else {
        echo "Therapy with ID $therapy_id not found.";
    }
}

// Close the database connection
$conn->close();
?>
