<? include "conninfo.php";

    $product = "SELECT * FROM product";

    $result=mysqli_query($link, $product);

    // $nr = mysqli_num_rows($result);
    // echo $nr;

    $data = array();
    while($row = mysqli_fetch_array($result))
    {
        $data[] = $row;
    }

    // echo json_encode($data);

    foreach ($data as $r){
            //echo '<a href="/root/product.php"> <div class="col-sm-12 col-md-4 col-lg-3"><div class="shop-item-container" id="shopitem"  name="' . $row['productTitle'] . '" > <img class="img-fluid" src="' . $row['productImg'] . '" alt=""> <hr> <div class="shop-details-container"> <a><span class="shop-product-title">' . $row['productTitle'] .'</span></a> <div class="shop-product-rating"><span style="font-weight: bold;">Rating: </span><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i></div><a><span class="shop-product-price";"> £' . $row['productPrice'] . '</span></a> </div></div></div></a>';
            $prod = $r['productID'];
            echo '<a href="/root/product.php?Product='. $prod . '">';
            echo '<div class="col-sm-12 col-md-4 col-lg-3">';
            echo '<div class="shop-item-container" id="shopitem"  name="' . $r['productTitle'] . '" >';
            echo '<img class="img-fluid" src="' . $r['productImg'] . '" alt="">';
            echo '<hr>';
            echo '<div class="shop-details-container">';
            echo '<a><span class="shop-product-title">' . $r['productTitle'] .'</span></a>';
            echo '<div class="shop-product-rating">';
            echo '<span style="font-weight: bold;">Rating: </span>';
            echo '<i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half-o"></i>';
            echo '</div>';
            echo '<a><span class="shop-product-price">£' . $r['productPrice'] . '</span></a>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '</a>';
    }
?>
