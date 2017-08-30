<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>e-musrenbang</title>

</head>

<body>

 <div id="wrapper">

    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top">
          <div class="navbar-header">

             <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
             type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
             <span class="icon-bar"></span></button>
             
             <a class="navbar-brand" href="?controller=home&action=homeBupati">
                <img src="home/dist/img/logoHeader.png">
            </a>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li>
                <a href="?controller=home&action=homeBupati"><i class="fa fa-home fa-fw"></i> Dashboard</a>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                "dropdown" data-toggle="dropdown" href="#"> <i class="fa fa-bar-chart-o fa-fw"></i>
                Potensi Wilayah 
                <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="?controller=pariwisata&action=pariwisataBupati">Pariwisata</a>
                    </li>
                    <li>
                        <a href="?controller=perdagangan&action=perdaganganBupati">Perdagangan</a>
                    </li>
                    <li>
                        <a href="?controller=industri&action=industriBupati">Industri</a>
                    </li>
                </ul>
            </li>



            <li class="dropdown">
              <a href="?controller=kamus&action=kamusUsulan">
                  <i class="fa fa-file fa-fw"></i>
                  Kamus Usulan
              </a>

          </li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
            "dropdown" data-toggle="dropdown" href="#"> <i class="fa fa-bar-chart-o fa-fw"></i>
            Usulan
            <i class="fa fa-angle-down"></i></a>
            <ul class="dropdown-menu">
                <li>
                    <a href="?controller=usulan&action=usulanBupati">Daftar usulan</a>
                </li>
                
            </ul>
        </li>

          <li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                "dropdown" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"> </i>
                <?php echo $_SESSION['login_user'];?> 
            </a>
            <ul class="dropdown-menu dropdown-user">
                <!-- <li class="divider"></li> -->
                <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                </li>
            </ul>
            <!-- /.dropdown-user -->
        </li>

    </li>
</ul>
</div>
</div>
</header>
<!--header end-->

<div class="page-wrapper container" >
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Tabel Potensi Perdagangan</h1>
        </div>
        <!-- /.col-lg-12 -->

        <div class="row">
            <!-- <div class="col-lg-6"> -->
            <div class="panel panel-default">
                <div class="panel-heading">
                    Perdagangan
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>idKelurahan</th>
                                    <th>kelurahan</th>
                                    <th>nilai JU</th>
                                    <th>nilai LJ</th>
                                    <th>nilai TA</th>
                                    <th>nilai AS</th>
                                    <th>Total score</th>
                                    <th>status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($posts as $post) { ?>
                                <tr>
                                    <td><?php echo $post->idKelurahan; ?></td>
                                    <td><?php echo $post->kelurahan; ?></td>
                                    <td><?php echo $post->nilaiJU; ?></td>
                                    <td><?php echo $post->nilaiLJ; ?></td>
                                    <td><?php echo $post->nilaiTA; ?></td>
                                    <td><?php echo $post->nilaiAS; ?></td>
                                    <td><?php echo $post->totalScore; ?>%</td>
                                    <td><?php echo $post->status; ?></td>
                                    
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.table-responsive -->
                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>
        <!-- /.col-lg-6 -->

    </body>

    </html>
