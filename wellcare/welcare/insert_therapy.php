<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $therapy_id = $_POST["therapy_id"];
    $therapy_name = $_POST["therapy_name"];
    $therapy_description = $_POST["therapy_description"];

    // Database connection (adjust connection details)
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "wellcare"; // Database name

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Directory where uploaded images will be saved (make sure it exists)
    $target_directory = "uploads/";

    // Check if the "uploads" directory exists, and if not, create it
    if (!file_exists($target_directory)) {
        mkdir($target_directory, 0755, true);
    }

    $target_file = $target_directory . basename($_FILES["therapy_image"]["name"]);

    if (move_uploaded_file($_FILES["therapy_image"]["tmp_name"], $target_file)) {
        // Image uploaded successfully
        // Insert therapy data into the database using prepared statements
        $sql = "INSERT INTO therapy (therapy_id, therapy_name, therapy_image, therapy_description) VALUES (?, ?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssss", $therapy_id, $therapy_name, $target_file, $therapy_description);

        if ($stmt->execute()) {
            echo "Therapy added successfully!";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    // Close the database connection
    $conn->close();
}
?>
