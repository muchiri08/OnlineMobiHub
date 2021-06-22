<!-- Shopping cart -->
<section id="cart" class="py-3">
    <div class="container-fluid w-75">
        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

        <!-- shopping cart items -->
        <div class="row">
            <div class="col-sm-8">
                <!-- Empty cart -->
                <div class="row border-top py-3 mt-4">
                    <div class="col-sm-12 text-center py-2">
                        <img src="./assets/empty_cart.png" alt="Empty Cart" class="img-fluid">
                        <p class="font-baloo font-size-16 text-black-50"> Empty Cart </p>
                    </div>
                </div>
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
