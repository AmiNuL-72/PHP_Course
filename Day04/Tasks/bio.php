<?php
    if(isset($_POST['btn'])){
        $name = $_POST['user_name'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        //$institute = $_POST['university'];
        $password = $_POST['pass'];
        $phone = $_POST['phn'];
        $gender = $_POST['gender'];
        $dob = $_POST['DOB'];
        $religion = $_POST['religion'];
    }
?>

<html>
    <body>
        <h2>User Name : <?php if(isset($name)){
            echo "$name";
        }?></h2>
        <!--<h2>Password : <?php if(isset($password)){
            echo "$password";
        }?></h2>-->
        <h2>Email : <?php if(isset($email)){
            echo "$email";
        }?></h2>
        <h2>Phone : <?php if(isset($phone)){
            echo "$phone";
        }?></h2>
        <h2>Address : <?php if(isset($address)){
            echo "$address";
        }?></h2>
        <h2>Gender : <?php if(isset($gender)){
            echo "$gender";
        }?></h2>
        <h2>Date of Birth : <?php if(isset($dob)){
            echo "$dob";
        }?></h2>
        <h2>Religion : <?php if(isset($religion)){
            echo "$religion";
        }?></h2>
    </body>
</html>