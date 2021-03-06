<?php
    class Parcel
    {
        private $length;
        private $width;
        private $height;
        private $weight;

        function __construct($length, $width, $height, $weight)
        {
            $this->length = $length;
            $this->width = $width;
            $this->height = $height;
            $this->weight = $weight;
        }

        function getLength()
        {
            return $this->length;
        }
        function setLength($length)
        {
            $this->length = $length;
        }
        function getWidth()
        {
            return $this->width;
        }
        function setWidth($width)
        {
            $this->width = $width;
        }
        function getHeight()
        {
            return $this->height;
        }
        function setHeight($height)
        {
            $this->height = $height;
        }
        function getWeight()
        {
            return $this->weight;
        }
        function setWeight($weight)
        {
            $this->weight = $weight;
        }

        function volume()
        {
            return (($this->length * $this->width) * $this->height);
        }
        function costToShip()
        {
            return (($this->height + $this->width) + ($this->length + $this->weight));
        }

    }

    $shoes = new Parcel(0, 0, 0, 0);
    $shoes->setLength($_GET["length"]);
    $shoes->setWidth($_GET["width"]);
    $shoes->setHeight($_GET["height"]);
    $shoes->setWeight($_GET["weight"]);

?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <title>Parcel shipping cost</title>
</head>
<body>
    <div class="container">
        <h1>Shipping cost:</h1>
        <?php
            if ((empty($shoes->getLength()) || empty($shoes->getWidth())) || (empty($shoes->getHeight()) || empty($shoes->getWeight())))
            {
                echo "<p>Please complete empty fields.</p>";
            } else {
                echo "<p> Length: " . $shoes->getLength() . " inches.</p>";
                echo "<p> Width: " . $shoes->getWidth() . " inches. </p>";
                echo "<p> Height: " . $shoes->getHeight() . " inches. </p>";
                echo "<p> Weight: " . $shoes->getWeight() . " pounds. </p>";
                echo "<p> Volume: " . $shoes->volume() . " cubed inches. </p>";
                echo "<p> Cost to ship: $" . $shoes->costToShip() . "</p>";
            }

        ?>
    </div>
</body>
</html>
