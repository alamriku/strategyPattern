<?php

require 'TaxCalculatorStrategy.php';
class ElectronicTaxStrategy implements TaxCalculatorStrategy
{
    const TAX_RATE = 23.25;

    public function calculate(Product $product): float
    {
        return $product->getPrice() * (self::TAX_RATE / 100);
    }
}