<?php 
    if(isset($_POST['submit'])){
        $username = $_POST['name'];
        $course = $_POST['crs'];
        $phone = $_POST['phn'];
        $email = $_POST['email'];
        $roll_no = $_POST['roll'];
    } 
?>
<?php /*
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentID</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="id-card">
        <h3>UserName: <?php if(isset($username)){ echo $username; }?></h3>
        <h3>Course: <?php if(isset($course)){ echo $course; }?></h3>
        <h3>Phone: <?php if(isset($phone)){ echo $phone; }?></h3>
        <h3>Email: <?php if(isset($email)){ echo $email; }?></h3>
        <h3>roll_no: <?php if(isset($roll_no)){ echo $roll_no; }?></h3>
    </div>
</body>
</html>
*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student ID Card</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="id-card">
        <div class="header">
            <img src="bu_logo.png" alt="Logo" class="logo">
            <h1>University of Barishal</h1>
        </div>
        <div class="student-photo">
            <img src="Stu_photo.jpg" alt="Student Photo">
        </div>
        <div class="card-body">
            <h2>STUDENT CARD</h2>
            <div class="card-details">
                <p><strong>Name:</strong> <span><?php if(isset($username)){ echo $username; }?></span></p>
                <p><strong>Course:</strong> <span><?php if(isset($course)){ echo $course; }?></span></p>
                <p><strong>Phone:</strong> <span><?php if(isset($phone)){ echo $phone; }?></span></p>
                <p><strong>Email:</strong> <span><?php if(isset($email)){ echo $email; }?></span></p>
                <p><strong>Department:</strong> <span><?php echo "CSE"?></span></p>
                <p><strong>Roll No:</strong> <span><?php if(isset($roll_no)){ echo $roll_no; }?></span></p>
            </div>
        </div>
    </div>
</body>
</html>
