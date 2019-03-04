 

 <style type="text/css">
    #gambar{
      background-image: url('assets/images/needed.jpg');
      max-width: 100%;
  height: 400px;
    }
  </style>
  <script type="text/javascript">
   
  </script>
  <?php
#  var_dump($pencarian);
  ?>
    <!-- awalan -->
    <section class="split section" id="gambar">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-6">
              <br>
                <blockquote><b>Cari Jasa Layanan Akuntansi mu DISINI !</b></blockquote>
                <?php
                if(@$status==1){
                  ?>
                   <form  action="<?=base_url('home/cari');?>" method="post" enctype="multipart/form-data">
                    <div class="col-lg-11">
                      <input type="text" name="cari" id="carr" placeholder="Cari yang anda butuhkan ?" class="form-control" style="background-color: transparent;">
                    </div>
                    <div class="col-lg-1">
                      <button class="btn btn-outline-info" style="background-color: transparent;
                      color: black"><blockquote>Cari</blockquote> </button>
                    </div>
                  </form>
                  <?php
                }elseif (@$status==2) {
                  ?>
                  <form  action="<?=site_url('member/pencarian/');?>" method="post" enctype="multipart/form-data">
                    <div class="col-lg-11">
                      <input type="text" name="cari" id="carr" placeholder="Cari yang anda butuhkan ?" class="form-control autocomplete" style="background-color: transparent;">
                    </div>
                    <div class="col-lg-1">
                      <button class="btn btn-outline-info" style="background-color: transparent;
                      color: black"><blockquote>Cari</blockquote> </button>
                    </div>
                </form>
                  <?php
                }
                ?>
               
            </div>
            <div class="col-lg-3">
            </div>
         </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- end awalan -->

    <!-- Other Services Section -->
    <section id="other-services" class="section">
      <div class="container">
      <!-- Container Starts -->
        <div class="row">
          <h1 class="section-title wow fadeInUpQuick">
            Layanan dan Keunggulan
          </h1>
         <!-- <p class="section-subcontent">At vero eos et accusamus et iusto odio dignissimos ducimus qui <br> blanditiis praesentium</p>-->
          <!-- Other Service Item Wrapper Starts -->
          <div class="col-md-6">
            <table class="table table-responsive">
                <tr>
                    <th style="background-color: rgb(63,143,160)"><b style="color: white">Layanan</b></th>
                </tr>
                <tr>
                  <td>Jurnal Keuangan</td>
                </tr>
                <tr>
                  <td>Laporan Laba Rugi</td>
                </tr>
                <tr>
                  <td>Neraca Keuangan</td>
                </tr>
                <tr>
                  <td>Laporan Keuangan Pajak non SPT</td>
                </tr>
                <tr>
                    <td>Laporan Pajak SPT Tahunan</td>
                </tr>
                <tr>
                    <Td>Perbaikan Laporan Keuangan</Td>
                </tr>
            </table>
          </div>

          <!-- Porgress Strts -->
          <div class="col-md-6">
            <table class="table table-responsive">      
              <tr>
                <th style="background-color: rgb(66,88,176)"><b style="color:white">Keunggulan<b></th>
              </tr>
              <tr>
                  <td>Biaya Lebih murah dan terjangkau</td>
              </tr>
              <tr>
                  <Td>Gratis Layanan konsultasi sesuai pesanan</Td>
              </tr>
              <tr>
                  <td>Pembayaran Aman</td>
              </tr>
              <tr>
                  <td>Dikerjakan oleh profesional dalam bidang akuntansi</td>
              </tr>
              <tr>
                  <td>Bebas memilih tenaga akuntansi yang diinginkan</td>
              </tr>
            </table>
           </div>
          <!-- Other Service Image Ends-->
        </div>
      </div><!-- Container Ends -->
    </section>
    <!-- Other Services Section End -->      
   
<style type="text/css">
  #img
  {
    width: 100%;
    height: auto;
  }
