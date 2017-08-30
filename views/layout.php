<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="home/dist/img/icon.png">

    <title>e-musrenbang</title>

   <!-- Bootstrap core CSS -->
    <link href="home/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="home/dist/css/theme.css" rel="stylesheet">
    <link href="home/dist/css/bootstrap-reset.css" rel="stylesheet">
    <!-- <link href="home/dist/css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->
    <link href="home/dist/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" href="home/dist/css/flexslider.css"/>
    <link href="home/dist/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
    <link rel="stylesheet" href="home/dist/css/animate.css">
    <link rel="stylesheet" href="home/dist/assets/owlcarousel/owl.carousel.css">
    <link rel="stylesheet" href="home/dist/assets/owlcarousel/owl.theme.css">

    <link href="home/dist/css/superfish.css" rel="stylesheet" media="screen">
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'> -->




    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="home/dist/css/component.css">
     <link href="home/dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="home/dist/css/style.css" rel="stylesheet">
    <link href="home/dist/css/style-responsive.css" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="home/dist/css/parallax-slider/parallax-slider.css" />
    <script type="text/javascript" src="home/dist/js/parallax-slider/modernizr.custom.28468.js">
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <?php require_once('routes.php') ?>


   <script src="home/dist/js/jquery-1.8.3.min.js">
    </script>
    <script src="home/dist/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="home/dist/js/hover-dropdown.js">
    </script>
    <script defer src="home/dist/js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="home/dist/assets/bxslider/jquery.bxslider.js">
    </script>

    <script type="text/javascript" src="home/dist/js/jquery.parallax-1.1.3.js">
    </script>
    <script src="home/dist/js/wow.min.js">
    </script>
    <script src="home/dist/assets/owlcarousel/owl.carousel.js">
    </script>


    <script src="home/dist/js/jquery.easing.min.js">
    </script>
    <script src="home/dist/js/link-hover.js">
    </script>
    <script src="home/dist/js/superfish.js">
    </script>
    <script type="text/javascript" src="home/dist/js/parallax-slider/jquery.cslider.js">
    </script>


    <!--common script for all pages-->
    <script src="home/dist/js/common-scripts.js">
    </script>

<!--
        <script src="home/dist/js/jquery-1.8.3.min.js">
        </script>
        <script src="home/dist/js/bootstrap.min.js">
        </script>
-->


    <script type="text/javascript">
      $(function() {

        $('#da-slider').cslider({
          autoplay    : true,
          bgincrement : 100
        });

      });
    </script>





    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });


    </script>


    <script>
      $('a.info').tooltip();

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      $(document).ready(function() {

        $("#owl-demo").owlCarousel({

          items : 4

        });

      });

      jQuery(document).ready(function(){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();


    </script>


  </body>

  </html>
