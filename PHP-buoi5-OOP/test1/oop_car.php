<?php
class Car {
    public $name ;
    public $numberPlate ;
    public $owner ;
    public $year;

    public function __construct($name,$numberPlate,$owner,$year)
    {
       $this->name= $name;
       $this->numberPlate= $numberPlate;
       $this->owner = $owner;
       $this->year =$year;
    }

    public function showInfo()
    {
        echo 'Tên'. $this->name. '<br>';
        echo 'Biển số : '. $this->numberPlate. '<br>';
        echo 'Chủ sở hữu'. $this->owner. '<br>';
        echo 'Năm sản xuất'. $this->year. '<br>';
    }

    public function changeAuthor($newOwner)
    {
        $this->owner = $newOwner;
    }
}

$car1 = new Car ('Honda','29B-9999','Nguyen Van A',2021);
$car2 = new Car ('Honda','29B-8888','Nguyen Van B',2022);
$car3 = new Car ('Honda','29B-6666','Nguyen Van C',2021);
$car3-> showInfo();
echo '<br>';
$car3-> changeAuthor('Nguyen van D').'<br>';
$car3-> showInfo().'<br>';