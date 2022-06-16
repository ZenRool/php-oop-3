<?php
require_once __DIR__ . "/Product.php";
class Food extends Product {
    public $expiration;
    function __construct($_name, $_availability, $_price, $_expiration) {
        parent::__construct($_name, $_availability, $_price);
    }

}
?>