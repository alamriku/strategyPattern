<?php


class FoodTaxStrategy implements TaxCalculatorStrategy
{
    const TAX_RATE = 30.0;
    public function calculate(Product $product): float
    {
        return $product->getPrice() * (SELF::TAX_RATE / 100);
    }
}