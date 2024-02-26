<?php

require_once('../../models/productModel.php');

class ProductController
{
    private $productModel;

    public function __construct($conn)
    {
        $this->productModel = new ProductModel($conn);
    }

    public function getProducts()
    {
        return $this->productModel->getProducts();
    }

}