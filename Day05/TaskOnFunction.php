<?php
    function FunctionTask($name, $university, $semester, $topic, $course, $about,$x,$y){
        echo "Hello,everyone..This is $name form $university.Now I am in $semester-th semester and recently starting to learn $topic for my $course Course.Today's Discuss topic is $about in PHP.<br>Summation of $x + $y = ".($x+$y);
    }
    FunctionTask("'Md. Aminul Islam'","'University of Barishal'",4,"PHP","Web Engineering Lab","FUNCTION",10,15);
?>