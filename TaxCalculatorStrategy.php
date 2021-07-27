<?php


interface TaxCalculatorStrategy
{
    public function calculate(Product $product) : float;
}