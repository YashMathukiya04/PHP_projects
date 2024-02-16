<?php
include('header.php');
?>

<!DOCTYPE html>
<html?>
<head>
    <title>Therapy</title>
</head>
<body>
    <h1>Therapy List</h1>

<?php
include('db_connection.php');

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve therapy data from the database
$sql = "SELECT * FROM therapy";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='therapy-container'>";

    while ($row = $result->fetch_assoc()) {
        echo "<div class='therapy-card'>";
        
        // Display the image from the "../welcare/uploads" directory based on image_filename
        $imagePath = 'welcare/' . $row["therapy_image"];
        echo "<img src='" . $imagePath . "' alt='" . $row["therapy_name"] . "' class='therapy-image'>";
        
        echo "<div class='therapy-name'>" . $row["therapy_name"] . "</div>";
        echo "<div class='therapy-description'>" . $row["therapy_description"] . "</div>";
        // echo "<a href='#' class='read-more-button'>Read More</a>";
        echo "</div>";
    }

    echo "</div>";
} else {
    echo "No therapies found.";
}

// Close the database connection
$conn->close();
?>

</body>
</html>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        body {
            font-family: Popins, sans-serif;
            margin: 100;
            padding: 20px;
            background-color: #f4f4f4;
        }

        .therapy-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin-top: 5%;
        }

        .therapy-card {
            width: 48%;
            margin-bottom: 20px;
            background-color: #fff;
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease;
        }

        .therapy-card:hover {
            transform: scale(1.02);
        }

        .therapy-image {
            width: 100%;
            height: 70vh;
            object-fit: cover;
            display: block;
            margin: 0 auto;
        }

        .therapy-name {
            font-size: 18px;
            font-weight: bold;
            margin-top: 10px;
        }

        .therapy-description {
            font-size: 14px;
            margin-top: 10px;
        }

        .read-more-button {
            display: block;
            text-align: center;
            background-color: #007BFF;
            color: #fff;
            text-decoration: none;
            font-size: 15px;
            padding: 5px 10px;
            border-radius: 5px;
            margin-top: 10px;
            transition: background-color 0.3s ease;
        }

        .read-more-button:hover {
            background-color: #0056b3;
        }

        @media(max-width:950){
            .therapy-container{
                flex-direction: column;
                margin-top: 10%;
            }
        }
    </style>