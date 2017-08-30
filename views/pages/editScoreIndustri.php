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
             
             <a class="navbar-brand" href="?controller=home&action=homePerdagangan">
                <img src="home/dist/img/logoHeader.png">
            </a>

        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav">

            <li>
                <a href="?controller=home&action=homePerdagangan"><i class="fa fa-home fa-fw"></i> Dashboard</a>
            </li>

            <li class="dropdown">
                <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                "dropdown" data-toggle="dropdown" href="#"> <i class="fa fa-bar-chart-o fa-fw"></i>
                Potensi Wilayah 
                <i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="?controller=perdagangan&action=perdaganganDinas">Perdagangan</a>
                    </li>
                    <li>
                        <a href="?controller=industri&action=industriDinas">Industri</a>
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
                    <a href="?controller=usulan&action=usulanDinasPerdagangan">Daftar usulan Perdagangan</a>
                </li>
                <li>
                    <a href="?controller=usulan&action=usulanDinasIndustri">Daftar usulan Industri</a>
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
                <h1 class="page-header">Scoring Potensi Industri</h1>
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
                                Industri
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                                <div class="form-group">
                                <?php foreach ($posts as $post) { ?>
                                   <input class="hidden" name="controller" value="industri"></input>
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
                                    <label>nilai JI ( Jumlah Jenis Industri Kecil / Menengah )</label>
                                    <select class="form-control" name="nilaiJI">
                                      
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
                                    <label>nilai LS (Listrik PLN)</label>
                                    <select class="form-control" name="nilaiLS">
                                      
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
                                    <label>nilai TA (Transportasi)</label>
                                    <select class="form-control" name="nilaiTA">
                                      
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
                                    <label>nilai AS (Aksesebilitas)</label>
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
                                <div class="row">
                                  
                                        <div class="col-lg-4">
                                            <button type="submit" class="btn btn-success btn-block">Simpan</button>
                                        </div>
                                        &nbsp;&nbsp;&nbsp;&nbsp;
                                        <div class="col-lg-4" >
                                            
                                                <a href="?controller=industri&action=industriDinas" name ="batal" class="btn btn-danger btn-block">Batal</a>
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
