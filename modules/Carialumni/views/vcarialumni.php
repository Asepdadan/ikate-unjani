<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Berita</title>
    
    <!-- core CSS -->
    <link rel='icon' href='<?php echo base_url()?>assets/images/logo/kecil.png'>
    <link href="<?php echo base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/animate.min.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet">
    <link href="<?php echo base_url()?>assets/css/responsive.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css" rel="stylesheet">

    
       
    
</head><!--/head-->
<style type="text/css">

.carialumni{
    margin-top: 50px;
    margin-bottom: 20px;
}
span i .saring{
    float: right;
}
</style>
<script type="text/javascript">



</script>

<body class="homepage">

   <?php echo Modules::run('Template/header');?>



    <section id="content" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12 carialumni">
                    <!-- Our Skill -->   

                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <div class='input-group'>
                            <input type='text' name='kunci' class='form-control' placeholder='Cari' id='kunci'>
                            <span class='input-group-btn'><button type='submit' class='btn ' id='cari'><i class='glyphicon glyphicon-search' ></i></button></span>
                        </div>
                        <div class="panel-group accordion" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                                    <span class="accordion-icon saring">
                                       <i class="more-less glyphicon glyphicon-plus"></i>
                                     </span> Saring berdasarkan prodi
                                     
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse">
                                   <div class='panel-body'>
                                    <select class='form-control col-sm-12' id='prodi'>
                                        <option value='no'>Prodi</option>
                                        <option value='S1'>S1</option>
                                        <option value='D3'>D3</option>
                                        <option value='S1 - Ekstensi'>S1 - Ekstensi</option>
                                        <option value='D3'>D3 - Ekstensi</option>
                                    </select>
                                   </div>
                                </div>
                            </div>
                         </div>
                         <div class="panel-group accordion" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsesecond">
                                    <span class="accordion-icon saring">
                                       <i class="more-less glyphicon glyphicon-plus"></i>
                                     </span> Saring berdasarkan Angkatan
                                     
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapsesecond" class="panel-collapse collapse">
                                   <div class='panel-body'>
                                    <select class='form-control col-sm-12' id='prodi'>
                                        <option disabled selected>Silahkan Pilih tahun Angkatan</option>
                                    <?php for($i = 1974; $i <= date("Y") - 1;  $i++){?>
                                        <option value='<?php echo $i; ?>'><?php echo $i; ?></option>
                                    <?php } ?>
                                    </select>
                                   </div>
                                </div>
                            </div>
                         </div>
                         <div class="panel-group accordion" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#collapsethird">
                                    <span class="accordion-icon saring">
                                       <i class="more-less glyphicon glyphicon-plus"></i>
                                     </span> Saring berdasarkan Jenis Kelamin
                                     
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapsethird" class="panel-collapse collapse">
                                   <div class='panel-body'>
                                    <div class='row'>
                                         <div class="col-sm-6">
                                            <div class='input-group'>
                                                <span class='input-group-addon' id='sizing-addon1'>
                                                <input type='radio' value='L' id='l' name='jenis_kelamin'>
                                                </span>
                                                <label for='l' class='btn btn-default col-sm-12'>Laki-laki</label>
                                            </div>
                                         </div>
                                         <div class="col-sm-6">
                                            <div class='input-group'>
                                                <span class='input-group-addon' id='sizing-addon1'>
                                                <input type='radio' value='P' id='p'  name='jenis_kelamin'>
                                                </span>
                                                <label for='p' class='btn btn-default col-sm-12'>Perempuan</label>
                                            </div>
                                         </div>
                                    </div>

                                   </div>
                                </div>
                            </div>
                         </div>

                         <div class="panel-group accordion" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#4">
                                    <span class="accordion-icon saring">
                                       <i class="more-less glyphicon glyphicon-plus"></i>
                                     </span> Saring berdasarkan Alamat
                                     
                                        </a>
                                    </h4>
                                </div>
                                <div id="4" class="panel-collapse collapse">
                                   <div class='panel-body'>
                                    <textarea  id="alamat" class="form-control" rows="3" placeholder="isikan alamat" required="required"></textarea>
                                   </div>
                                </div>
                            </div>
                         </div>
                         <div class="panel-group accordion" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#5">
                                    <span class="accordion-icon saring">
                                       <i class="more-less glyphicon glyphicon-plus"></i>
                                     </span> Saring berdasarkan NIM
                                     
                                        </a>
                                    </h4>
                                </div>
                                <div id="5" class="panel-collapse collapse">
                                   <div class='panel-body'>
                                    <input type="text" id="nim" class="form-control" value="" required="required" pattern="" title="">
                                   </div>
                                </div>
                            </div>
                         </div>
                         <div class="panel-group accordion" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                <h4 class="panel-title">
                                <a data-toggle="collapse" data-parent="#accordion" href="#6">
                                    <span class="accordion-icon saring">
                                       <i class="more-less glyphicon glyphicon-plus"></i>
                                     </span> Saring berdasarkan Tempat Lahir
                                     
                                        </a>
                                    </h4>
                                </div>
                                <div id="6" class="panel-collapse collapse">
                                   <div class='panel-body'>
                                    
                                    <textarea id="tempatlahir" class="form-control" rows="3" placeholder="Tempat Lahir" required="required"></textarea>

                                   </div>
                                </div>
                            </div>
                         </div>

                    </div>

                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">

                        <div class="table-responsive">
                            <table id="example" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Angkatan</th>
                <th>Jenis Kelamin</th>
                <th>Alamat</th>
                <th>NIM</th>
                <th>Tempat Lahir</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>1994</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
            <tr>
                <td>Ashton Cox</td>
                <td>Junior Technical Author</td>
                <td>San Francisco</td>
                <td>66</td>
                <td>2009/01/12</td>
                <td>$86,000</td>
            </tr>
            <tr>
                <td>Cedric Kelly</td>
                <td>Senior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2012/03/29</td>
                <td>$433,060</td>
            </tr>
            <tr>
                <td>Airi Satou</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>33</td>
                <td>2008/11/28</td>
                <td>$162,700</td>
            </tr>
            <tr>
                <td>Brielle Williamson</td>
                <td>Integration Specialist</td>
                <td>New York</td>
                <td>61</td>
                <td>2012/12/02</td>
                <td>$372,000</td>
            </tr>
            <tr>
                <td>Herrod Chandler</td>
                <td>Sales Assistant</td>
                <td>San Francisco</td>
                <td>59</td>
                <td>2012/08/06</td>
                <td>$137,500</td>
            </tr>
            <tr>
                <td>Rhona Davidson</td>
                <td>Integration Specialist</td>
                <td>Tokyo</td>
                <td>55</td>
                <td>2010/10/14</td>
                <td>$327,900</td>
            </tr>
            <tr>
                <td>Colleen Hurst</td>
                <td>Javascript Developer</td>
                <td>San Francisco</td>
                <td>39</td>
                <td>2009/09/15</td>
                <td>$205,500</td>
            </tr>
            <tr>
                <td>Sonya Frost</td>
                <td>Software Engineer</td>
                <td>Edinburgh</td>
                <td>23</td>
                <td>2008/12/13</td>
                <td>$103,600</td>
            </tr>
            <tr>
                <td>Jena Gaines</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>30</td>
                <td>2008/12/19</td>
                <td>$90,560</td>
            </tr>
            <tr>
                <td>Quinn Flynn</td>
                <td>Support Lead</td>
                <td>Edinburgh</td>
                <td>22</td>
                <td>2013/03/03</td>
                <td>$342,000</td>
            </tr>
            <tr>
                <td>Charde Marshall</td>
                <td>Regional Director</td>
                <td>San Francisco</td>
                <td>36</td>
                <td>2008/10/16</td>
                <td>$470,600</td>
            </tr>
            <tr>
                <td>Haley Kennedy</td>
                <td>Senior Marketing Designer</td>
                <td>London</td>
                <td>43</td>
                <td>2012/12/18</td>
                <td>$313,500</td>
            </tr>
            <tr>
                <td>Tatyana Fitzpatrick</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>19</td>
                <td>2010/03/17</td>
                <td>$385,750</td>
            </tr>
            <tr>
                <td>Michael Silva</td>
                <td>Marketing Designer</td>
                <td>London</td>
                <td>66</td>
                <td>2012/11/27</td>
                <td>$198,500</td>
            </tr>
            <tr>
                <td>Paul Byrd</td>
                <td>Chief Financial Officer (CFO)</td>
                <td>New York</td>
                <td>64</td>
                <td>2010/06/09</td>
                <td>$725,000</td>
            </tr>
            <tr>
                <td>Gloria Little</td>
                <td>Systems Administrator</td>
                <td>New York</td>
                <td>59</td>
                <td>2009/04/10</td>
                <td>$237,500</td>
            </tr>
            <tr>
                <td>Bradley Greer</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>41</td>
                <td>2012/10/13</td>
                <td>$132,000</td>
            </tr>
            <tr>
                <td>Dai Rios</td>
                <td>Personnel Lead</td>
                <td>Edinburgh</td>
                <td>35</td>
                <td>2012/09/26</td>
                <td>$217,500</td>
            </tr>
            <tr>
                <td>Jenette Caldwell</td>
                <td>Development Lead</td>
                <td>New York</td>
                <td>30</td>
                <td>2011/09/03</td>
                <td>$345,000</td>
            </tr>
            <tr>
                <td>Yuri Berry</td>
                <td>Chief Marketing Officer (CMO)</td>
                <td>New York</td>
                <td>40</td>
                <td>2009/06/25</td>
                <td>$675,000</td>
            </tr>
            <tr>
                <td>Caesar Vance</td>
                <td>Pre-Sales Support</td>
                <td>New York</td>
                <td>21</td>
                <td>2011/12/12</td>
                <td>$106,450</td>
            </tr>
            <tr>
                <td>Doris Wilder</td>
                <td>Sales Assistant</td>
                <td>Sidney</td>
                <td>23</td>
                <td>2010/09/20</td>
                <td>$85,600</td>
            </tr>
            <tr>
                <td>Angelica Ramos</td>
                <td>Chief Executive Officer (CEO)</td>
                <td>London</td>
                <td>47</td>
                <td>2009/10/09</td>
                <td>$1,200,000</td>
            </tr>
            <tr>
                <td>Gavin Joyce</td>
                <td>Developer</td>
                <td>Edinburgh</td>
                <td>42</td>
                <td>2010/12/22</td>
                <td>$92,575</td>
            </tr>
            <tr>
                <td>Jennifer Chang</td>
                <td>Regional Director</td>
                <td>Singapore</td>
                <td>28</td>
                <td>2010/11/14</td>
                <td>$357,650</td>
            </tr>
            <tr>
                <td>Brenden Wagner</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>28</td>
                <td>2011/06/07</td>
                <td>$206,850</td>
            </tr>
            <tr>
                <td>Fiona Green</td>
                <td>Chief Operating Officer (COO)</td>
                <td>San Francisco</td>
                <td>48</td>
                <td>2010/03/11</td>
                <td>$850,000</td>
            </tr>
            <tr>
                <td>Shou Itou</td>
                <td>Regional Marketing</td>
                <td>Tokyo</td>
                <td>20</td>
                <td>2011/08/14</td>
                <td>$163,000</td>
            </tr>
            <tr>
                <td>Michelle House</td>
                <td>Integration Specialist</td>
                <td>Sidney</td>
                <td>37</td>
                <td>2011/06/02</td>
                <td>$95,400</td>
            </tr>
            <tr>
                <td>Suki Burks</td>
                <td>Developer</td>
                <td>London</td>
                <td>53</td>
                <td>2009/10/22</td>
                <td>$114,500</td>
            </tr>
            <tr>
                <td>Prescott Bartlett</td>
                <td>Technical Author</td>
                <td>London</td>
                <td>27</td>
                <td>2011/05/07</td>
                <td>$145,000</td>
            </tr>
            <tr>
                <td>Gavin Cortez</td>
                <td>Team Leader</td>
                <td>San Francisco</td>
                <td>22</td>
                <td>2008/10/26</td>
                <td>$235,500</td>
            </tr>
            <tr>
                <td>Martena Mccray</td>
                <td>Post-Sales support</td>
                <td>Edinburgh</td>
                <td>46</td>
                <td>2011/03/09</td>
                <td>$324,050</td>
            </tr>
            <tr>
                <td>Unity Butler</td>
                <td>Marketing Designer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/12/09</td>
                <td>$85,675</td>
            </tr>
            <tr>
                <td>Howard Hatfield</td>
                <td>Office Manager</td>
                <td>San Francisco</td>
                <td>51</td>
                <td>2008/12/16</td>
                <td>$164,500</td>
            </tr>
            <tr>
                <td>Hope Fuentes</td>
                <td>Secretary</td>
                <td>San Francisco</td>
                <td>41</td>
                <td>2010/02/12</td>
                <td>$109,850</td>
            </tr>
            <tr>
                <td>Vivian Harrell</td>
                <td>Financial Controller</td>
                <td>San Francisco</td>
                <td>62</td>
                <td>2009/02/14</td>
                <td>$452,500</td>
            </tr>
            <tr>
                <td>Timothy Mooney</td>
                <td>Office Manager</td>
                <td>London</td>
                <td>37</td>
                <td>2008/12/11</td>
                <td>$136,200</td>
            </tr>
            <tr>
                <td>Jackson Bradshaw</td>
                <td>Director</td>
                <td>New York</td>
                <td>65</td>
                <td>2008/09/26</td>
                <td>$645,750</td>
            </tr>
            <tr>
                <td>Olivia Liang</td>
                <td>Support Engineer</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2011/02/03</td>
                <td>$234,500</td>
            </tr>
            <tr>
                <td>Bruno Nash</td>
                <td>Software Engineer</td>
                <td>London</td>
                <td>38</td>
                <td>2011/05/03</td>
                <td>$163,500</td>
            </tr>
            <tr>
                <td>Sakura Yamamoto</td>
                <td>Support Engineer</td>
                <td>Tokyo</td>
                <td>37</td>
                <td>2009/08/19</td>
                <td>$139,575</td>
            </tr>
            <tr>
                <td>Thor Walton</td>
                <td>Developer</td>
                <td>New York</td>
                <td>61</td>
                <td>2013/08/11</td>
                <td>$98,540</td>
            </tr>
            <tr>
                <td>Finn Camacho</td>
                <td>Support Engineer</td>
                <td>San Francisco</td>
                <td>47</td>
                <td>2009/07/07</td>
                <td>$87,500</td>
            </tr>
            <tr>
                <td>Serge Baldwin</td>
                <td>Data Coordinator</td>
                <td>Singapore</td>
                <td>64</td>
                <td>2012/04/09</td>
                <td>$138,575</td>
            </tr>
            <tr>
                <td>Zenaida Frank</td>
                <td>Software Engineer</td>
                <td>New York</td>
                <td>63</td>
                <td>2010/01/04</td>
                <td>$125,250</td>
            </tr>
            <tr>
                <td>Zorita Serrano</td>
                <td>Software Engineer</td>
                <td>San Francisco</td>
                <td>56</td>
                <td>2012/06/01</td>
                <td>$115,000</td>
            </tr>
            <tr>
                <td>Jennifer Acosta</td>
                <td>Junior Javascript Developer</td>
                <td>Edinburgh</td>
                <td>43</td>
                <td>2013/02/01</td>
                <td>$75,650</td>
            </tr>
            <tr>
                <td>Cara Stevens</td>
                <td>Sales Assistant</td>
                <td>New York</td>
                <td>46</td>
                <td>2011/12/06</td>
                <td>$145,600</td>
            </tr>
            <tr>
                <td>Hermione Butler</td>
                <td>Regional Director</td>
                <td>London</td>
                <td>47</td>
                <td>2011/03/21</td>
                <td>$356,250</td>
            </tr>
            <tr>
                <td>Lael Greer</td>
                <td>Systems Administrator</td>
                <td>London</td>
                <td>21</td>
                <td>2009/02/27</td>
                <td>$103,500</td>
            </tr>
            <tr>
                <td>Jonas Alexander</td>
                <td>Developer</td>
                <td>San Francisco</td>
                <td>30</td>
                <td>2010/07/14</td>
                <td>$86,500</td>
            </tr>
            <tr>
                <td>Shad Decker</td>
                <td>Regional Director</td>
                <td>Edinburgh</td>
                <td>51</td>
                <td>2008/11/13</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Michael Bruce</td>
                <td>Javascript Developer</td>
                <td>Singapore</td>
                <td>29</td>
                <td>2011/06/27</td>
                <td>$183,000</td>
            </tr>
            <tr>
                <td>Donna Snider</td>
                <td>Customer Support</td>
                <td>New York</td>
                <td>27</td>
                <td>2011/01/25</td>
                <td>$112,000</td>
            </tr>
        </tbody>
    </table>
                        </div>
                        
                   
                        
                    </div>
                    
                     

                    </div> <!-- div class berita -->
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
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
    
    <script >
    $(document).ready(function() {
        $('#example').DataTable();
    } );
    function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
    </script>
</body>
</html>