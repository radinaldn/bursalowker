
<?php
      function cetakTanggalNow(){


    ?>
    <!-- Menampilkan date time realtime -->
    <script type="text/javascript">        
    function tampilkanwaktu(){         //fungsi ini akan dipanggil di bodyOnLoad dieksekusi tiap 1000ms = 1detik    
    var waktu = new Date();            //membuat object date berdasarkan waktu saat 
    var sh = waktu.getHours() + "";    //memunculkan nilai jam, //tambahan script + "" supaya variable sh bertipe string sehingga bisa dihitung panjangnya : sh.length    //ambil nilai menit
    var sm = waktu.getMinutes() + "";  //memunculkan nilai detik    
    var ss = waktu.getSeconds() + "";  //memunculkan jam:menit:detik dengan menambahkan angka 0 jika angkanya cuma satu digit (0-9)
    document.getElementById("clock").innerHTML = (sh.length==1?"0"+sh:sh) + ":" + (sm.length==1?"0"+sm:sm) + ":" + (ss.length==1?"0"+ss:ss);
    }
</script>
Pukul : 
<!-- /*Menampilkan Waktu*/ -->
<body onload="tampilkanwaktu();setInterval('tampilkanwaktu()', 1000);load();">        
<span id="clock"></span> 
<!-- /*Selesai Menampilkan Waktu*/
/*Menampilakan Hari*/ -->
</br>
<?php
$hari = date('l');
/*$new = date('l, F d, Y', strtotime($Today));*/
if ($hari=="Sunday") {
 echo "Minggu";
}elseif ($hari=="Monday") {
 echo "Senin";
}elseif ($hari=="Tuesday") {
 echo "Selasa";
}elseif ($hari=="Wednesday") {
 echo "Rabu";
}elseif ($hari=="Thursday") {
 echo("Kamis");
}elseif ($hari=="Friday") {
 echo "Jum'at";
}elseif ($hari=="Saturday") {
 echo "Sabtu";
}
?>,
<!-- /*Selesai Menampilkan Hari*/

/*Menampilkan Tanggal*/ -->
<?php
$tgl =date('d');
echo $tgl;
$bulan =date('F');
if ($bulan=="January") {
 echo " Januari ";
}elseif ($bulan=="February") {
 echo " Februari ";
}elseif ($bulan=="March") {
 echo " Maret ";
}elseif ($bulan=="April") {
 echo " April ";
}elseif ($bulan=="May") {
 echo " Mei ";
}elseif ($bulan=="June") {
 echo " Juni ";
}elseif ($bulan=="July") {
 echo " Juli ";
}elseif ($bulan=="August") {
 echo " Agustus ";
}elseif ($bulan=="September") {
 echo " September ";
}elseif ($bulan=="October") {
 echo " Oktober ";
}elseif ($bulan=="November") {
 echo " November ";
}elseif ($bulan=="December") {
 echo " Desember ";
}
$tahun=date('Y');
echo $tahun;
?>
<!-- /*Selesai Menampilkan Tanggal*/ -->
    <!--  -->
    <?php

  }

  function cetakWelcome(){
    $tanggal = mktime(date('m'), date("d"), date('Y'));
    // echo "Tanggal : <b> " . date("d-m-Y", $tanggal ) . "</b>";
    date_default_timezone_set("Asia/Jakarta");
    $jam = date ("H:i:s");
    // echo " | Pukul : <b> " . $jam . " " ." </b> ";
    $a = date ("H");
    if (($a>=4) && ($a<10)) {
        echo " <b>Selamat Pagi</b>";
    }else if(($a>=10) && ($a<=14)){
        echo "Selamat  Siang";
    }elseif(($a>=15) && ($a<=16)){
        echo "Selamat Sore";
    }elseif(($a>=17) && ($a<=18)){
        echo "Selamat Petang";
    }else{
        echo "<b> Selamat Malam </b>";
    }
  }
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php echo CHtml::encode(Yii::app()->name); ?></title>
    <link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/e-pemilu.png">

    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/build/css/custom.min.css" rel="stylesheet">

    <!-- Datatables -->
    <link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  </head>

