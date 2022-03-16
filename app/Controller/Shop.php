<?php
namespace App\Controller;

use App\lib\ConfigParams;
use App\lib\DB;

class Shop extends AppController
{
    private DB $db;

    public function __construct()
    {
        $config = new ConfigParams();
        $this->db = new DB($config->getDbHost(), $config->getDbUser(), $config->getDbPassword(), $config->getDbName());
    }

    public function displayProducts()
    {
        $listProducts = (new \App\Module\Shop($this->db))->listProducts();
        $this->view('products_list', $listProducts);
    }

    public function addProduct(array $dataNewProduct)
    {
        $newProductResult = (new \App\Module\Shop($this->db))->addProduct($dataNewProduct);
        $this->view('save_new_product', $newProductResult);
    }

    public function newProductForm()
    {
        $this->view('new_product');
    }
}