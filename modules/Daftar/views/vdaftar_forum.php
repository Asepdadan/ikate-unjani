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
    <link href="<?php echo base_url()?>assets/css/datepicker.css" rel="stylesheet">

       

</head><!--/head-->

<body class="homepage">

    <?php echo Modules::run('Template/header');?>


    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Our Skill -->
                    <div class="row">
                        <div class="features" style="margin-top: 100px;">
                            <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <div class="feature-wrap">
                                    <i class="fa fa-bullhorn"></i>
                                    <h2>INFO LOWONGAN KERJA</h2>
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                                </div>
                            </div><!--/.col-md-4-->

                            <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <div class="feature-wrap">
                                    <i class="fa fa-suitcase"></i>
                                    <h2>KARIR</h2>
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                                </div>
                            </div><!--/.col-md-4-->

                            <div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
                                <div class="feature-wrap">
                                    <i class="fa fa-heart"></i>
                                    <h2>REUNI ONLINE</h2>
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit</h3>
                                </div>
                            </div><!--/.col-md-4-->
                        </div><!--/.services-->
                    </div><!--/.row--> 

                    <br>
                    <br>
                    <br>
                    <br>
                    <hr>

                    <div class="row">
                        
                        <div class="row sub_content">
                    <div class="col-lg-6 col-sm-6">
                        <div class="dividerHeading">
                            <h4><span>Login</span></h4>
                        </div>
                        
                        <div class='row'>
                        <form method="POST" action="http://ikate-unjani.org/masuk" accept-charset="UTF-8"><input name="_token" type="hidden" value="NWkKOrg3Xn5XBZVVcNbBSiitF3MmL6UmEqoixVx6">   
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-user'></i></span>
                                    <input type='text' class='form-control' placeholder='Nama Pengguna' aria-describedby='sizing-addon1' name='usernamel' value="">
                                </div>
                                <br>
                                 
                             </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-lock'></i></span>
                                    <input type='password' class='form-control' placeholder='Kata Sandi' name='passwordl' aria-describedby='sizing-addon1'>
                                </div>
                                <br>
                            </div>
                        </div>
                        <br>
                        <div class='row'>
                            <div class='col-sm-12'>
                            <input type='submit' class="btn btn-md btn-default" value='Login'>
                                &nbsp;&nbsp;&nbsp;
                            <a href="http://ikate-unjani.org/forgot_password" class="link ">Lupa Password?</a>
                            </div>
                        </div>
                        </form>
                    </div>
                    
                    <div class="col-lg-6 col-sm-6">
                        <div class="dividerHeading">
                            <h4><span>Register</span></h4>
                        </div>
                        <div class='row'>
                                                     </div>
                        <div class='row'>
                        <?php echo form_open('daftar/simpan',array('class' => 'form-horizontal'))?>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-user'></i></span>
                                    <input type='text' class='form-control' placeholder='Nama Pengguna' name='username' aria-describedby='sizing-addon1'  value="<?php echo set_value('username'); ?>">
                                </div>
                                <?php if(form_error('username')){ ?>
                                <div class="alert alert-danger">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                     <?php echo form_error('username'); ?>
                                </div>
                                <?php } ?>
                             </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'>NIM</span>
                                    <input type='text' class='form-control' placeholder='Nomor Induk Mahasiswa' name='nim' aria-describedby='sizing-addon1'  value="<?php echo set_value('nim'); ?>">
                                </div>
                                <br>
                                                             </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-pencil'></i></span>
                                    <input type='text' class='form-control' placeholder='Nama' name='nama' aria-describedby='sizing-addon1'  value="<?php echo set_value('nama'); ?>">
                                </div>
                                <br>
                                                                 </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-envelope'></i></span>
                                    <input type='text' class='form-control' placeholder='Email' name='email' aria-describedby='sizing-addon1' value="<?php echo set_value('email'); ?>">
                                </div>
                                <br>
                                                                 </div>
                        </div>

                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-phone'></i></span>
                                    <input type='text' class='form-control' placeholder='No Tlp' name='tlp' aria-describedby='sizing-addon1' value="<?php echo set_value('tlp'); ?>">
                                </div>
                                <br>
                                                                 </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-home'></i></span>
                                    <textarea class='form-control' placeholder='Alamat' name='alamat' aria-describedby='sizing-addon1'><?php echo set_value('alamat'); ?></textarea>
                                </div>
                                <br>
                                                                 </div>
                        </div>
                        <br>
                            <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-home'></i></span>
                                    <textarea class='form-control' placeholder='Alamat Kantor' name='alamatkantor' aria-describedby='sizing-addon1'><?php echo set_value('alamatkantor'); ?></textarea>
                                </div>
                                <br>
                                                                 </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-map-marker'></i></span>
                                    <input type='text' class='form-control' placeholder='Tempat Lahir' aria-describedby='sizing-addon1' name='tempat_lahir'  value="<?php echo set_value('tempat_lahir'); ?>">
                                </div>
                                <br>
                                                             </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-calendar'></i></span>
                                    <input type='text' class='form-control' placeholder='Tanggal Lahir' aria-describedby='sizing-addon1' name='tanggal_lahir' id='datepicker_tl' value="<?php echo set_value('tanggal_lahir'); ?>">
                                </div>
                                <br>
                                                                 </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-6">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><input type='radio' value='L' id='l' aria-label='laki-laki' name='jenis_kelamin' ></span>
                                    <label for='l' class='btn btn-default col-sm-12'>Laki-laki</label>
                                </div>
                             </div>
                             <div class="col-sm-6">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><input type='radio' value='P' id='p' aria-label='perempuan' name='jenis_kelamin' ></span>
                                    <label for='p' class='btn btn-default col-sm-12'>Perempuan</label>
                                </div>
                             </div>
                        </div>
                        
                             <br>
                                                    <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-tag'></i></span>
                                    <select class='form-control col-sm-12' name='prodi' value="<?php echo set_value('prodi'); ?>">
                                        <option value='S1'  >S1</option>
                                        <option value='D3' >D3</option>
                                        <option value='S1 - Ekstensi' >S1 - Ekstensi</option>
                                        <option value='D3 - Ekstensi' >D3 - Ekstensi</option>
                                        <option value='Non Gelar' >Non Gelar</option>
                                    </select>
                                </div>
                                <br>
                                                             </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'>Y</i></span>
                                   <select class='form-control col-sm-12' id='tahun_angkatan' value="<?php echo set_value('tahun_angkatan'); ?>">
                                        <option disabled selected>Silahkan Pilih tahun Angkatan</option>
                                    <?php for($i = 1974; $i <= date("Y") - 1;  $i++){?>
                                        <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                    <?php } ?>
                                    </select>
                                </div>
                                <br>
                                                                 </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-camera'></i></span>
                                    <input type='file' class='form-control' placeholder='Foto' accept='image/*' aria-describedby='sizing-addon1' name='foto' value="<?php echo set_value('foto'); ?>">
                                </div>
                                <br>
                                                                 </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-lock'></i></span>
                                    <input type='password' class='form-control' placeholder='Kata Sandi' name='password' aria-describedby='sizing-addon1' >
                                </div>
                                <br>
                                                                 </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                                <div class='input-group'>
                                    <span class='input-group-addon' id='sizing-addon1'><i class='glyphicon glyphicon-lock'></i></span>
                                    <input type='password' class='form-control' placeholder='Ulangi Kata Sandi' aria-describedby='sizing-addon1' name='repassword'>
                                </div>
                                <br>
                                                                 </div>
                        </div>
                        <br>
                        <div class='row'>
                             <div class="col-sm-12">
                               <input type='submit' class="btn btn-md btn-primary" value='Register'>
                               <input type='reset' class="btn btn-md btn-primary" value='Reset' title="untuk clear semua inputan">
                             </div>
                        </div>
                        <br>
                    </div>
                    </form>
                </div>
                    </div>


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
    <script src="<?php echo base_url()?>assets/js/bootstrap-datepicker.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('#datepicker_tl').datepicker()
    });
        
    </script>
</body>
</html>