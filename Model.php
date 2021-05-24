<?php

    Class Model{
        private $server ="localhost";
        private $username ="root";
        private $password;
        private $db = "oop_crud";
        private $conn;

        
        protected $con;
        protected $sql;


        public function __construct(){
            try{
                // $conn = new PDO("mysql:host=$this->server;dbname=$this->db", $this->username, $this->password);

                //  $this->conn=new mysqli($this->server,$this->username,$this->password,$this->db);
                return $this->conn=new mysqli($this->server,$this->username,$this->password,$this->db);
            } catch(Exception $e){
                echo"connection failed".$e->getMessage();
            }
        }

        public function sql(string $sql)
    {
        try {
            // ! Test Query
            $this->conn->query($sql);

        } catch (PDOException $th) {
            die( "SQL failed : {$sql}");
        }

        // * Save Query
        $this->sql=$sql;

        return $this;
    }

    public function get()
    {
        if($sql = $this->conn->query($this->sql)){
            while ($row = ($sql->fetch_object())) {
                $data[] = $row;
            }
        }
        // ? Fetch Data
        // $return = $this->conn->query($this->sql);
        // return $return->fetch_object();
        return $data;
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
                            echo "<script> window.location.href = 'articles.php';</script>";
                        }else{
                            echo "<script> alert('empty') </script>";
                            echo "<script> window.location.href = 'articles.php';</script>";
                        }
                    }else{
                        echo "<script> alert('empty') </script>";
                        echo "<script> window.location.href = 'articles.php';</script>";
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

        // delete function 
        public function delete($id){
            // echo $id;
            $query = "DELETE FROM article where id ='$id'";

            if($sql = $this->conn->query($query)){
                 return true;
            }else{
                return false;
            }
        }

        // fetch single article 
        public function fetch_single($id){
            $data = null;
            $query = "SELECT * FROM article where id = '$id'";

            if($sql = $this->conn->query($query)){
                while ($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }

        // edit an article 
        public function edit($id){
            // echo $id;
            $data = null;
            $query = "SELECT * FROM article where id = '$id'";

            if($sql = $this->conn->query($query)){
                while ($row = $sql->fetch_assoc()){
                    $data = $row;
                }
            }
            return $data;
        }

        public function update($data){
            // var_dump($data);
            $query ="UPDATE article SET auteur='$data[auteur]', title='$data[title]', text='$data[text]' WHERE id ='$data[id]'"; 
            if($sql = $this->conn->query($query)){
                return true;
            }else{
                return false;
            }
        }


    }


?>