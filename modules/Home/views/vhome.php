<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Halaman Rumah</title>
	
	<!-- core CSS -->
    <link rel='icon' href='images/logo/kecil.png'>
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet">
       
    <!-- <link rel="shortcut icon" href="images/ico/favicon.ico"> -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
 <style type="text/css">
    .slide-text{
    height: 300px; 
    margin-left: 40px;
    }
</style>
<body class="homepage">

    <?php echo Modules::run('Template/header');?>

    <div class="container-fluid" id="main-slider" style="margin-top: 30px; margin-left: 30px; margin-right: 30px; margin-bottom: 10px; margin-top: 120px;">
        <div class="row">

            <div class="col-xs-12 col-md-3">   
            <div class="panel panel-success" style="background-color: #FFFFFF; color: black;">
                    <div class="panel-heading" style="background-color: #029029; border-radius: 3px; color: white;">
                        <h3 class="panel-title">KETUA IKATAN ALUMNI</h3>
                    </div>
                    <div class="panel-body">

                        <img src="<?php echo base_url()?>assets/images/man1.jpg" class="img-responsive" alt="Image" width="500">

                    </div>
                </div>

            </div>
            <div class="col-xs-12 col-md-6" style="margin-bottom: 20px; ">
                <section id="main-slider" class="no-margin">

                    <div class="carousel slide">
                        <ol class="carousel-indicators">
                            <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                            <li data-target="#main-slider" data-slide-to="1"></li>
                            <li data-target="#main-slider" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner" >

                       

                            <div class="item active" style="background-image: url(<?php echo base_url()?>assets/images/slider/slider-3.jpg); height: auto; width: auto;">
                                <div class="container">
                                    <div class="row slide-margin">
                                        <div class="col-sm-6">
                                            <!-- <div class="carousel-content"> -->
                                            <div class="slide-text">
                                                <h1 class="animation animated-item-1">IKATAN ALUMNI TEKNIK ELEKTRO</h1>
                                                <h2 class="animation animated-item-2">UNIVERSITAS JENDERAL AHMAD YANI</h2>
                                                <a class="btn-slide animation animated-item-3" href="#">Daftar Sekarang</a>
                                            </div>
                                            <!-- </div> -->
                                        </div>

                                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                                            <div class="slider-img">
                                                
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div><!--/.item-->

                            <div class="item" style="background-image: url(<?php echo base_url()?>assets/images/slider/slider-2.jpg); height: auto; width: auto; ">
                                <div class="container">
                                    <div class="row slide-margin">
                                        <div class="col-sm-6 slide-text" >
                                            <!-- <div class="carousel-content"> -->
                                                <h1 class="animation animated-item-1">Saling Membantu Dalam Karir</h1>
                                                <h2 class="animation animated-item-2">Berbagi Foto Dan Kabar Berita Alumni</h2>
                                                <h2 class="animation animated-item-2">Undang Teman Ke Sebuah Acara Yang Anda Buat!</h2>
                                                
                                            <!-- </div> -->
                                        </div>

                                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                                            <div class="slider-img">
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div><!--/.item-->

                            <div class="item" style="background-image: url(<?php echo base_url()?>assets/images/slider/bg3.jpg)">
                                <div class="container">
                                    <div class="row slide-margin">
                                        <div class="col-sm-6 slide-text">
                                            <!-- <div class="carousel-content"> -->
                                                <h1 class="animation animated-item-1">BERGABUNGLAH BERSAMA KAMI
                                                <h2 class="animation animated-item-2">IKATAN ALUMNI TEKNIK ELEKTRO</h2>
                                                <a class="btn-slide animation animated-item-3" href="#">Daftar Sekarang</a>
                                            <!-- </div> -->
                                        </div>
                                        <div class="col-sm-6 hidden-xs animation animated-item-4">
                                            <div class="slider-img">
                                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--/.item-->
                        </div><!--/.carousel-inner-->
                    </div><!--/.carousel-->
                    <a class="prev hidden-xs" href="#main-slider" data-slide="prev" >
                        <i class="fa fa-chevron-left"></i>
                    </a>
                    <a class="next hidden-xs" href="#main-slider" data-slide="next">
                        <i class="fa fa-chevron-right"></i>
                    </a>


                </section><!--/#main-slider-->


            </div>
            <div class="col-xs-12 col-md-3">
               <div class="panel panel-success" style="background-color: #FFFFFF; color: black;">
                    <div class="panel-heading" style="background-color: #029029; border-radius: 3px; color: white;">
                        <h3 class="panel-title">Login Forum</h3>
                    </div>
                    <div class="panel-body">
                        
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                            <label class="col-md-2">Username</label>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <input type="text" id="username" class="form-control" required="required" placeholder="Silahkan isi username anda" title="inputan username">
                                </div>
                            </div>

                            <div class="form-group">
                            <label class="col-md-2">Password</label>
                                <div class="col-sm-8 col-sm-offset-2">
                                    <input type="password" id="password" class="form-control" required="required" placeholder="Silahkan isi password anda" title="inputan password">
                                </div>
                            </div>
                            
                    
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-4">
                                    <button type="button" id="login" class="btn btn-primary" title="tombol untuk masuk aplikasi forum">Masuk</button>
                                    <button type="reset" class="btn btn-primary">Reset</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-8 col-sm-offset-4">
                                    <a href="<?php echo base_url('daftar')?>" title="klik untuk mendaftar">Tidak punya akun / daftar</a>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <section id="feature" >
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="center wow fadeInDown">
                        <h2>Selamat Datang Dan Selamat Bergabung Di Web Ikatan Alumni Tekni Elektro Unjani</h2>
                        <p style="font-size: 18pt; line-height: 25px;">Ikatan Alumni Teknik Elektro UNJANI ini dibuat untuk mempermudah para alumni dalam memberikan informasi-informasi seputar UNJANI ataupun kabar seputar alumni Teknik Elektro UNJANI.</p>
                    </div>

                </div>

                
            </div>
        </div><!--/.container-->
    </section><!--/#feature-->

    

    <section id="middle">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-sm-8 wow fadeInDown">
                    <div class="skill">
                        <h2>Berita Terpopuler</h2>
                        <h2 style="border-bottom: 3px solid #029029; width: 250px; margin-top: -20px;"></h2>
                        
                        

                        <div class="col-md-6" style="margin-bottom: 10px;">
                            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="media">
                                    <div class="media-body">
                                        <h5><i class="fa fa-user"></i> Jhon Doe</h5>
                                        <h5><i class="fa fa-calendar"></i> 07 Desember 2016</i></h5>
                                        
                                        <ul class="social_icons" style="ba">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!--/.media -->
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom: 10px;">
                            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="media">
                                    <div class="media-body">
                                        <h4><i class="fa fa-user"></i> Asep Dadan</h4>
                                        <h5><i class="fa fa-calendar"></i> 07 Desember 2015</i></h5>
                                        
                                        <ul class="social_icons" style="ba">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!--/.media -->
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom: 10px;">
                            <div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                                <div class="media">
                                    <div class="media-body">
                                        <h4><i class="fa fa-user"></i> Fayzal</h4>
                                        <h5><i class="fa fa-calendar"></i> 07 Desember 2014</i></h5>
                                        
                                        <ul class="social_icons" style="ba">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        </ul>
                                    </div>
                                </div><!--/.media -->
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                            </div>
                        </div>

                    </div>

                </div><!--/.col-sm-6-->

                <div class="col-sm-4 wow fadeInDown">
                    <div class="accordion">
                        <h2>Berita Terbaru</h2>
                        <h2 style="border-bottom: 3px solid #029029; width: 300px; margin-top: -20px;"></h2>
                        <div class="panel-group" id="accordion1">
                          <div class="panel panel-default">
                            <div class="panel-heading active">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseOne1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>

                            <div id="collapseOne1" class="panel-collapse collapse in">
                              <div class="panel-body">
                                  <div class="media accordion-inner">
                                        <div class="pull-left">
                                            <img class="img-responsive" src="<?php echo base_url()?>assets/images/accordion1.png">
                                        </div>
                                        <div class="media-body">
                                             <h4>Adipisicing elit</h4>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore</p>
                                        </div>
                                  </div>
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseTwo1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseTwo1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseThree1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseThree1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>

                          <div class="panel panel-default">
                            <div class="panel-heading">
                              <h3 class="panel-title">
                                <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion1" href="#collapseFour1">
                                  Lorem ipsum dolor sit amet
                                  <i class="fa fa-angle-right pull-right"></i>
                                </a>
                              </h3>
                            </div>
                            <div id="collapseFour1" class="panel-collapse collapse">
                              <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor.
                              </div>
                            </div>
                          </div>
                        </div><!--/#accordion1-->
                    </div>
                </div>

            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#middle-->

    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Our Skill -->
            <div class="skill-wrap clearfix">
            
                <div class="center wow fadeInDown">
                    <h2>Pendaftar Per Angkatan</h2>
                </div>
                
                <div class="row">
                    <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
                            <div class="joomla-skill">                                   
                                <p><em>85%</em></p>
                                <p>1974</p>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="html-skill">                                  
                                <p><em>95%</em></p>
                                <p>1994</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
                            <div class="css-skill">                                    
                                <p><em>80%</em></p>
                                <p>2014</p>
                            </div>
                        </div>
                    </div>
                    
                     <div class="col-sm-3">
                        <div class="sinlge-skill wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="1200ms">
                            <div class="wp-skill">
                                <p><em>90%</em></p>
                                <p>2016</p>                                     
                            </div>
                        </div>
                    </div>
                    
                </div>
    
            </div><!--/.our-skill-->

                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#content-->


   <section id="contact-info">
        <div class="center">                
            <h2>Hubungi Kami</h2>
        </div>
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 text-center">
                        <div class="gmap">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3330.8163830471963!2d107.52574301070779!3d-6.886945179403841!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e68e4559bd023cd%3A0xb21724a94d165f8!2sUniversitas+Jenderal+Achmad+Yani!5e0!3m2!1sid!2sid!4v1481105327074" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-sm-6 map-content">
                        <ul class="row">
                            <li class="col-sm-12">
                                <address>
                                    <h5><i class="fa fa-map-marker"></i> Cimahi</h5>
                                    <p>JL. TERUSAN JENDRAL SUDIRMAN,
                                    PO BOX 148 ,
                                    <p>CIMAHI, JAWA BARAT, INDONESIA</p>
                                </address>

                                <address>
                                    <h5><i class="fa fa-map-marker"></i> Bandung</h5>
                                    <p>JL. TERUSAN JENDERAL GATOT SUBROTO,</p>
                                     PO.BOX 807 ,
                                     <p>BANDUNG, 40285 ,
                                     JAWA BARAT, INDONESIA</p>
                                </address>
                            </li>


                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>  <!--/gmap_area -->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    © Copyright 2015 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates"></a>.  Teknik Elektro UNJANI
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="<?php echo base_url()?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.prettyPhoto.js"></script>
    <script src="<?php echo base_url()?>assets/js/jquery.isotope.min.js"></script>
    <script src="<?php echo base_url()?>assets/js/main.js"></script>
    <script src="<?php echo base_url()?>assets/js/wow.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/notify/0.4.2/notify.js"></script>
    
    <script type="text/javascript">
        $(document).ready(function(){
            $("#login").click(function(){
                var username = $("#username").val();
                var password = $("#password").val();

                $.ajax({
                    url : "<?php echo base_url('home/login')?>",
                    data : "username="+username+"&password="+password,
                    type : "POST",
                    success : function(data){

                        if(data == "ok"){
                            alert("anda dapat masuk");
                        }else{
                       

                        $.notify("<?php echo $this->session->flashdata('pesan'); ?>");
                        $("#username").val("");
                        $("#password").val("");

                        }
                    }
                });

            });
        })
    </script>
</body>
</html>