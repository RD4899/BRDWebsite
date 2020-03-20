<!DOCTYPE html>
<html lang="en">

<head>
    <? include('header.php'); ?>
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <title>Shop</title>
</head>

<body>
    <!-- Header -->
    <? $currentPage = "Shop";
    include('nav.php');
    include('conninfo.php'); ?>
    <!-- Header -->

    <div class="container-fluid">
        <div class="container" style="margin-top: 3%">
            <div class="row" id="shop-row">
                <? include('shop_products.php'); ?>

                <!-- <div class="col-sm-12 col-md-4 col-lg-3">
                    <div class="shop-item-container">
                        <img class="img-fluid" src="/media/images/shop/BRD_Hoodie_Black.png" alt="">
                        <hr>
                        <div class="shop-details-container">
                            <a><span class="shop-product-title">BRD Premium Hoodie</span></a>
                            <div class="shop-product-rating">
                                <span>Rating: </span>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <a><span class="shop-product-price">£39.99</span></a>
                        </div>

                    </div>
                </div> -->


            </div>
        </div>
    </div>

    <!-- Footer -->
    <? include('footer.php'); ?>
    <!-- Footer -->
</body>
<script src="/scripts/jquery.3.4.1.js"></script>
<!-- <script src="/scripts/product_page.js"></script> -->
</html>