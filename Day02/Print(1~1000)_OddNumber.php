<?php
//Print(1~1000)_OddNumber using for loop
    for($i=1; $i<=1000; $i++){
        if($i%2){
            echo "$i\n";
        }
    }

    /*if you run your PHP code in a web server and view the output in a web browser, \n might not produce a visible line break because HTML ignores whitespace, including newlines.*/
?>