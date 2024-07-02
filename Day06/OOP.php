<?php
    class MyClass{
        public $x, $y, $z; // properties

        public function __construct($a,$b){  //constructor
            $this->x = $a;
            $this->y = $b;
        }

        public function mySum(){  // method
          // X-[$z = $x + $y;]-X
            $this->z = $this->x + $this->y;
            return $this->z;
        }
    }
    /*
    $aminul = new MyClass();
    $aminul->x = 62;
    $aminul->y = 10;
    */
    $aminul = new myClass(62,10); // object
    echo $aminul->mySum();
    echo "<br>";
    $aminul1 = new myClass(12,21);  // object
    echo $aminul1->mySum();
?>