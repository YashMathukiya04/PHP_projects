<?php include("include.php");  ?>
<?php include("header.php");  ?>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Actions</th>
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
                          <td>Action</td>
                    </tr> 
                ";
                echo "<br/>";
            }
       ?>    
  </tbody>
</table>

 <div class="container">
       
    </div>