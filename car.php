<?php
    class Car
    {
        private $make_model;
        private $price;
        private $miles;

        function __construct($make, $price, $miles)
        {
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

        function getMiles()
        {
            return $this->miles;
        }
    }

    $porsche = new Car("2014 Porsche 911", 114991, 7864);
    $ford = new Car("2011 Ford F450", 55995, 14241);
    $lexus = new Car("2013 Lexus RX 350", 44700, 20000);
    $mercedes = new Car("Mercedes Benz CLS550", 39900, 37979);

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
                $model = $car->getMakeModel();
                $price = $car->getPrice();
                $miles = $car->getMiles();
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
