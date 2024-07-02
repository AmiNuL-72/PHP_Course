<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StudentID</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="Identity_Card_Design.php" method="POST" enctype="multipart/form-data">
        
        <h1>Create Your Virtual ID Card</h1>
        <label for="name">Name : </label>
        <input type="text" name="name" placeholder="Your Full name"> <br>

        <label for="phn">Phone : </label>
        <input type="phone" name="phn" placeholder="+880-XXXXXXXXXX"> <br>

        <label for="email">Email : </label>
        <input type="email" name="email" placeholder="abc@gmail.com"> <br>

        <label for="crs">Course : </label>
        <input type="text" name="crs" placeholder="Name of Your Course"> <br>

        <label for="roll">Roll No : </label>
        <input type="text" name="roll" placeholder="Your roll No."> <br>
        
        <label for="img">Upload your Photo :</label>
        <input type="file" name="img"> <br> <br>

        <input type="submit" name="submit">
    </form>
</body>
</html>