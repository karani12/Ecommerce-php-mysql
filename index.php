<?php
ob_start();
    //  include header.php
    include('header.php');
?>
<?php
    //  include header.php
    include('./Template/_banner_area.php');
    // banner area
?>


        <!-- Top Sale -->
       <?php
           include('./Template/_special_price.php');
       ?>
        <!-- !Top Sale -->

        <!-- Special Price -->
      <?php
         include('./Template/_top_sale.php');
      ?>
        <!-- !Special Price -->

        <!-- Banner Ads  -->
     <?php
        include('./Template/_banner_ads.php');
     ?>
        <!-- !Banner Ads  -->

        <!-- New Phones -->
        <?php  
            include('./Template/_new_phones.php');
        ?>
        <!-- !New Phones -->

        <!-- Blogs -->
           <?php
              include('./Template/_blogs.php');
           ?>
        <!-- !Blogs -->

        <?php
    //  include header.php
    include('footer.php');
?>       