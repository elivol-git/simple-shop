<?php


namespace App\Models;


use App\lib\ConfigParams;

class ProductModel
{
    private int $id;
    private string $title;
    private string $description;
    private float $price;
    private string $image_path;
    private float $sale_price;
    private int $is_on_sale;
    private string $banner;
    private string $brand;
    private int $created;
    private string $createdFormatted;

    public function getId():int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getTitle():string
    {
        return $this->title;
    }

    public function setTitle(string $title): void
    {
        $this->title = $title;
    }

    public function getDescription():string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPrice():float
    {
        return $this->price;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function getImagePath():string
    {
        return $this->image_path;
    }

    public function setImagePath($image_path): void
    {
        $this->image_path = $image_path;
    }

    public function getSalePrice():float
    {
        return $this->sale_price;
    }

    public function setSalePrice(float $sale_price): void
    {
        $this->sale_price = $sale_price;
    }

    public function isOnSale():int
    {
        return $this->is_on_sale;
    }

    public function displayIsOnSale():string
    {
        if ($this->getIsOnSale()) {
            $isOnSale = '<i class="glyphicon">&#xe013;</i>';
        } else {
            $isOnSale = '<i class="glyphicon glyphicon-remove"></i>';
        }

        return $isOnSale;
    }

    public function setIsOnSale($is_on_sale): void
    {
        $this->is_on_sale = $is_on_sale;
    }

    public function getBanner():string
    {
        return $this->banner;
    }

    public function setBanner(string $banner): void
    {
        $this->banner = $banner;
    }

    public function getBrand():string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getCreated():int
    {
        return $this->created;
    }

    public function setCreated(int $created): void
    {
        $this->created = $created;
        $this->setCreatedFormatted(gmdate(ConfigParams::DATE_FORMAT, $this->created));
    }


    public function getCreatedFormatted(): string
    {
        return $this->createdFormatted;
    }

    public function setCreatedFormatted(string $createdFormatted): void
    {
        $this->createdFormatted = $createdFormatted;
    }
}