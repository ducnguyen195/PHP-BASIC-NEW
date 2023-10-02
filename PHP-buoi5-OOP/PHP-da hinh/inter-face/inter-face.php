<?php
interface Shape {
    public function calculateArea ();
    public function calculatePerimeter ();
}
class ChuNhat implements Shape {
    public $dai ;
    public $rong;
    public function __construct($rong,$dai)
    {
        $this->dai = $dai;
        $this->rong =$rong;
    }

    public function calculateArea ()
    {
        return $this->dai * $this->rong;
    }

    public function calculatePerimeter()
    {
        return ($this->dai + $this->rong)*2;
    }
}
class Vuong implements Shape {
    public $a ;
    public function __construct($a)
    {
        $this->a = $a;
    }

    public function calculateArea ()
    {
        return $this->a * $this->a;
    }

    public function calculatePerimeter()
    {
        return $this->a * 4;
    }
}

$chunhat = new ChuNhat(2,4);
$vuong = new Vuong(5);
echo  $chunhat->calculatePerimeter()."<br>";
echo  $chunhat->calculateArea()."<br>";
echo  $vuong->calculatePerimeter()."<br>";
echo  $vuong->calculateArea()."<br>";
