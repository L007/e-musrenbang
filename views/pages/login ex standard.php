<!DOCTYPE html>
<html lang="en">

<head>

    <title>e-musrenbang</title>
    

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-lg-12">
                 <a href="#">  <h1 class="page-header" align="center">E-MUSRENBANG</h1></a>
             </div>
             <!-- /.col-lg-12 -->
         </div>
         <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" align="center ">ACCOUNT LOGIN</h3>
                </div>
                <div class="panel-body">
                    <form role="form" method="GET">
                        <input type="hidden" name="controller" value="login">
                        <input type="hidden" name="action" value="authentication">
                        <fieldset>
                            <div class="form-group">
                                <input class="form-control" placeholder="Username" name="username" type="text" 
                                value="<?=isset($_GET["username"]) ? $_GET["username"] : NULL?>" required autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="password" type="password" 
                                value="<?=isset($_GET["password"]) ? $_GET["password"] : NULL?>" required>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                </label>
                            </div>
                            <i><b><?php echo $error ?></b></i>
                            <!-- Change this to a button or input when using this as a form -->
                            <p align="right">
                               <button type="submit" class="btn btn-lg btn-danger btn-block"  value="login">Login</button></p>
                               <p align="center"> <a href="#"> Forgot Password? </a></p>
                           </fieldset>
                       </form>
                   </div>
               </div>
           </div>
       </div>
   </div>

</body>

</html>
