<!-- Shopping cart -->
<?php
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if (isset($_POST['delete_cart_submit'])){
        $deletedRecord = $Cart->deleteCart($_POST['item_id']);
    }
    if (isset($_POST['wishlist-submit'])){
        $Cart->saveForLater($_POST['item_id']);
    }
}
?>
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!-- shopping cart items -->
        <div class="row">
            <div class="col-sm-8">
                <?php
                    foreach ($product->getData('cart') as $item):
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
                            <div class="d-flex font-rale w-75">
                                <button data-id="<?php echo $item['item_id'] ?? '0';?>" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>
                                <input data-id="<?php echo $item['item_id'] ?? '0';?>" type="text" class="qty_input w-100 border text-center px-2 bg-light" value="1" placeholder="1" disabled>
                                <button data-id="<?php echo $item['item_id'] ?? '0';?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                            </div>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                <button type="submit" name="delete_cart_submit" class="btn  text-danger px-3 font-baloo font-size-12 border-end">Delete</button>
                            </form>
                            <form method="post">
                                <input type="hidden" value="<?php echo $item['item_id'] ?? 0;?>" name="item_id">
                                <button type="submit" name="wishlist-submit" class="btn text-danger font-baloo font-size-12">Save for later</button>
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
            <!-- Subtotals -->
            <div class="col-sm-4">
                <div class="sub-total border text-center ms-2 mt-2">
                    <h6 class="font-rale font-size-12 text-success py-2"><i class="fas fa-check"></i> You're eligible for FREE delivery</h6>
                    <div class="border-top py-4">
                        <h5 class="font-baloo font-size-12">Subtotal (<?php echo isset($subTotal) ? count($subTotal) : 0; ?> items): &nbsp;<span class="text-danger">Ksh <span id="deal-price"><?php echo isset($subTotal) ? $Cart->getSum($subTotal) : 0 ?></span></span></h5>
                        <button type="submit" class="btn btn-warning mt-3 font-size-14">Proceed to buy</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>