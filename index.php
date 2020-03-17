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
                <h1 class="text-center"> PHP OOP CRUD </h1>
                <hr style="height: 1px; color: black; background-color: black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-10 mx-auto">
                <?php

                    include 'DB/database.php';      // to make login database
                    $DB = new Database(DB_DATABASE);    // choice this db not any db
                    $insert = $DB->insert();
                
                ?>
                <form action="index.php" method="POST">

                    <div class="form-group">
                        <label for="">Name: </label>
                        <input type="text" name="name" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="">Email: </label>
                        <input type="email" name="email" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="">Password: </label>
                        <input type="password" name="password" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="">Mobile No.: </label>
                        <input type="text" name="mobile" class="form-control" >
                    </div>

                    <div class="form-group">
                        <label for="">Address: </label>
                        <textarea name="address" id="" cols="30" rows="10" class="form-control"></textarea>
                    </div>

                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-outline-dark">SUBMIT</button>
                        <a href="show.php" class="btn btn-outline-info">SHOW ALL RECORDS</a>
                    </div>

                </form>
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