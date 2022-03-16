<?php
namespace App\Routs;

use App\Controller\Shop;

class Router {
    public function __construct(array $request)
    {
        $this->doRoute($request['path']??'');
    }

    private function doRoute($path)
    {
        switch ($path) {
            case '':
            case 'products-list':
                $shop = new Shop();
                $shop->displayProducts();
                break;
            case 'new-product':
                $shop = new Shop();
                $shop->newProductForm();
                break;
            case 'save-new-product':
                $shop = new Shop();
                $shop->addProduct($_POST);
                break;
            case 'about':
                break;
            case 'contact':
                break;
            default:
                echo $path;
                http_response_code(404);
                echo 'The page not found';
                break;
        }
    }
}