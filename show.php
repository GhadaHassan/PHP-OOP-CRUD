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
                <h1 class="text-center"> PHP OOP CRUD - SHOW RECORDS</h1>
                <hr style="height: 1px; color: black; background-color: black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 mx-auto">
                <table class="table">
                    <tr>
                        <th>ID </th>
                        <th>NAME </th>
                        <th>E-MAIL </th>
                        <th>MOBILE NO. </th>
                        <th>ADDRESS </th>                       
                        <th>ACTION </th>                       
                    </tr>
                    <tbody>
                        <?php

                            include 'DB/database.php';
                            $DB = new Database(DB_DATABASE);
                            $rows = $DB->getRows("SELECT * FROM records", array());
                            // print_r($rows);
                            $i = 1;
                            if(!empty($rows)){
                                foreach($rows as $row){  
                                                              
                        ?>
                        <tr>
                            <td><?php echo $i++?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['mobile']; ?></td>
                            <td><?php echo $row['address'];?></td>
                            <td>
                                <a href="read.php?id=<?php echo $row['id'];?>" class="btn btn-outline-info">READ</a>
                                <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-outline-success">EDIT</a>
                                <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-outline-danger">DELETE</a>
                            </td>

                        </tr>
                        <?php
                                }
                            }
                        ?>
                    </tbody>
                </table>
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