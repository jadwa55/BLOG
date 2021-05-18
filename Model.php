<?php

    Class Model{
        private $server ="localhost";
        private $username ="root";
        private $password;
        private $db = "oop_crud";
        private $conn;

        public function __construct(){
            try{
                $this->conn=new mysqli($this->server,$this->username,$this->password,$this->db);
            } catch(Exception $e){
                echo"connection failed".$e->getMessage();
            }
        }


        public function insert(){
            if(isset($_POST['submit'])){
            //    echo "yes";
                if(isset($_POST['auteur']) && isset($_POST['title']) && isset($_POST['text'])) {

                    if(!empty($_POST['auteur']) && !empty($_POST['title']) && !empty($_POST['text'])) {

                        $auteur = $_POST['auteur'];
                        $title  = $_POST['title'];
                        $text   = $_POST['text'];

                        $query  = "INSERT INTO article (auteur,title,text) VALUE ('$auteur','$title','$text')";

                        if ($sql = $this->conn ->query($query)){
                            echo "<script> alert('article added successfully') </script>";
                            echo "<script> window.location.href = 'index.php';</script>";
                        }else{
                            echo "<script> alert('empty') </script>";
                            echo "<script> window.location.href = 'index.php';</script>";
                        }
                    }else{
                        echo "<script> alert('empty') </script>";
                        echo "<script> window.location.href = 'index.php';</script>";
                    }
                }
            }
        }



        // fetch articles

        public function fetch(){
            $data = null;

            $query= "SELECT * FROM article";

            if($sql = $this->conn->query($query)){
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }

    }


?>