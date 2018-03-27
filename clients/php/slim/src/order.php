<?php

class Order
{
    private $prices;
    private $quantities;
    private $country;
    private $reduction;

    public function __construct(array $prices,array $quantities, string $country, string $reduction){
        $this->prices = $prices;
        $this->quantities = $quantities;
        $this->country = $country;
        $this->reduction = $reduction;

    }

    public function calculBrut() {
        $this->prices = [];
        $this->quantities = [];
        $total = 0;
        for ($i=0; $i < $this->prices.length ; $i++) { 
            for ($y=0; $y< $this->quantities.length; $y++) { 

                $total = $this->prices * $this->quantities;
            }
        }
        return $total;
    }


}


?>