<!-- Navbar punya Root =================================================================================================================================-->
<?php
  if (Yii::app()->session->get('level') == "admin" OR Yii::app()->session->get('level') == "root"){
?>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/home" class="site_title"><i class="fa fa-compass"></i> <span><?php echo CHtml::encode(Yii::app()->name); ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/admin-icon.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span><b><?php cetakWelcome(); ?><b></span>
</b></b>
                <h2><?= Yii::app()->session->get('nama'); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
              <?php if (Yii::app()->session->get('level') == "admin") { ?>
                <h3>Anda login sebagai Operator Dinas, administrator yang dapat mengelola seluruh data</h3>
              <?php } else if (Yii::app()->session->get('level') == "root") { ?>
                <h3>Anda login sebagai Administrator, yang dapat mengelola Operator Dinas</h3>
                <?php } ?> 
                  
                  <?php
                  
                  ?>
                </h3>
                <ul class="nav side-menu">
                <?php  if (Yii::app()->session->get('level') == "root") { ?>
                <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/admin/admin"><i class="fa fa-users"></i>Operator Dinas</a></li>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout"><i class="fa fa-sign-out"></i> Log Out</a></li>
                  <?php } else { ?>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/home"><i class="fa fa-home"></i>Halaman Utama</a></li>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lamaran/admin"><i class="fa fa-paperclip"></i> Lamaran</a>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lowongan/admin"><i class="fa fa-bullhorn"></i> Lowongan</a>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/jurusanPendidikan/admin"><i class="fa fa-graduation-cap"></i>Jurusan Pendidikan</a></li>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kategori/admin"><i class="fa fa-file-text"></i>Kategori</a>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/provinsi/admin"><i class="fa fa-map-marker"></i> Provinsi</a>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/kabkota/admin"><i class="fa fa-map-marker"></i> Kabupaten/Kota</a>
                  <li><a><i class="fa fa-users"></i>Pengguna <span class="fa fa-chevron-down"></span> </a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/pelamar/admin">Pelamar</a></li>
                      <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/perusahaan/admin">Perusahaan</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-newspaper-o"></i>Laporan <span class="fa fa-chevron-down"></span> </a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/pelamar/laporan">Pelamar</a></li>
                      <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/perusahaan/laporan">Perusahaan</a></li>
                      <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lamaran/laporan">Hasil Seleksi</a></li>
                    </ul>
                  </li>

                  </li>
                  <?php } ?>
                </ul>
              </div>
              <div class="menu_section">
                

              </div>

            </div>
            <!-- /sidebar menu -->
            

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/admin-icon.png" alt=""><?= Yii::app()->session->get('nama'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/WebUser/update/"> Profile</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/home/help">Help</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

               <!--  <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-red">xx
                     </span>
                  </a>

                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu"> -->



                    <?php

                      // initiate timezone
                      date_default_timezone_set('Asia/Jakarta');
                        $date = date("Y-m-d G:i:s");


                    function Myfunction ($time)
                    {
                      // $then = new DateTime($time);
                      // $now = new DateTime();
                      // $delta = $now->diff($then);

                      // $quantities = array(
                      //   'tahun' => $delta->y,
                      //   'bulan' => $delta->m,
                      //   'hari' => $delta->d,
                      //   'jam' => $delta->h,
                      //   'menit' => $delta->i,
                      //   'detik' => $delta->s);

                      // $str = '';
                      // foreach($quantities as $unit => $value) {
                      //   if($value == 0) continue;
                      //   $str .= $value . ' ' . $unit;
                      //   if($value != 1) {
                      //     $str .= '';
                      //   }
                      //   $str .=  '</br>';
                      // }
                      // $str = $str == '' ? 'a moment ' : substr($str, 0, -2);
                      // return $str;
                    }
    
                    ?>

                  
                    <!-- Date remaining -->

                    <!-- <li>
                      <a target="blank" onclick="window.open('<?php echo Yii::app()->request->baseUrl; ?>/index.php/kegiatan/')">             
                        <span class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kegiatan/" alt="Profile Image" /></span>
                        <span>
                          <span style="font-weight: bold"></span>
                          <span class="pull-right" style="font-style: italic;">
                           
                          </span>
                          yang lalu
                        </span>
                        <span class="message">
                          XXX
                        </span>
                      </a>
                    </li>
                   
                  
                    <li>
                      
                      <div class="text-center">
                        
                        <a>
                          <strong>Pemberitahuan</strong>
                          <i class="fa fa-exclamation"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>


<!-- page content -->
        <div class="right_col" role="main">
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">

                
                <div class="clearfix"></div>
                <div class="x_content">
                  <?php echo $content; ?>
                </div>
              </div>
            </div>
          </div>

          
 
          
        </div>
        <!-- /page content -->



        <!-- footer content -->
        <footer>
          <div class="pull-right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/e-pemilu.png" alt="..." style='height:40px; width:40px;'>
            Bursa Lowker - Masrial <a href="https://inkubator-tif.com">2018</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    </body>
<!--  End of navbar punya root =========================================================================================================================-->

<!--  Navbar punya Perusahaan **************************************************************************************************************************-->
<?php
  } else if (Yii::app()->session->get('level') == "perusahaan"){
?>
  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/home" class="site_title"><i class="fa fa-compass"></i> <span><?php echo CHtml::encode(Yii::app()->name); ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/e-pemilu.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span><b><?php cetakWelcome(); ?><b></span>
</b></b>
                <h2><?= Yii::app()->session->get('nama_perusahaan'); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Navigasi Perusahaan
                  <br>
                  <br>
                  <?php
                  
                  ?>
                </h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/home"><i class="fa fa-home"></i>Halaman Utama</a></li>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lowongan/perusahaanSaya/<?= Yii::app()->session->get('id_perusahaan')?>"><i class="fa fa-bullhorn"></i> Lowongan Perusahaan Saya</a></li>
                  <!-- <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lamaran/perusahaanSaya/<?= Yii::app()->session->get('id_perusahaan')?>"><i class="fa fa-paperclip"></i> Pelamar Lowongan Saya</a> -->
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/perusahaan/<?php echo Yii::app()->session->get('id_perusahaan'); ?>"><i class="fa fa-university"></i> Profil Perusahaan Saya</a></li>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout"><i class="fa fa-power-off"></i> Log out</a>

                </ul>
              </div>
              <div class="menu_section">
                

              </div>

            </div>
            <!-- /sidebar menu -->
            

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/e-pemilu.png" alt=""><?= Yii::app()->session->get('nama_perusahaan'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/perusahaan/<?= Yii::app()->session->get('id_perusahaan')?>"> Profile</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/home/help">Help</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <!-- <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-red">xx
                     </span>
                  </a>

                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu"> -->



                    <?php

                      // initiate timezone
                    //   date_default_timezone_set('Asia/Jakarta');
                    //     $date = date("Y-m-d G:i:s");


                    // function Myfunction ($time)
                    // {
                    //   $then = new DateTime($time);
                    //   $now = new DateTime();
                    //   $delta = $now->diff($then);

                    //   $quantities = array(
                    //     'tahun' => $delta->y,
                    //     'bulan' => $delta->m,
                    //     'hari' => $delta->d,
                    //     'jam' => $delta->h,
                    //     'menit' => $delta->i,
                    //     'detik' => $delta->s);

                    //   $str = '';
                    //   foreach($quantities as $unit => $value) {
                    //     if($value == 0) continue;
                    //     $str .= $value . ' ' . $unit;
                    //     if($value != 1) {
                    //       $str .= '';
                    //     }
                    //     $str .=  '</br>';
                    //   }
                    //   $str = $str == '' ? 'a moment ' : substr($str, 0, -2);
                    //   return $str;
                    // }
    
                    ?>

                  
                    <!-- Date remaining -->

                    <!-- <li>
                      <a target="blank" onclick="window.open('<?php echo Yii::app()->request->baseUrl; ?>/index.php/kegiatan/')">             
                        <span class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/kegiatan/" alt="Profile Image" /></span>
                        <span>
                          <span style="font-weight: bold"></span>
                          <span class="pull-right" style="font-style: italic;">
                           
                          </span>
                          yang lalu
                        </span>
                        <span class="message">
                          XXX
                        </span>
                      </a>
                    </li>
                   
                  
                    <li>
                      
                      <div class="text-center">
                        
                        <a>
                          <strong>Pemberitahuan</strong>
                          <i class="fa fa-exclamation"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li> -->
              </ul>
            </nav>
          </div>
        </div>


<!-- page content -->
        <div class="right_col" role="main">
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">

                
                <div class="clearfix"></div>
                <div class="x_content">
                  <?php echo $content; ?>
                </div>
              </div>
            </div>
          </div>

          
 
          
        </div>
        <!-- /page content -->



        <!-- footer content -->
        <footer>
          <div class="pull-right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/e-pemilu.png" alt="..." style='height:40px; width:40px;'>
            Bursa Lowker - Masrial <a href="https://inkubator-tif.com">2018</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    </body>
<!-- End of navbar pnya perusahaan **********************************************************************************************************************-->

<!-- Navbar punya pelamar ##############################################################################################################################-->
<?php
  } else if(Yii::app()->session->get('level') == "pelamar"){
    $NotifikasiLamaran = NotifikasiLamaran::model()->getByPelamar(Yii::app()->session->get('id_pelamar'));
    $CountNotifikasiLamaran = NotifikasiLamaran::model()->getCount(Yii::app()->session->get('id_pelamar'));
?>
<body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/home" class="site_title"><i class="fa fa-compass"></i> <span><?php echo CHtml::encode(Yii::app()->name); ?></span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span><b><?php cetakWelcome(); ?><b></span>
</b></b>
                <h2><?= Yii::app()->session->get('nama_lengkap'); ?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Navigasi Pelamar
                  <br>
                  <br>
                  <?php
                  
                  ?>
                </h3>
                <ul class="nav side-menu">
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/home"><i class="fa fa-home"></i>Halaman Utama</a></li>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lowongan/"><i class="fa fa-bullhorn"></i> Lowongan Terbaru</a>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lamaran/lamaranSaya"><i class="fa fa-paperclip"></i> Hasil Seleksi</a>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/pelamar/<?php echo Yii::app()->session->get('id_pelamar'); ?>"><i class="fa fa-user"></i> Profil Saya</a></li>
                  <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/lowongan/admin"><i class="fa fa-power-off"></i> Log out</a>

                </ul>
              </div>
              <div class="menu_section">
                

              </div>

            </div>
            <!-- /sidebar menu -->
            

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout" data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/user.png" alt=""><?= Yii::app()->session->get('nama_pelamar'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">

                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/pelamar/<?= Yii::app()->session->get('id_pelamar') ?>"> Profile</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/home/help">Help</a></li>
                    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php/site/logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-bell-o"></i>
                    <span class="badge bg-red">
                    Notifikasi
                      <?php
                      //unwork
                        // foreach ($CountNotifikasiLamaran as $data) {
                        //   echo $data['total_notifikasi'];
                        // }
                      ?>
                     </span>
                  </a>

                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">



                    <?php

                      // initiate timezone
                      date_default_timezone_set('Asia/Jakarta');
                        $date = date("Y-m-d G:i:s");


                    function Myfunction ($time)
                    {
                      $then = new DateTime($time);
                      $now = new DateTime();
                      $delta = $now->diff($then);

                      $quantities = array(
                        'tahun' => $delta->y,
                        'bulan' => $delta->m,
                        'hari' => $delta->d,
                        'jam' => $delta->h,
                        'menit' => $delta->i,
                        'detik' => $delta->s);

                      $str = '';
                      foreach($quantities as $unit => $value) {
                        if($value == 0) continue;
                        $str .= $value . ' ' . $unit;
                        if($value != 1) {
                          $str .= '';
                        }
                        $str .=  '</br>';
                      }
                      $str = $str == '' ? 'a moment ' : substr($str, 0, -2);
                      return $str;
                    }
    
                    ?>

                     <?php
                            foreach ($NotifikasiLamaran as $data) { 
                              $id_target = $data['id_lamaran'];
                              ?>
                            
                    <!-- Date remaining -->

                    <li>

                      <a target="blank" onclick="window.open('<?php echo Yii::app()->request->baseUrl; ?>/index.php/lamaran/<?= $id_target?>')">             
                        <span class="image"><img src="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/e-pemilu.png" alt="Profile Image" /></span> 
                        <span>
                          <span style="font-weight: bold"></span>
                          <span class="pull-right" style="font-style: italic;">
                          <?php
                              $timestr = $data['waktu'];
                              $time = Myfunction($timestr);

                              echo $time;
                            ?> 
                          </span>
                          yang lalu
                        </span>
                        <span class="message">
                         <?php
                              echo $data['nama_perusahaan'];
                              echo "<br>".$data['pekerjaan'];
                            }
                          ?>
                        </span>
                      </a>
                    </li>
                   
                  
                    <li>
                      
                      <div class="text-center">
                        
                        <a>
                          <strong>Pemberitahuan</strong>
                          <i class="fa fa-exclamation"></i>
                        </a>
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>


<!-- page content -->
        <div class="right_col" role="main">
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">

                
                <div class="clearfix"></div>
                <div class="x_content">
                  <?php echo $content; ?>
                </div>
              </div>
            </div>
          </div>

          
 
          
        </div>
        <!-- /page content -->



        <!-- footer content -->
        <footer>
          <div class="pull-right"><img src="<?php echo Yii::app()->request->baseUrl; ?>/custom/production/images/e-pemilu.png" alt="..." style='height:40px; width:40px;'>
            Bursa Lowker - Masrial <a href="https://inkubator-tif.com">2018</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>
    </body>
<?php 
  } else {
    ?>
    <body class="nav-md">
     <div class="right_col" role="main">
          <div class="clearfix"></div>

          <div class="row">
            <div class="col-md-12">
              <div class="x_panel">

                
                <div class="clearfix"></div>
                <div class="x_content">
    <?php
    echo $content;
    ?>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </body>
    <?php
  }
?>
<!-- End of navbar punya pelamar ######################################################################################################################-->



    <!-- jQuery -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/Flot/jquery.flot.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/Flot/jquery.flot.time.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/build/js/custom.min.js"></script>


		<!-- Datatables -->

	<script type="<?php echo Yii::app()->request->baseUrl; ?>/custom/dataTables.bootstrap.min.js"></script>
	<script type="<?php echo Yii::app()->request->baseUrl; ?>/custom/jquery.dataTables.min.js"></script>
	<script type="<?php echo Yii::app()->request->baseUrl; ?>/custom/jquery-1.12.4.js"></script>

    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/custom/datatables.net-scroller/js/dataTables.scroller.min.js"></script>

    
    <script>
    	$(document).ready(function() {
    $('#example').DataTable();
} );
    </script>

    <script>
      $(document).ready(function() {
    $('#example2').DataTable();
} );
    </script>

	
  
</html>