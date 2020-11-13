          <!-- Shopping cart section  -->

          <?php
               require_once('functions.php');

               if(isset($_POST['delete_wishlist']))
               {
                   $deletedRecord = $cart->deleteWishlist($_POST['item_id']);
               }
               if(isset($_POST['add_cart']))
               {
                   $cart->addFromWishlist($item_id = $_POST['item_id']);
               }
        
          ?>
          <section id="cart" class="py-3">
                    <div class="container-fluid w-75">
                        <h5 class="font-baloo font-size-20">Wish List</h5>
                         <?php
                               
                               
                                foreach($product->getData($table = 'wishlist') as $item):
                                    $cart1 = $product->getProduct($item['item_id']);
                                    $subtotal[] = array_map(function($item){
                                        ?>
                        <!--  shopping cart items   -->
                            <div class="row">
                                <div class="col-sm-9">
                                    <!-- cart item -->
                                        <div class="row border-top py-3 mt-3">
                                            <div class="col-sm-2">
                                                <img src="<?php echo $item['item_image'] ?>" style="height: 120px;" alt="cart1" class="img-fluid">
                                            </div>
                                            <div class="col-sm-8">
                                                <h5 class="font-baloo font-size-20"><?php echo $item['item_name'] ?></h5>
                                                <small>by <?php echo $item['item_brand'] ?></small>
                                                <!-- product rating -->
                                                <div class="d-flex">
                                                    <div class="rating text-warning font-size-12">
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="far fa-star"></i></span>
                                                      </div>
                                                      <a href="#" class="px-2 font-rale font-size-14">20,534 ratings</a>
                                                </div>
                                                <!--  !product rating-->

                                                <!-- product qty -->
                                                    <div class="qty d-flex pt-2">
                                                      
                                                      
                                                        <form method = 'POST'>
                                                            <input type="hidden" name="item_id" value = "<?php echo $item['item_id'] ?? 0?>" >
                                                        <button type="submit" name="delete_wishlist" class="btn font-baloo text-danger px-3 border-right">Delete</button>

                                                        </form>
                                                        <form method = 'POST'>
                                                            <input type="hidden" name="item_id" value = "<?php echo $item['item_id'] ?? 0?>" >
                                                        <button type="submit" name="add_cart" class="btn font-baloo text-danger px-3 border-right">Add To Cart</button>

                                                        </form>
     
                                                        
                                                       
                                                    </div>
                                                <!-- !product qty -->

                                            </div>

                                            <div class="col-sm-2 text-right">
                                                <div class="font-size-20 text-danger font-baloo">
                                                    $<span class="product_price"><?php echo $item['item_price'] ?></span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                    // end of foreach
                                    return $item['item_price'];
                                    
                                    },$cart1);
                                 
                                    endforeach;
                                    
                                ?>
                                    <!-- !cart item -->
                                 
                              
                                </div>
                         
                            </div>
                     
                    </div>
                </section>
            <!-- !Shopping cart section  -->