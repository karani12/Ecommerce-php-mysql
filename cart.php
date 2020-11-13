<?php
    //  include header.php
    include('header.php');
?>
<?php
ob_start();

  include('./Template/_cart.php');


  include('./Template/wishlist.php');
?>



      <!-- New Phones -->
      <?php  
            include('./Template/_new_phones.php');
        ?>

        
   


<?php
    //  include header.php
    include('footer.php');
?> 