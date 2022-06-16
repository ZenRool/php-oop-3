<?php
require_once "./traits/Origin.php";
class Product {
    use Origin;

    public $name;
    public $price;
    public $availability;
    function __construct($_name, $_availability, $_price) {
        $this->name = $_name;
        $this->price = $_price;
        $this->availability = $_availability;
    }
    public function isAvailable() {
        return $this->availability > 0;
    }
    public function buyProduct($number = 1) {
        $this->availability -= $number;
    }
}
?>