<?php
abstract class Shape {
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }
   abstract public function calculateArea ();
}
class Circle extends Shape {
    public $radius ;

    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius = $radius;
    }

    public function calculateArea()
    {
     return 3.14 * $this->radius * $this->radius;
    }
}
class Square extends Shape {
    public  $width;

    public function __construct($name,$width)
    {
        parent::__construct($name);
        $this->width = $width;
    }
    public function calculateArea()
    {
        return $this->width * $this->width;
    }
}
$circle = new Circle('a',4);
$square = new Square('a',5);
echo $circle->calculateArea().'<br>';
echo $square->calculateArea().'<br>';

