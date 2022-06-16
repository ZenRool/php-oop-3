<?php
class Card {
    public $number;
    private $balance;
    public $expirationCard;
    function __construct($_number,$_expirationCard , $_balance = 500) {
        $this->number = $_number;
        $this->balance = $_balance;
        $this->expirationCard = $_expirationCard;
    }
    public function getBalance() {
        return $this->balance;
    }
    public function spent($price) {
        if($this->balance < $price) {
            throw new Exception("Errore nel pagamento");
        }
        else {
            $this->balance -= $price;
        }
    }
}
?>