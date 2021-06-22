<!-- Shopping cart -->
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['delete_wishlist_submit'])){
        $deletedRecord = $Cart->deleteWishlist($_POST['item_id']);
    }
    if (isset($_POST['cart-submit'])){
        $Cart->saveForLater($_POST['item_id'], 'cart', 'wishlist');
    }
}
?>
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">WishList</h5>

        <!-- shopping cart items -->
        <div class="row">
            <div class="col-sm-8">
                <?php
                foreach ($product->getData('wishlist') as $item):
                    $cart = $product->getProduct($item['item_id']);
                    $subTotal[] = array_map(function ($item){
                        ?>
                        <!-- cart item -->
                        <div class="row  border-top mt-3 py-3">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image'] ?? "./assets/products/iphone11.png"; ?>" alt="Cart1" class="img-fluid">
                            </div>
                            <div class="col-sm-8">
                                <h5 class="font-baloo font-size-20 mb-0"><?php echo $item['item_name'] ?? "Unknown";?></h5>
                                <small class="font-size-12">by <?php echo $item['item_brand'] ?? "Brand"; ?></small>
                                <!-- Product Rating-->
                                <div class="d-flex">
                                    <div class="rating text-warning font-size-12">
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>
                                    </div>
                                    <a href="#" class="px-2 font-rale font-size-18 text-decoration-none">20,147 ratings</a>
                                </div>
                                <!-- Product quantity -->
                                <div class="qty d-flex pt-2">
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="delete_wishlist_submit" class="btn  text-danger pl-0 pr-3 font-baloo font-size-12 border-end">Delete</button>
                                    </form>
                                    <form method="post">
                                        <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                        <button type="submit" name="cart-submit" class="btn text-danger font-baloo font-size-12">Add to Cart</button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-2 text-end">
                                <div class="font-baloo font-size-18 text-danger">
                                    Ksh<span class="product_price" data-id="<?php echo $item['item_id'] ?? '0';?>">&nbsp;<?php echo $item['item_price'] ?? 0; ?></span>
                                </div>
                            </div>
                        </div>
                        <?php
                        return $item['item_price'];
                    },$cart);
                endforeach;
                ?>
            </div>
        </div>
    </div>
</section>
