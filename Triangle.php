<?php
include_once 'Shape.php';

class Triangle extends Shape
{
    Private $x, $y, $z;

    public function __construct($_x = 1.0, $_y = 1.0, $_z = 1.0)
    {
        $this->x = $_x;
        $this->y = $_y;
        $this->z = $_z;
    }

    function checkTriangle()
    {
        if (($this->x + $this->y) > $this->z && ($this->x + $this->z) > $this->y
            && ($this->y + $this->z) > $this->x
        ) {
            return true;
        } else {
            return false;
        }
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setX($x)
    {
        $this->x = $x;
    }

    public function setY($y)
    {
        $this->y = $y;
    }

    public function setZ($z)
    {
        $this->z = $z;
    }

    public function getPerimeter()
    {
        if ($this->checkTriangle() == true) {
            return $this->x + $this->y + $this->z;
        } else {
            echo "$this->x $this->y $this->z khong phai la canh cua tam giac";
        }

    }

    public function getArea()
    {
        if ($this->checkTriangle() == true) {
            $p = ($this->getPerimeter()) / 2;
            return sqrt($p * ($p - $this->x) * ($p - $this->y) * ($p
                    - $this->z));
        } else {
            echo "$this->x $this->y $this->z khong phai la canh cua tam giac";
        }

    }

    public function toString()
    {
        if ($this->checkTriangle() == true) {
            echo "cac canh cua tam giac: $this->x $this->y $this->z" . "<br>";
        } else {
            echo "$this->x $this->y $this->z khong phai la canh cua tam giac";
        }
    }

}

$t1 = new Triangle(7,6,6.5);
$t1->toString();
echo $t1->getArea();
echo "<br>";
echo $t1->getPerimeter();
?>