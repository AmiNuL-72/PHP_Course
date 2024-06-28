<?php
/*
    class Car {
        public $color;
        public $model;
        public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
        }
    }

    $myCar = new Car("red", "Volvo");

    foreach ($myCar as $x => $y) {
        echo "$x: $y<br>";
    }
*/
?>

<?php
    $city = array("Rajshahi","Rangpur","Khulna","Barishal","Sylhet","Dhaka","Mymenshingh","Bandarban","Kuakata","CoxBazar");
    echo "<ol>";
    foreach($city as $x){
        echo "<li> $x<br> </li>";
    }
    echo "</ol>";
?>