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
    <!--header start-->


    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top">
          <div class="navbar-header">

             <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse"
             type="button"><span class="icon-bar"></span> <span class="icon-bar"></span>
             <span class="icon-bar"></span></button>
             
             <a class="navbar-brand" href="?controller=home&action=homeKelurahan">
                <img src="home/dist/img/logoHeader.png">
            </a>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li>
                <a href="?controller=home&action=homeKelurahan"><i class="fa fa-home fa-fw"></i> Dashboard</a>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                "dropdown" data-toggle="dropdown" href="#"> <i class="fa fa-bar-chart-o fa-fw"></i>
                Potensi Wilayah 
                <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="?controller=pariwisata&action=pariwisataKelurahan">Pariwisata</a>
                    </li>
                    <li>
                        <a href="?controller=perdagangan&action=perdaganganKelurahan">Perdagangan</a>
                    </li>
                    <li>
                        <a href="?controller=industri&action=industriKelurahan">Industri</a>
                    </li>
                </ul>
            </li>



            <li class="dropdown">
              <a href="?controller=kamus&action=kamusUsulanKelurahan">
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
                        <a href="?controller=usulan&action=usulanKelurahan">Daftar usulan</a>
                    </li>
                    <li>
                        <a href="?controller=usulan&action=inputUsulanKelurahan">Input usulan</a>
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
                <h1 class="page-header">Input usulan</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->

        <form role="form">
                    <input class="hidden" name="controller" value="usulan"></input>
                    <input class="hidden" name="action" value="addDataUsulanKelurahan"></input>
                    <input class="hidden"  name="kelurahan"  value="<?php echo $_SESSION['login_user'];?>"></input>

        <div class="form-group">
            <label>Kelurahan</label>
            <input class="form-control" value=" <?php echo $_SESSION['login_user'];?> " disabled>
        </div>

        <div class="form-group">
            <label>Usulan</label>
            <input class="form-control" name="usulan" placeholder="Usulan">
        </div>
        <div class="form-group">
            <label>Lokasi</label>
            <input class="form-control" name="lokasi" placeholder="lokasi">
        </div>

        <div class="form-group">
            <label>Kategori</label>
            <select class="form-control" name="kategori">
                <option>Pariwisata</option>
                <option>Perdagangan</option>
                <option>Industri</option>
            </select>
        </div>
            <div class="form-group">
            <label>Keterangan</label>
            <input class="form-control" name="keterangan" placeholder="keterangan">
        </div>


        <div class="row">

            <div class="col-lg-4">
                <button type="submit" class="btn btn-success btn-block">Simpan</button>
            </div>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <div class="col-lg-4" >

                <a href="?controller=usulan&action=usulanKelurahan" name ="batal" class="btn btn-danger btn-block">Batal</a>

            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
        <!-- /#page-wrapper -->
        </form>

    </div>
    <!-- /#wrapper -->


</body>

</html>
