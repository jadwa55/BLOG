<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>BLOG</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                <h1 class="">Dashboard</h1>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="index.php" class="btn btn-primary me-md-2" type="button">Add an article</a>
                        <a href="login.php" class="btn btn-primary" type="button">Logout</a>
                    </div>
                    <hr style="height: 1px; color: black; background-color: black;">
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>AUTEUR</th>
                                <th>TITLE</th>
                                <th>TEXT</th>
                                <th>ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            include'Model.php';
                            $model = new Model();
                            $rows  = $model->fetch();
                            // var_dump($rows);
                            // $i = 1;
                            if (!empty($rows)){
                                foreach($rows as $row){


                        ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['auteur'];?></td>
                                <td><?php echo $row['title'];?></td>
                                <td><?php echo $row['text'];?></td>
                                <td>
                                    <a href="read.php?id=<?php echo $row['id'];?>" class="btn btn-success"> Read </a>
                                    <a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-info"> Edit </a>
                                    <a href="delete.php?id=<?php echo $row['id'];?>" class="btn btn-danger"> Delete </a>
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


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    </body>
</html>