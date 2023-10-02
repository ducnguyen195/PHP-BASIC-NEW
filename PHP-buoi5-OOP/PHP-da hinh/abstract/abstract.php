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
    public  $length;
    public  $width;

    public function __construct($name,$length,$width)
    {
        parent::__construct($name);
        $this->length = $length;
        $this->width = $width;
    }
    public function calculateArea()
    {
        return $this->width* $this->length;
    }
}
$circle = new Circle('a',4);
$square = new Square('b',5,5);
echo $circle->calculateArea().'<br>';
echo $square->calculateArea().'<br>';

