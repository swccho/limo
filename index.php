<!DOCTYPE html>
<html lang="en">
<head>
    
<!-- =================== -->
<!-- Site Head Section -->
<!-- =================== -->

    <?php include 'shared/head.php'; ?>

<!-- =================== -->

</head>
<body>

    <!-- ================= -->
        <!-- Preloader -->
    <!-- ================= -->
        <?php 
        
            @include 'shared/preloader.php'
        
        ?>
    <!-- ================= -->

            

    <!-- ================= -->
        <!-- Top Nav -->
    <!-- ================= -->
    <?php
    
        @include 'shared/wasp.php'

    ?>
    <!-- ================= -->

    <!-- ================= -->
        <!-- Main Nav -->
    <!-- ================= -->
    <?php
    
        @include 'shared/main_nav.php'

    ?>
    <!-- ================= -->

    <!-- ================= -->
        <!-- Header -->
    <!-- ================= -->
    <?php
    
        @include 'shared/header.php'

    ?>
    <!-- ================= -->
    
    <!-- ================= -->
        <!-- SlideBottom -->
    <!-- ================= -->
    <?php
    
        @include 'shared/slidebottom.php'

    ?>
    <!-- ================= -->
    
    <!-- ================= -->
        <!-- Services -->
    <!-- ================= -->
    <?php
    
        @include 'shared/services.php'

    ?>
    <!-- ================= -->
    
    <!-- ================= -->
        <!-- Software -->
    <!-- ================= -->
    <?php
    
        @include 'shared/software.php'

    ?>
    <!-- ================= -->
   
    <!-- ================= -->
        <!-- Grow -->
    <!-- ================= -->
    <?php
    
        @include 'shared/grow.php'

    ?>
    <!-- ================= -->
     
    <!-- ================= -->
        <!-- REVENUE -->
    <!-- ================= -->
    <?php
    
        @include 'shared/revenue.php'

    ?>
    <!-- ================= -->       
      
    <!-- ================= -->
        <!-- Testimonials -->
    <!-- ================= -->
    <?php
    
        @include 'shared/testimonial.php'

    ?>
    <!-- ================= -->

    <!-- ================= -->
        <!-- Footer -->
    <!-- ================= -->
    <?php
    
        @include 'shared/footer.php'

    ?>
    <!-- ================= -->
        

    <script src="javascript/index.js?id=<?php echo uniqid()?>"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js"></script>
<script>
      var swiper = new Swiper('.header_swiper', {
        slidesPerView: 1,
        autoplay:true,
        loop:true,
        pagination: {
        el: '.swiper-pagination',
        clickable: true,
        
      },
    });

    $(document).ready(function(){
    $("#owl-demo").owlCarousel({
        items:1,
        loop: true,
        autoplay:true,
        autoplaySpeed: 1000,
        dots: true,
        nav: false,
        checkvisible:true
    });
    });
</script>
    
</body>
</html>