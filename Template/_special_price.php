<?php 
 require_once('./functions.php');

$product_shuffle = $product->getData('product');
shuffle($product_shuffle);

$brand = array_map(function($pro){return $pro['item_brand'];},$product_shuffle);
// print_r($brand);
$unique =  array_unique($brand); 
//   print_r($unique);

     sort($unique);
?>


<section id="special-price">
            <div class="container">
            <h4 class="font-rubik font-size-20">Special Price</h4>
            <div id="filters" class="button-group text-right font-baloo font-size-16">
                <button class="btn is-checked" data-filter="*">All brands</button>
                <?php
                    array_map(function($brand){
                        printf('<button class="btn" data-filter=".%s">%s</button>',$brand,$brand);
                    },$unique)
                ?>
                
            </div>

            <div class="grid">
                <?php
                array_map(function($item){

                
                ?>
                <div class="grid-item <?php echo $item['item_brand']?> border">
                <div class="item py-2" style="width: 200px;">
                <div class="product font-rale">
                    <a href="<?php printf('%s?item_id=%s','products.php',$item['item_id']) ?>"><img src="<?php echo $item['item_image']?> " alt="product1" class="img-fluid"></a>
                    <div class="text-center">
                    <h6><?php echo $item['item_name']?> </h6>
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                        <span><?php echo $item['item_price']?> </span>
                    </div>
                    <button type="submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </div>
                </div>
                </div>
                </div>
                <?php } ,$product_shuffle) ?>
               
            </div>
            </div>
        </section>