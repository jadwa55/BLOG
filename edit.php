<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>BLOG!</title>
  </head>
  <body>
  <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <h1 class="email-center"> Update </h1>
                <hr style="height: 1px; color: black; background-color: black;">
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 mx-auto">

            <?php 
                include 'Model.php';
                $model =new Model();
                // echo $id = $_REQUEST['id'];
                $id = $_REQUEST['id'];
                $row = $model->edit($id);
                // var_dump($row);

                if(isset($_POST['update'])){
                    //    echo "yes";
                        if(isset($_POST['auteur']) && isset($_POST['title']) && isset($_POST['text'])) {
        
                            if(!empty($_POST['auteur']) && !empty($_POST['title']) && !empty($_POST['text'])) {
                                
                                $data['id']     =$id;
                                $data['auteur'] = $_POST['auteur'];
                                $data['title']  = $_POST['title'];
                                $data['text']   = $_POST['text'];

                                $update = $model->update($data);
                                if($update){
                                    echo "<script> alert('article update successfully') </script>";
                                    echo "<script> window.location.href = 'articles.php';</script>";
                                }else{
                                    echo "<script> alert('article update failed') </script>";
                                    echo "<script> window.location.href = 'articles.php';</script>";
                                }
        
                            }else{
                                echo "<script> alert('empty') </script>";
                                header("Location: edit.php?id=$id");
                            }
                        }
                    }
            ?>

                <form action="" method="POST">
                    <div class="form-group">
                        <label for="">AUTEUR</label>
                        <input type="text" name="auteur" value="<?php echo $row['auteur'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TITLE</label>
                        <input type="text" name="title" value="<?php echo $row['title'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">TEXT</label>
                        <input type="text" name="text" value="<?php echo $row['text'];?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="update" class="btn btn-info mt-2 ">Save Changes</button>
                        <!-- <input type="reset" class="btn btn-secondary" value="Cancel" /> -->
                    </div>
                </form>
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