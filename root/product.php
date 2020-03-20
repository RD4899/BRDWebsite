<!DOCTYPE html>
<html lang="en">

<head>
    <? include('header.php'); ?>
    <!-- <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <title>Shop</title>
</head>

<body>
    <!-- Header -->
    <? $currentPage = "";
    include('nav.php');
    include('conninfo.php'); ?>
    <!-- Header -->

    <div class="container-fluid">
        <div class="product-container">
            <div class="row">
                <? include('display_product.php'); ?>
            </div>

            <!-- <div class="row">
                
                <div class="col-sm-12 col-md-6 col-lg-5">
                    <img class="product-image" src="<? echo $productImg; ?>" alt="">
                </div>

                <div class="col-sm-12 col-md-6 col-lg-7">
                    <div class="row">
                        <div class="col-sm-8 col-md-8 col-lg-7">
                            <div style="margin-top: 2%;">
                                <h2 class="product-title"> <? echo $productName; ?></h2>
                                <div class="product-rating">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-o"></i>
                                </div>
                                <div class="product-stock">
                                    <h5><? echo $productStock; ?> left in stock!</h5>
                                </div>
                            </div>
                        </div>
                        <div class="col-4 col-md-4 col-lg-5">
                            <div style="margin-top: 2%;">
                                <h2 class="product-top-price"> £<? echo $productPrice ?> </h2>
                            </div>
                        </div>
                    </div>
                    <hr>

                    <div class="product-colour">
                        <h4>Colours</h4>
                        <label>Black<input class="product-colour" type="button" style="background-color: black;"></label>
                        <label>White<input class="product-colour" type="button" style="background-color: white;"></label>
                        <label>Grey<input class="product-colour" type="button" style="background-color: grey;"></label>
                        <label>Red<input class="product-colour" type="button" style="background-color: red;"></label>
                    </div>
                    <div class="product-size">
                        <h4>Sizes</h4>
                        <input class="product-size" type="button" value="XS">
                        <input class="product-size" type="button" value="S">
                        <input class="product-size" type="button" value="M">
                        <input class="product-size" type="button" value="L">
                        <input class="product-size" type="button" value="XL">
                    </div>
                    <div class="product-desc">
                        <h4>Description</h4>
                        <p><? echo $productDesc; ?></p>
                    </div>
                </div>
            </div>  -->
        </div>
    </div>
    </div>






    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-12">
             <?
                $productTitle = $_GET["Product_ID"];
                echo '<h2 id="title">' . $productTitle . '</h2>';
                echo $productTitle;
                $retrieve = "SELECT * FROM product WHERE productTitle LIKE 'BRD Premium Hoodie'";
                $result = mysqli_query($link, $retrieve);
                $return = mysqli_fetch_row($result);
                //echo $return[];
                ?>
             
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <img src="<? echo $return[5]; ?>" alt="">
            </div>
            <div class="col-sm-12 col-md-6">
                <h3>Description</h3>
                <p><? echo $return[2]; ?></p>
            </div>
        </div>
    </div> -->

    <!-- Footer -->
    <? include('footer.php'); ?>
    <!-- Footer -->
</body>
<script src="/scripts/jquery.3.4.1.js"></script>
<script src="/scripts/product_page.js"></script>

</html>