<? include "conninfo.php";

$productID = $_GET["Product"];
//echo $productID;

$path = $_SERVER['REQUEST_URI'];
$size = 1;
$colour = 1;

//product name, product desc, product price, product colourS, product sizeS, product ImageS

//$retrieve = "SELECT * FROM product_object WHERE productID LIKE 'BRD_001'";

$retrieve = "SELECT * FROM product_object INNER JOIN product ON product_object.productID = product.productID INNER JOIN product_size ON product_object.sizeID = product_size.sizeID INNER JOIN  product_colour ON product_object.colourID = product_colour.colourID WHERE product_size.sizeID LIKE $size AND product_colour.colourID LIKE $colour";
// echo $retrieve;
$result = mysqli_query($link, $retrieve);

$data = array();
// echo $data;
while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}

foreach ($data as $r) {
    $productName = $r['productTitle'];
    $productStock = $r['stock'];
    $productPrice = $r['productPrice'];
    $productDesc = $r['productDesc'];
    $productImg = $r['productImg'];
}

?>
<div class="row">
    <div class="col-sm-12 col-md-6 col-lg-5">
        <img class="product-image" src="<? echo $productImg ?>" alt="">
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
                    <h2 class="product-top-price"> £<? echo $productPrice; ?> </h2>
                </div>
            </div>
        </div>
        <hr>

        <div class="product-colour">
            <h4>Colours</h4>
            <div id="colour-change">
                <label>Black<input class="product-colour" type="button" name="black" style="background-color: black;" href="/root/product.php?Product=brd_001&colour=4" autofocus></label>
                <label>White<input class="product-colour" type="button" name="white" style="background-color: white;"></label>
                <label>Grey<input class="product-colour" type="button" name="red" style="background-color: grey;"></label>
                <label>Red<input class="product-colour" type="button" name="grey" style="background-color: red;"></label>
            </div>
        </div>
        <div class="product-size">
            <h4>Sizes</h4>
            <input class="product-size" type="button" name="XS" value="XS" >
            <input class="product-size" type="button" name="S" value="S">
            <input class="product-size" type="button" name="M" value="M" href="<? echo $path; ?>&size=3">
            <input class="product-size" type="button" name="L" value="L">
            <input class="product-size" type="button" name="XL" value="XL">
        </div>
        <div class="product-desc">
            <h4>Description</h4>
            <p><? echo $productDesc ?></p>
        </div>
    </div>
</div>