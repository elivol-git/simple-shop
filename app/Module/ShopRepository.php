<?php


namespace App\Module;


use App\lib\ConfigParams;
use App\lib\DB;
use App\lib\FileUpload;
use App\Models\ProductModel;
use JetBrains\PhpStorm\ArrayShape;

class ShopRepository
{
    const TABLE = 'products';
    private DB $dbConnection;

    public function __construct(DB $dbConnection)
    {
        $this->dbConnection = $dbConnection;
    }

    #[ArrayShape(['status' => "string", 'id' => "int", 'error' => "string"])]
    public function addProduct(array $dataNewProduct):array
    {
        $result = ['status'=>ConfigParams::STATUS_SUCCESS];
        try {
            $dataNewProduct['image_path'] = $this->saveProductImage();
            $dataNewProduct['is_on_sale'] = $dataNewProduct['is_on_sale']==='on'?1:0;
            $dataNewProduct['created'] = time();
            $modelNewProduct = $this->formatToModel($dataNewProduct);

            $qInsert = "INSERT INTO ". self::TABLE ." (title, description, price, image_path, sale_price, is_on_sale, banner, brand, created) 
                        VALUES ('{$modelNewProduct->getTitle()}',
                          '{$modelNewProduct->getDescription()}',
                          '{$modelNewProduct->getPrice()}',
                          '{$modelNewProduct->getImagePath()}',
                          '{$modelNewProduct->getSalePrice()}',
                          '{$modelNewProduct->isOnSale()}',
                          '{$modelNewProduct->getBanner()}',
                          '{$modelNewProduct->getBrand()}',
                          {$modelNewProduct->getCreated()}
                          )";

            $result['id'] = $this->dbConnection->query($qInsert)->lastInsertID();

        } catch (\Exception $exception) {
            $result['status'] = ConfigParams::STATUS_FAILED;
            $result['error'] = $exception->getMessage();
        }

        return $result;
    }

    public function updateProduct(int $id, array $itemData):int
    {

    }

    public function getListProducts(array $whereParams=[], int $limit=null):array
    {
        $query = 'SELECT * FROM ' . self::TABLE;
        if ($limit) {
            $query .= ' LIMIT ' . $limit;
        }
        try {
            $listProducts = $this->dbConnection->query($query)->fetchAll();
            $listProductsFormatted = [];
            foreach ($listProducts as $product) {
                $listProductsFormatted[] = $this->formatToModel($product);
            }

        } catch (\Exception $exception) {
            $listProductsFormatted = [];
        }

        return $listProductsFormatted;
    }

    private function formatToModel(array $product):ProductModel
    {
        $formattedProduct = new ProductModel();
        $formattedProduct->setId($product['id']??0);
        $formattedProduct->setTitle($product['title']);
        $formattedProduct->setDescription($product['description']);
        $formattedProduct->setPrice((float)$product['price']);
        $formattedProduct->setImagePath($product['image_path']);
        $formattedProduct->setSalePrice((float)$product['sale_price']);
        $formattedProduct->setIsOnSale((int)$product['is_on_sale']);
        $formattedProduct->setBanner($product['banner']);
        $formattedProduct->setBrand($product['brand']??'');
        $formattedProduct->setCreated($product['created']);

        return $formattedProduct;
    }

    private function saveProductImage():string
    {
        if (empty($_FILES['productImage'])) {
            throw new \Exception('Product image is missing');
        }

        return FileUpload::i()->uploadImage($_FILES['productImage'], ConfigParams::IMAGE_DIR_PRODUCTS.'/');
    }
}