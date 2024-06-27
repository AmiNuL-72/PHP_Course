<!DOCTYPE html>
<html>
<body>

    <?php
    $x = 100;  
    $y = "100";
    var_dump($x == $y); // returns true because values are equal
    ?> 


    <?php
    $x = 100;  // integer
    $y = "100"; // string

    var_dump($x === $y); // returns false because types are not equal
    ?>  

</body>
</html>
