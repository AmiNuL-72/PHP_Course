
<?php
//GPA calculator program using if-else
    $marks=72;

    if($marks>=80 && $marks<=100){
        echo "You got A+ : "."GPA=5.00<br>";
    }
    else if($marks>=70 && $marks<80){
        echo "You got A : "."GPA=4.00<br>";
    }
    else if($marks>=60 && $marks<70){
        echo "You got A- : "."GPA=3.50<br>";
    }
    else if($marks>=50 && $marks<60){
        echo "You got B : "."GPA=3.00<br>";
    }
    else if($marks>=40 && $marks<50){
        echo "You got C : "."GPA=2.00<br>";
    }
    else if($marks>=33 && $marks<40){
        echo "You got D : "."GPA=1.00<br>";
    }
    else if($marks>=0 && $marks<33){
        echo "You got F : "."GPA=0.00<br>";
    }
    else{
        echo "Invalid marks<br>";
    }
?>