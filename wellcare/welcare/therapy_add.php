<!DOCTYPE html>
<html>
<head>
    <title>Add Therapy</title>
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

        input[type="text"],
        input[type="file"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            transition: border-color 0.3s ease; /* Hover effect */
        }

        input[type="text"]:focus,
        input[type="file"]:focus,
        textarea:focus {
            border-color: #007BFF; /* Highlight on focus */
        }

        textarea {
            resize: vertical;
        }

        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 18px;
            cursor: pointer;
            transition: background-color 0.3s ease; /* Hover effect */
        }

        input[type="submit"]:hover {
            background-color: #0056b3; /* Color change on hover */
        }
    </style>
</head>
<body>

    <div class="btn btn-dark">
    <a href="./index.php" class="text-light">Back</a>
    </div>
    
    <h1>Add a New Therapy</h1>
    <form action="insert_therapy.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <label for="therapy_id">Therapy ID:</label>
                </td>
                <td>
                    <input type="text" id="therapy_id" name="therapy_id" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="therapy_name">Therapy Name:</label>
                </td>
                <td>
                    <input type="text" id="therapy_name" name="therapy_name" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="therapy_image">Therapy Image:</label>
                </td>
                <td>
                    <input type="file" id="therapy_image" name="therapy_image" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="therapy_description">Therapy Description:</label>
                </td>
                <td>
                    <textarea id="therapy_description" name="therapy_description" rows="4" required></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Add Therapy">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>
