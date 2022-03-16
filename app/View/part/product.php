<?php
$isOnSale = $product->isOnSale();
$classOnSale = $isOnSale? 'on_sale' : 'not_on_sale';
?>
<div class="col-lg-4 col-md-4 all <?php echo $classOnSale;?>">
    <div class="product-item">
        <a href="#"><img src="/public/images/<?php echo \App\lib\ConfigParams::IMAGE_DIR_PRODUCTS. '/'. $product->getImagePath();?>" alt=""></a>
        <div class="down-content">
            <a href="#"><h4><?php echo $product->getTitle();?></h4></a>
            <h6>$<?php echo $product->getSalePrice();?></h6>
            <p><?php echo $product->getDescription();?></p>
            <?php $brand = $product->getBrand();
            if($brand):?>
            <p class="brand"><span><?php echo $brand;?></span></p>
            <?php endif ?>
            <?php if($isOnSale):?>
            <p><button type="button" class="btn btn-primary">Order</button></p>
            <?php else: ?>
            <p>Not available</p>
            <?php endif ?>
            <p><span><?php echo \App\Module\Banner::i()->displayBanner($product->getBanner() );?></span></p>
        </div>
    </div>
</div>
