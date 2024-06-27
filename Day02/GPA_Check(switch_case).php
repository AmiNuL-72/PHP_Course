
<?php
//GPA calculator program using Switch-Case
    $marks=72;
    switch($marks){
        case($marks>=80 && $marks<=100):
            echo "You got A+ : "."GPA=5.00<br>";
            break;
        case($marks>=70 && $marks<80):
            echo "You got A : "."GPA=4.00<br>";
            break;
        case($marks>=60 && $marks<70):
            echo "You got A- : "."GPA=3.50<br>";
            break;
        case($marks>=50 && $marks<60):
            echo "You got B : "."GPA=3.00<br>";
            break;
        case($marks>=40 && $marks<50):
            echo "You got C : "."GPA=2.00<br>";
            break;
        case($marks>=33 && $marks<40):
            echo "You got D : "."GPA=1.00<br>";
            break;
        case($marks>=0 && $marks<33):
            echo "You got F : "."GPA=0.00<br>";
            break;
        default:
            echo "Invalid marks<br>";
    }
?>