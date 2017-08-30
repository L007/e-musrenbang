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
             
             <a class="navbar-brand" href="?controller=home&action=homePariwisata">
                <img src="home/dist/img/logoHeader.png">
            </a>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li>
                <a href="?controller=home&action=homePariwisata"><i class="fa fa-home fa-fw"></i> Dashboard</a>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                "dropdown" data-toggle="dropdown" href="#"> <i class="fa fa-bar-chart-o fa-fw"></i>
                Potensi Wilayah 
                <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="?controller=pariwisata&action=pariwisataDinas">Pariwisata</a>
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
                        <a href="?controller=usulan&action=usulanDinasPariwisata">Daftar usulan</a>
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
            <h1 class="page-header">Scoring Potensi Pariwisata</h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="row">
            <td>
                <div class="col-lg-2"></div>
            </td>
            <td>
                <div class="col-lg-8">
                    <form role="form">
                        <!-- <div class="col-lg-6"> -->
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Pariwisata
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                <div class="form-group">
                                    <?php foreach ($posts as $post) { ?>
                                    <input class="hidden" name="controller" value="pariwisata"></input>
                                    <input class="hidden" name="action" value="editData"></input>

                                    <input class="hidden" name="idKelurahan" value=" <?php echo $post->idKelurahan; ?>"></input>

                                    <div class="form-group">
                                        <label>id Kelurahan</label>
                                        <input class="form-control" value="<?php  echo $post->idKelurahan; ?>"  disabled>
                                    </div>

                                    <div class="form-group">
                                        <label>Kelurahan</label>
                                        <input class="form-control" value="<?php  echo $post->kelurahan; ?>"  disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>nilai KS (Ketersediaan sumber daya dan daya tarik wisata)</label>
                                        <select class="form-control" name="nilaiKS">

                                            <?php
                                            for ($i=1; $i <10 ; $i++) {?>
                                            <option> 
                                                <?php echo $i; ?>
                                            </option>
                                            <?php }

                                            ?>
                                        </select> 
                                    </div>
                                    <div class="form-group">
                                        <label>nilai FP (Fasilitas pariwisata dan fasilitas umum)</label>
                                        <select class="form-control" name="nilaiFP">

                                            <?php
                                            for ($i=1; $i <10 ; $i++) {?>
                                            <option> 
                                                <?php echo $i; ?>
                                            </option>
                                            <?php }

                                            ?>
                                        </select> 
                                    </div>
                                    <div class="form-group">
                                        <label>nilai AS (Aksesbilitas)</label>
                                        <select class="form-control" name="nilaiAS">

                                            <?php
                                            for ($i=1; $i <10 ; $i++) {?>
                                            <option> 
                                                <?php echo $i; ?>
                                            </option>
                                            <?php }

                                            ?>
                                        </select> 
                                    </div>
                                    <div class="form-group">
                                        <label>nilai KK (Kesiapan dan Keterlibatan masyarakat)</label>
                                        <select class="form-control" name="nilaiKK">

                                            <?php
                                            for ($i=1; $i <10 ; $i++) {?>
                                            <option> 
                                                <?php echo $i; ?>
                                            </option>
                                            <?php }

                                            ?>
                                        </select> 
                                    </div>
                                    <div class="form-group">
                                        <label>nilai PP (Potensi Pasar)</label>
                                        <select class="form-control" name="nilaiPP">

                                            <?php
                                            for ($i=1; $i <10 ; $i++) {?>
                                            <option> 
                                                <?php echo $i; ?>
                                            </option>
                                            <?php }

                                            ?>
                                        </select> 
                                    </div>
                                    <div class="form-group">
                                        <label>nilai PS (Posisi strategis pariwisata dalam pembangunan daerah)</label>
                                        <select class="form-control" name="nilaiPS">

                                            <?php
                                            for ($i=1; $i <10 ; $i++) {?>
                                            <option> 
                                                <?php echo $i; ?>
                                            </option>
                                            <?php }

                                            ?>
                                        </select> 
                                    </div>
                                    <div class="row">

                                        <div class="col-lg-4">
                                            <button type="submit" class="btn btn-success btn-block">Simpan</button>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-lg-4" >

                                            <a href="?controller=pariwisata&action=pariwisataDinas" name ="batal" class="btn btn-danger btn-block">Batal</a>
                                        </div>

                                          <!--   <button class="btn btn-danger btn-block">Batal
                                           <a href="?controller=pariwisata&action=pariwisataDinas"></a>
                                       </button> -->
                                   </div>

                               </div>
                           </div>
                       </div>
                       <?php } ?>
                   </form>
               </div>
           </td>
       </div>
   </div>
</div>

</body>

</html>
