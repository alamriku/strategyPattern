<?php


class Context
{
    private TaxCalculatorStrategy $taxCalculatorStrategy;

    public function  __construct(TaxCalculatorStrategy $anyStrategy)
    {
        $this->taxCalculatorStrategy = $anyStrategy;
    }

    public function calculateProduct(Product $product) : void
    {
        $taxes = $this->taxCalculatorStrategy->calculate($product);
        $product->setTaxes($taxes);
    }
}