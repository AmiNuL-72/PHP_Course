/* Topics-> if,else if, else conditions */
//Find The Largest number

<?php
    $a=12;
    $b=11;
    $c=15;
    
    if($a>$b){
        if($a>$c){
            echo "$a is Largest..!!";
        }
        else{
            echo "$c is Largest..!!";
        }
    }
    else{
        if($b>$c){
            echo "$b is Largest..!!";
        }
        else{
            echo "$c is Largest..!!";
        }
    }
?>