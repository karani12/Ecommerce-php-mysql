<?php
     require_once('./functions.php');
     if($_SERVER['REQUEST_METHOD'] == "POST")
     {
         if(isset($_POST['top_sale_submit'])){
              //  CALL METHOD ADD TO CART

            $cart->addToCart($_POST['user_id'] , $_POST['item_id']);

         }
       
       
     }
     $products = $product->getData('product');
      shuffle($product_shuffle);

     
        ?>
       
            <section id="top-sale">
                <div class="container py-5">
                <h4 class="font-rubik font-size-20">Top Sale</h4>
                <hr>
                <!-- owl carousel -->
                    <div class="owl-carousel owl-theme">
                        <?php
                    foreach ($products as $products) {
              foreach ($products as $key => $value) {}
                // echo $products['item_price'];
            
             ?>
              
               
                    <div class="item py-2">
                        <div class="product font-rale">
                        <a href="<?php printf('%s?item_id=%s','products.php',$products['item_id']) ?>"><img src="<?php echo $products['item_image']?>" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6><?php echo $products['item_name']?></h6>
                            <div class="rating text-warning font-size-12">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                            <span><?php echo $products['item_price']?></span>
                            </div>
                            <form method="POST">
                                <input type="hidden" name="item_id" value="<?php echo $products['item_id'] ?? '0' ?>">
                                <input type="hidden" name="user_id" value="<?php echo 3; ?>">
                                <?php
                                if(in_array($products['item_id'],$cart->getCartId($product->getData($table = 'cart'))?? []))
                                {
                                   echo' <button  type="submit" disabled class="btn btn-success font-size-12">In Cart</button>';
                                }else{
                                   echo '<button  type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>';

                                }

                                ?>
                                
                            </form>
                        </div>
                        </div>
                    </div>
              <?php } ?>
            </section>
         
         
  
    
      
   



                      