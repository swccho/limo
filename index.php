<!DOCTYPE html>
<html lang="en">
<head>
    
<!-- =================== -->
<!-- Site Head Section -->
<!-- =================== -->

    <?php include 'shared/head.php'; ?>

<!-- =================== -->

<!-- CSS -->
    <link rel="stylesheet" href="css/index.css?id=<?php echo uniqid()?>">
<!-- CSS -->

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
        
    <script src="javascript/jscomponents/preloader.js"></script>
    <script src="javascript/jscomponents/navbar.js"></script>
    <script src="javascript/index.js?id=<?php echo uniqid()?>"></script>

    <script>


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
        $(document).ready(function(){
            $(".header_carousel").owlCarousel({
                items:1,
                loop: true,
                autoplay:true,
                autoplaySpeed: 500,
                dots: true,
                nav: false,
                checkvisible:true
            });
        });
    </script>
    
</body>
</html>