</style>

    <!-- Team Section -->
    <section id="team" class="section">
      <!-- Container Starts -->
      <div class="container">        
        <!-- Row Starts -->
        <div class="row">
					<h1 class="section-title wow fadeInDown" data-wow-delay=".5s">
	          Team Kami
	        </h1>

	        <p class="section-subcontent"> Daftar anggota CEO FOUNDER dan CO - FOUNDER <br></p>
          
          <div class="col-sm-6 col-md-4">
	          <!-- Team Item Starts -->
	        	<div class="team-item wow fadeInUpQuick" data-wow-delay="1s">
	            <figure class="team-profile">
	              <img src="assets/images/ade.png" id="img" alt="">
	              <figcaption class="our-team">
	                <div class="details">
	                	<p class="content-white">Detail informasi pengguna atau pemilik profile ini</p>
		               <div class="orange-line"></div>
		               <div class="social"> 
			               <a class="facebook" href="https://www.facebook.com/krismaulanaa"><i class="fa fa-facebook"></i></a> 
			               <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a> 
			               <a class="google-plus" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a>
		               </div>
	                </div>
		            </figcaption>
	            </figure>
	            <div class="info">
	              <h2>
	                Krismaulana Ade Surya
	              </h2>
	              <div class="orange-line"></div>
	              <p>
	                Founder And ceo
	              </p>
	            </div>
	          </div>
	          <!-- Team Item Ends -->
          </div>

           <div class="col-sm-6 col-md-4">
            <!-- Team Item Starts -->
            <div class="team-item wow fadeInUpQuick" data-wow-delay="1.4s">
             <figure class="team-profile">
                 <img src="assets/images/fitri.jpeg" id="img" alt="">
                <figcaption class="our-team">
                  <div class="details">
                    <p class="content-white"> Detail informasi pengguna atau pemilik profile ini</p>
                   <div class="orange-line"></div>
                   <div class="social"> 
                     <a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a> 
                     <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a> 
                     <a class="google-plus" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a>
                   </div>
                  </div>
                </figcaption>
              </figure>
              <div class="info">
                <h2>
                  Fitri
                </h2>
                <div class="orange-line"></div>
                <p>
                  Co - Founder
                </p>
              </div>
            </div><!-- Team Item Starts -->
          </div>

          <div class="col-sm-6 col-md-4">
          	<!-- Team Item Starts -->
            <div class="team-item wow fadeInUpQuick" data-wow-delay="1.4s">
             <figure class="team-profile">
	               <img src="assets/images/FP.jpeg" id="img" alt="">
	              <figcaption class="our-team">
	                <div class="details">
	                	<p class="content-white"> Detail informasi pengguna atau pemilik profile ini</p>
		               <div class="orange-line"></div>
		               <div class="social"> 
			               <a class="facebook" href="https://www.facebook.com/Ab.Pez"><i class="fa fa-facebook"></i></a> 
			               <a class="twitter" href="http://www.twitter.com"><i class="fa fa-twitter"></i></a> 
			               <a class="google-plus" href="http://plus.google.com"><i class="fa fa-google-plus"></i></a>
		               </div>
	                </div>
		            </figcaption>
	            </figure>
	            <div class="info">
	              <h2>
	                Abdul J
	              </h2>
	              <div class="orange-line"></div>
	              <p>
	                Programmer
	              </p>
	            </div>
            </div><!-- Team Item Starts -->
          </div>

          
          
                  
        </div><!-- Row Ends -->
      </div><!-- Container Ends -->
    </section>
    <!-- Team Section End -->
    

    
    <!-- Testimonial Section -->
    <section id="testimonial" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="row">
              <h1 class="section-title wow fadeInDown" data-wow-delay=".5s">
            Client Kami
          </h1>
          <div class="col-sm-12">
            <div id="testimonial-item" class="owl-carousel">
              <div class="item">
                <div class="testimonial-inner">
                  <div class="testimonial-images">
                    <img class="img-circle" src="assets/img/testimonial/img1.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>
                      Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                    </p>
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-quote-left"></i>
                    Steve Austin <a href="#">envato.com </a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-inner">
                  <div class="testimonial-images">
                    <img class="img-circle" src="assets/img/testimonial/img2.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>
                      Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                    </p>
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-quote-left"></i>
                    Chelsey Siltanen<a href="#">Microsoft</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-inner">
                  <div class="testimonial-images">
                    <img class="img-circle" src="assets/img/testimonial/img3.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>
                      Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                    </p>
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-quote-left"></i>
                    Pamela Fox<a href="#">Khan Academy</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-inner">
                  <div class="testimonial-images">
                    <img class="img-circle" src="assets/img/testimonial/img4.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>
                      Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                    </p>
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-quote-left"></i>
                    janna Hagan<a href="#">Google</a>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-inner">
                  <div class="testimonial-images">
                    <img class="img-circle" src="assets/img/testimonial/img5.jpg" alt="">
                  </div>
                  <div class="testimonial-content">
                    <p>
                      Quisque mollis lacus augue, a hendrerit leo tristique vitae. Mauris non ipsum molestie sagittis elit ac vulputate odio.
                    </p>
                  </div>
                  <div class="testimonial-footer">
                    <i class="fa fa-quote-left"></i>
                    Paul Tweedy<a href="#">BBC</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- Container Ends -->
    </section>
    <!-- Testimonial Section End -->  
