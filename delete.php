<?php

    include'Model.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->delete($id);

    if($delete){
        echo "<script> alert('article deleted successfully') </script>";
        echo "<script> window.location.href = 'articles.php';</script>";
    }
?>