<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title>Article!</title>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <p class="h1"><strong> Article </strong></p>
                    <hr style="height: 1px; color: black; background-color: black;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <?php 
                        include 'Model.php';
                        $model =new Model();
                        $id = $_REQUEST['id'];
                        $row =$model->fetch_single($id);
                        if(!empty($row)){

                    ?>
                    <div class="card">
                        <div class="card-header text-primary">Single Article</div>
                        <div class="card-body">
                            <p><strong>Title: </strong><?php echo $row['title'];?></p>
                            <p><strong>Content: </strong><?php echo $row['text'];?></p>
                        </div>
                    </div>
                    <?php 
                        }else{
                            echo "no data";
                        }
                    ?>
                    <div class="">
                        <a href="articles.php" class="btn btn-primary mt-1" type="button">Back</a>
                    </div>
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