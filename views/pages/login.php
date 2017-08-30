<!DOCTYPE html>
<html lang="en">
<head>
  

  <title>e-musrenbang</title>

  <!-- Bootstrap core CSS -->
  <link href="home/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/dist/css/theme.css" rel="stylesheet">
  <link href="home/dist/css/bootstrap-reset.css" rel="stylesheet">
  <!--external css-->
  <link href="home/dist/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/flexslider.css"/>
  <link href="home/dist/assets/bxslider/jquery.bxslider.css" rel="stylesheet" />
  <link rel="stylesheet" href="css/animate.css">
  <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>


  <!-- Custom styles for this template -->
  <link href="home/dist/css/style.css" rel="stylesheet">
  <link href="home/dist/css/style-responsive.css" rel="stylesheet" />

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
    </head>

    <body>
      <!--header start-->
      <header class="head-section">
        <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
            <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
            type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
            <span class="icon-bar"></span></button> <a class="navbar-brand" href="index.html">
            <img src="home/dist/img/logoHeader.png">
          </a>
        </div>

        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li>
              <a href="index.php">Home </a>
            </li>


            <li>
              <a href="?controller=login&action=login">Login</a>
            </li>
            <li><input class="form-control search" placeholder=" Search" type="text"></li>
          </ul>
        </div>
      </div>
    </header>
    <!--header end-->

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>Login</h1>
          </div>


        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="login-bg">
      <div class="container">
        <div class="form-wrapper">
          <form class="form-signin wow fadeInUp" role="form" method="GET">
            <input type="hidden" name="controller" value="login">
            <input type="hidden" name="action" value="authentication">

            <h2 class="form-signin-heading">ACCOUNT LOGIN</h2>
            <div class="login-wrap">

              <fieldset>

               <div class="form-group">
                <input class="form-control" placeholder="Username" name="username" type="text" 
                value="<?=isset($_GET["username"]) ? $_GET["username"] : NULL?>" required autofocus>
              </div>
              <div class="form-group">
                <input class="form-control" placeholder="Password" name="password" type="password" 
                value="<?=isset($_GET["password"]) ? $_GET["password"] : NULL?>" required>
              </div>


              <label class="checkbox">
                <input type="checkbox" value="remember-me"> Remember me
                <span class="pull-right">
                  <a href="#"> Forgot Password?</a>

                </span>
              </label>
              <i><b><?php echo $error ?></b></i>
              <button class="btn btn-lg btn-login btn-block" type="submit">LOGIN</button>


            </div>


          </fieldset>
        </form>
      </div>
    </div>
  </div>
  <!--container end-->


  <!-- footer end -->
  <!--small footer start -->
  <footer class="footer-small">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-sm-6 pull-right">
          <ul class="social-link-footer list-unstyled">
            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-dribbble"></i></a></li>
            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i class="fa fa-skype"></i></a></li>
            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i class="fa fa-github"></i></a></li>
            <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>
          </ul>
        </div>
        <div class="col-md-4">
          <div class="copyright">
            <p>&copy; Copyright - One Step GO-PIMNAS 2017</p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--small footer end-->

  <!-- js placed at the end of the document so the pages load faster -->
  <script src="home/dist/js/jquery.js"></script>
  <script src="home/dist/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="home/dist/js/hover-dropdown.js"></script>
  <script defer src="home/dist/js/jquery.flexslider.js"></script>
  <script type="text/javascript" src="home/dist/assets/bxslider/jquery.bxslider.js"></script>

  <script src="home/dist/js/jquery.easing.min.js"></script>
  <script src="home/dist/js/link-hover.js"></script>


  <!--common script for all pages-->
  <script src="home/dist/js/common-scripts.js"></script>


  <script src="home/dist/js/wow.min.js"></script>
  <script>
    wow = new WOW(
    {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
          )
    wow.init();
  </script>

</body>
</html>
