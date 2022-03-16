<div class="content-wrapper container tm-mt-big tm-mb-big">
    <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
            <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
                <div class="row">
                    <div class="col-12">
                        <h2 class="tm-block-title d-inline-block">Add Product</h2>
                    </div>
                </div>
                <div class="row tm-edit-product-row">
                    <div class="col-xl-6 col-lg-6 col-md-12">
                        <?php if ($data['status'] === \App\lib\ConfigParams::STATUS_SUCCESS):?>
                            <div class="alert alert-success" role="alert">
                                <?php echo "New product was successfully saved. Id is {$data['id']}"?>
                            </div>
                        <?php else:?>
                        <div class="alert alert-danger" role="alert">
                            <p>Some errors occurred while saving new product</p>
                            <p><?php echo $data['error'];?></p>
                        </div>
                        <?php endif;?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
