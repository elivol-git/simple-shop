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
                        <form action="save-new-product" class="tm-edit-product-form" method="post" enctype="multipart/form-data">
                            <div class="form-group mb-3">
                                <label for="title">Product Title</label>
                                <input id="title" name="title" type="text" class="form-control validate" required />
                            </div>
                            <div class="form-group mb-3">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control validate" rows="3" required></textarea>
                            </div>
                            <div class="form-group mb-3">
                                <label for="brand">Brand</label>
                                <input id="brand" name="brand" type="text" class="form-control validate" />
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="is_on_sale">Is on sale</label>
                                    <input id="is_on_sale" name="is_on_sale" type="checkbox" class="validate" data-large-mode="true" />
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="banner">Banner name</label>
                                    <input id="banner" name="banner" type="text" class="form-control validate" required />
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="price">Price</label>
                                    <input id="price" name="price" type="text" class="form-control validate" data-large-mode="true" />
                                </div>
                                <div class="form-group mb-3 col-xs-12 col-sm-6">
                                    <label for="sale_price">Sale price</label>
                                    <input id="sale_price" name="sale_price" type="text" class="form-control validate" required />
                                </div>
                            </div>

                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                        <div class="tm-product-img-dummy mx-auto">
                            <i class="fas fa-cloud-upload-alt tm-upload-icon" onclick="document.getElementById('fileInput').click();"></i>
                        </div>
                        <div class="custom-file mt-3 mb-3">
                            <input id="productImage" name="productImage" type="file" style="display:none;" />
                            <input type="button" class="btn btn-primary btn-block mx-auto" value="UPLOAD PRODUCT IMAGE" onclick="document.getElementById('productImage').click();" />
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Product Now</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
