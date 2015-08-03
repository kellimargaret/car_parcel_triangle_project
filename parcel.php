<?php
    class Parcel
    {
        private length;
        private width;
        private height;
        private weight;

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

    }

    $shoes = new Parcel(5, 5, 20, 15);

?>