<style type="text/css">
  .number{
    width: auto;
    height: 50px;
  }
</style>
    <!-- section turorial -->
    <div class="row">
        <div class="container">
          <h2 align="center">CARI AKUNTANMU</h2>
          <h6 align="center">Ikuti langkah - langkah dibawah ini untuk mencari dan memesan kebutuhan</h6>
          <!-- gmbar 1 -->
          <div class="row">
              <div class="col-lg-6">
                <img src="<?php echo base_url('assets/images/wy1.png');?>" class="rounded-circle img-fluid">
              </div>

              <div class="col-lg-6">
                <span><img src="<?php echo base_url('assets/images/1.png');?>" class="number"></span>
                <h4><b>Cari Akuntan sesuai keinginan anda</b></h4>
                <p>Akses gratis lebih dari 100 Akuntan berkualitas dengan melakukan pencarian akuntan dengan memasukkan kebutuhan yang dibutuhkan.</p>
              </div>
          </div>
          <!-- end gambar 1-->
          <!-- gambar 2 -->
          <div class="row">
            <div class="col-lg-6">
                <span><img src="<?php echo base_url('assets/images/2.png');?>" class="number"></span>
                <h4><b>Pilih Akuntan yang cocok denganmu</b></h4>
                <p>Pantau rating akuntan, latar belakang pendidikan, deskripsi singkat, serta review dari member sebelumnya pada profil akuntan di hasil pencarian. Klik kotak profil akuntan untuk informasi detailnya.</p>
              </div>
            <div class="col-lg-6">
               <img src="<?php echo base_url('assets/images/wy2.png');?>" class="rounded-circle img-fluid">
            </div>
          </div>
          <!-- end gambar 2 -->
          <!-- gambar 3 -->
          <div class="row">
            <div class="col-lg-6">
               <img src="<?php echo base_url('assets/images/wy3.png');?>" class="rounded-circle img-fluid">
            </div>
            <div class="col-lg-6">
              <span><img src="<?php echo base_url('assets/images/3.png');?>" class="number"></span>
              <h4><b>Kirim Pesan Ke Akuntan pilihanmu</b></h4>
                <p>Setelah menemukan pilihan akuntanmu, manfaatkan fitur kirim pesan kepada akuntanmu untuk detail pekerjaan</p>
              <form action="" method="post">
                <button class="btn btn-warning">Pesan Akuntan</button>
              </form>
            </div>
          </div>
          <!-- end gambar 3-->
        </div>
      </div>
    <!-- end section tutorial -->