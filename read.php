<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  </head>

  <body>
   
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="text-center"> PHP OOP CRUD - SINGLE RECORD</h1>
                <hr style="height: 1px; color: black; background-color: black;">
            </div>
        </div>

        <div class="row">
            <div class="col-md-10 mx-auto">
            <table class="table">
                <tr>
                    <th>NAME </th>
                    <th>E-MAIL </th>
                    <th>MOBILE NO. </th>
                    <th>ADDRESS </th>                       
                    <th>ACTION </th>                       
                </tr>
                <?php

                    include 'DB/database.php';
                    $DB = new Database(DB_DATABASE);
                    $id = $_REQUEST['id'];
                    $q = "SELECT * FROM records WHERE id = '$id'";
                    $row = $DB->getRow($q,array());     // this retuen one record data
                // var_dump($row);
                    if(!empty($row)){
                    
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $row['name']; ?></td>
                        <td><?php echo $row['email']; ?></td>
                        <td><?php echo $row['mobile']; ?></td>
                        <td><?php echo $row['address'];?></td>
                        <td><a href="show.php" class="btn btn-outline-info">RECORDS</a></td>
                    </tr>
                <?php
                    }
                ?>
                </tbody>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>