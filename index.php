<?php
require 'Product.php';
require 'ElectronicTaxStrategy.php';
require 'FoodTaxStrategy.php';
require 'TaxFreeStrategy.php';
require 'Context.php';
$product = new Product();

$product->setName('product elector')
        ->setCategory('electronics')
        ->setPrice(200);

switch ($product->getCategory()){
    case 'electronics' :
        $strategy = new ElectronicTaxStrategy;
        break;
    case 'food' :
        $strategy = new FoodTaxStrategy;
        break;
    case 'free' :
        $strategy = new TaxFreeStrategy;
        break;
    default :
         throw new \Exception('Strategy not found for this category.');
}

$context = new Context($strategy);
$context->calculateProduct($product);
echo $product->getTaxes();