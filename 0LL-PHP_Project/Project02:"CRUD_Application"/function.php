<?php
    class CRUD_App{
        private $conn;

        public function __construct(){
            // database host, database user, database password, database name;
            $dbhost = 'localhost';
            $dbuser = 'root';
            $dbpass = "";
            $dbname = "CRUD_App";

            $this->conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

            if(!$this->conn){
                die("Database Connection Error..!!");
            }
        }

        public function add_data($data){
            $std_name = $data['std_name'];
            $std_roll = $data['std_roll'];
            $std_img = $_FILES['std_img']['name'];
            $tmp_name = $_FILES['std_img']['tmp_name'];

            $query = "INSERT INTO student_info(Name,Roll, Image) VALUES('$std_name',$std_roll,'$std_img')";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_name,$std_img);
                return "Information Added Successfully";
            }
        }

        public function display_data(){
            $query = "SELECT * FROM student_info";
            if(mysqli_query($this->conn, $query)){
                $returndata = mysqli_query($this->conn, $query);
                return $returndata;
            }
        }

        public function display_data_by_id($id){
            $query = "SELECT * FROM student_info WHERE ID=$id";
            if(mysqli_query($this->conn, $query)){
                $returndata = mysqli_query($this->conn, $query);
                $studentdata = mysqli_fetch_assoc($returndata);
                return $studentdata;
            }
        }

        public function update_data($data){
            $std_name = $data['upd_std_name'];
            $std_roll = $data['upd_std_roll'];
            $idno = $data['std_id'];
            $std_img = $_FILES['upd_std_img']['name'];
            $tmp_name = $_FILES['upd_std_img']['tmp_name'];

            $query = "UPDATE student_info SET Name='$std_name', Roll=$std_roll, Image='$std_img' WHERE ID=$idno";

            if(mysqli_query($this->conn, $query)){
                move_uploaded_file($tmp_name,$std_img);
                return "Information Updated Successfully.!!";
            }
        }

        public function delete_data($id){  
            $catch_img = "SELECT * FROM student_info WHERE ID=$id";
            $delete_std_info = mysqli_query($this->conn,$catch_img);
            $std_info_dlt = mysqli_fetch_assoc($delete_std_info);

            $Delete_img_data = $std_info_dlt['Image'];

            $query = "DELETE FROM student_info WHERE ID=$id";

            if(mysqli_query($this->conn, $query)){
                unlink($Delete_img_data);
                return "Deleted Successfully.!!";
            }
        }
    }
?>