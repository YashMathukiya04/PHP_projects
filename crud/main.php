<?php
    include("header.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <div class="form">
        <form action="" method="POST">
            <h2>Add Books </h2><br/>
            <table class="table" name="table"  style="margin: px;">
            <tr>
                <th>   
                    <label for="name">Book Name : </label>
                    <input type="text" id="book_name" name="book_name"><br/>
                </th>
            </tr>
            <tr>
                <th>   
                    <label for="author">Author Name : </label>
                    <input type="text" id="author_name" name="author_name"><br/>
                </th>
            </tr>
            <tr>
                <th>   
                    <label for="price">Price : </label>
                    <input type="number" id="price" name="price"><br/>
                </th>
             </tr>
            </table>
        </form>
   </div> 
</body>
</html>

<?php
    include("footer.php");
?>


<style>
    .form{
        margin:0 auto;
        padding: 0%;
    }

    .table{
        border: 1px groove #ad4345;
        display: flex;
        justify-content: space-between;
    }
</style>