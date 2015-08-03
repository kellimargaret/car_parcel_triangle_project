<?php

class Triangle
{
    public $side1;
    public $side2;
    public $side3;

    function __construct($side1, $side2, $side3)
    {
        $this->side1 = $side1;
        $this->side2 = $side2;
        $this->side3 = $side3;
    }

}

// $side_1 = $_GET["side1"];
// $side_2 = $_GET["side2"];
// $side_3 = $_GET["side3"];
// $newTriangle = new Triangle($side_1, $side_2, $side_3);

$tri = new Triangle($_GET["side1"], $_GET["side2"], $_GET["side3"]);
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Triangles</title>
</head>
<body>
    <div class="container">
        <?php
            if((($tri->side1 + $tri->side2 >= $tri->side3) || ($tri->side3 + $tri->side1 >= $tri->side2)) || ($tri->side3 + $tri->side2 >= $tri->side1))
            {
                if (($tri->side1 == $tri->side2) && ($tri->side1 == $tri->side3)) {
                    echo "<h1>You have an equilateral triangle!</h1>";
                } elseif ((($tri->side1 == $tri->side2) || ($tri->side1 == $tri->side3)) || ($tri->side2 == $tri->side3)) {
                    echo "<h1>You have an isosceles triangle.</h1>";
                } else {
                    echo "<h1>You have a scalene triangle!</h1>";
                }

            } else {
                echo "Sorry! That's not a triangle!";
            }


        ?>
    </div>
</body>
</html>
