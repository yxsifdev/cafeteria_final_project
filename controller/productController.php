<?php
class productController
{
    private $model;

    public function __construct()
    {
        require_once('../../models/productModel.php');
        $this->model = new productModel();
    }

    public function getProducts()
    {
        return $this->model->getProducts();
    }
}