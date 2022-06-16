<?php
trait Origin {
    public $country;
    public $date;
    public function setOrigins($_country, $_date) {
        $this->country = $_country;
        $this->date = $_date;     
    }
    public function madeInItaly() {
        return $this->country === "Italy";
    }
}


?>