<html lang="en">
<head>
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/css/dataTables.dataTables.min.css">
  <link rel="stylesheet" href="//cdn.datatables.net/2.0.0/js/dataTables.min.js">
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <!-- display data -->

<table class="table table-striped">
                 <thead>
                          <th scope="row">display </th>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">name</th>
                                <th scope="col">username</th>
                                <th scope="col">email</th>
                                <th scope="col">number</th>
                                <th scope="col">password</th>
                                <th scope="col">gender</th>
                                <th scope="col">time</th>
                            </tr>
                    </thead>
                <tbody>
        <?php

            $server = "localhost";
            $username = "root";
            $password = "";
            $database = "crud";

            $conn = mysqli_connect($server, $username, $password, $database);
                            
                $sql = "SELECT * FROM register";
                $result = mysqli_query($conn, $sql);

                    while ($row = mysqli_fetch_assoc($result)) {
                            echo"
                                <tr>
                                    <th scope='row'>". $row['id'] ."</th>
                                        <td>". $row['name'] ."</td>
                                        <td>". $row['username'] ."</td>
                                        <td>". $row['email'] ."</td>
                                        <td>". $row['number'] ."</td>
                                        <td>". $row['password'] ."</td>
                                        <td>". $row['gender'] ."</td>
                                        <td>". $row['time'] ."</td>
                                </tr> 
                                     ";
                                            echo "<br/>";
                                        }
        ?>    
                </tbody>
</table>
</body>
</html>