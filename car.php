<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;
        private $image;

        function __construct($image, $make, $price, $miles = 10000)
        {
            $this->image = $image;
            $this->make_model = $make;
            $this->price = $price;
            $this->miles = $miles;
        }

        function getMakeModel()
        {
            return $this->make_model;
        }
        function setMakeModel($model)
        {
            $this->make_model = $model;
        }
        function getPrice()
        {
            return $this->price;
        }
        function setPrice($price)
        {
            $this->price = $price;
        }
        function getMiles()
        {
            return $this->miles;
        }
        function setMiles($miles)
        {
            $this->miles = $miles;
        }
        function getImage()
        {
            return $this->image;
        }
        function setImage($image)
        {
            $this->image = $image;
        }
    }

    $porsche = new Car("img/porsche.jpg", "2014 Porsche 911", 114991);
    $ford = new Car("img/ford.jpg", "2011 Ford F450", 55995, 14241);
    $lexus = new Car("img/lexus.jpg", "2013 Lexus RX 350", 44700, 20000);
    $mercedes = new Car("img/mercedes.jpg", "Mercedes Benz CLS550", 39900, 37979);

    $cars = array($porsche, $ford, $lexus, $mercedes);

    $cars_matching_search = array();
    foreach ($cars as $car) {
        if ($car->getPrice() < $_GET["price"]) {
            array_push($cars_matching_search, $car);
        }
    }

?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Your Car Dealership</title>
</head>
<body>
    <h1>Your Car Dealership's Homepage</h1>
    <ul>
        <?php
            foreach ($cars_matching_search as $car) {
                $image = $car->getImage();
                $model = $car->getMakeModel();
                $price = $car->getPrice();
                $miles = $car->getMiles();
                echo "<li> <img src='$image'> </li>";
                echo "<li> $model </li>";
                echo "<ul>";
                    echo "<li> $$price </li>";
                    echo "<li>Miles: $miles </li>";
                echo "</ul>";

            }
        ?>
    </ul>
</body>
</html>
