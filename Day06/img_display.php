<?php
    if(isset($_POST['submit'])){
        //print_r($_FILES['img']);
        $img_name = $_FILES['img']['name'];
        $tmp_name = $_FILES['img']['tmp_name'];
        move_uploaded_file($tmp_name,"upload/".$img_name);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
</head>
<body>
    <img src="upload/<?php if(isset($img_name)){ echo $img_name;} ?>" alt="">
</body>
</html>