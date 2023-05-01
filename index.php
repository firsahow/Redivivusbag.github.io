<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Selamat Datang | Toko Aneka Kue</title>
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700|Raleway">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css"> 
	<link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
	
  <body data-spy="scroll" data-target="#site-navbar" data-offset="200">
    
    <nav class="navbar navbar-expand-lg navbar-dark site_navbar site-navbar-light" id="site-navbar">
      <div class="container">
        <a class="navbar-brand" href="index.php">Toko Aneka Kue</a>
        <div class="collapse navbar-collapse" id="site-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="#home" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="#about" class="nav-link">About Us</a></li>
            <li class="nav-item"><a href="#menu" class="nav-link">Menu</a></li>
            <li class="nav-item"><a href="#kontak" class="nav-link">KONTAK</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->

    <section class="site-cover" style="background-image: url(images/bg_landing.png);" id="home">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center site-vh-100">
          <div class="col-md-12">
            <h1 class="site-heading site-animate">Toko Aneka Kue</h1>
            <h2 class="h5 site-subheading mb-5 site-animate">Temukan beragam macam kue yang enak &amp; lezat disini</h2>    
            <p><a href="#menu" class="btn btn-outline-white btn-lg site-animate">Cek Sekarang</a></p>
          </div>
        </div>
      </div>
    </section>
    <!-- END Home -->
    
    <section class="site-section" id="about">
      <div class="container">
        <div class="row">
          <div class="col-md-5 site-animate">
            <h4 class="site-sub-title">Tentang Kami</h4>
            <h2 class="site-primary-title display-4">Selamat Datang</h2>
            <p>Toko Aneka Kue adalah sebuah toko yang menjual berbagai jenis bentuk kue serta berbagai jenis rasa kue yang di padukan menjadi satu.</p>

            <p class="mb-4">Dalam toko kue ini juga menjual banyak sekali kue-kue tradisional atau dari berbagai jenis daerah, bahkan berasal dari luar negarapun ada di dalam toko kue kami.</p>
          </div>
          
          <div class="col-md-6 site-animate site-vh-75" data-animate-effect="fadeInRight">
            <img src="images/about-us.jpg" class="img-fluid">
          </div>
        </div>
      </div>
    </section>
    <!-- END Abous Us -->

    <section class="site-section" id="menu">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Delicious Menu</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Kumpulan Aneka Kue yang Enak &amp; Lezat</p>
              </div>
            </div>
          </div>

          <div class="col-md-12 text-center">
            <ul class="nav site-tab-nav mb-5" id="pillihan-menu">
              <li class="nav-item site-animate">
                <a class="nav-link active" id="menu-indo" data-toggle="pill" href="#menu_indonesia" role="tab">INDONESIA</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="menu-korea" data-toggle="pill" href="#menu_korea" role="tab">KOREA</a>
              </li>
              <li class="nav-item site-animate">
                <a class="nav-link" id="menu-jepang" data-toggle="pill" href="#menu_jepang" role="tab">JEPANG</a>
              </li>
            </ul>
			  
<!-- Menu Indonesia --> 
            <div class="tab-content text-left">
              <div class="tab-pane fade show active" id="menu_indonesia">
                <div class="row">
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_indo/kuedadargulung.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Dadar Gulung</h5>
                        <p>Kue tradisional ini punya rasa yang manis legit. Ini karena kue dadar gulung terbuat dari adonan tepung terigu dan santan sebagai kulit. Kemudian diisi dengan kelapa parut dan gula jawa. </p>
                        <h6 class="text-primary menu-price">Rp.5.000</h6>
						            <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_indo/kueklepon.jpeg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Klepon</h5>
                        <p> kue tradisional Indonesia yang terbuat dari tepung beras ketan yang dibentuk seperti bola-bola kecil dan diisi dengan gula merah lalu direbus dalam air mendidih.</p>
                        <h6 class="text-primary menu-price">Rp.1.200</h6>
						            <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_indo/kuelumpur.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Kue Lumpur</h5>
                        <p>Kue lumpur adalah penganan ringan dengan bahan utama santan, kentang, tepung terigu, dan telur. Sebagai pewangi digunakan vanila dan sering kali diberi hiasan kismis dan kelapa muda iris di permukaannya. Kue ini tergolong kue basah sehingga tidak tahan disimpan lama.</p>
                        <h6 class="text-primary menu-price">Rp.3.000</h6>
						            <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">
                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_indo/kue-putu-mayang.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Putu Mayang</h5>
                        <p>Salah satu kue tradisional khas Betawi. Bentuknya unik seperti mi dengan beraneka ragam warna.</p>
                        <h6 class="text-primary menu-price">Rp.12.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_indo/pancong.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Pancong</h5>
                        <p>Salah satu makanan khas daerah Jawa Barat Kue tradisional ini terbuat dari campuran tepung beras, kelapa parut, daun suji dan santan. Kue ini biasanya dihidangkan dengan taburan gula pasir.</p>
                        <h6 class="text-primary menu-price">Rp.8.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_indo/serabi_hijau.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Serabi</h5>
                        <p>Camilan yang terbuat dari campuran tepung beras dan santan ini dipanggang menggunakan wajan besi kecil berbentuk cekung di atas arang atau bara api.</p>
                        <h6 class="text-primary menu-price">Rp.10.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
				
<!-- Menu Korea -->
              <div class="tab-pane fade" id="menu_korea">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_korea/gangjeong.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Gangjeong</h5>
                        <p>kue tradisional khas Korea (hangwa) yang terbuat dari beras ketan dengan berbagai bentuk dan ukuran.</p>
                        <h6 class="text-primary menu-price">Rp.60.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_korea/dasik.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Dasik</h5> 
                        <p>Kue tradisional yang satu ini biasa dijadikan pendamping minum teh. Karena itu diberi nama 'Dasik' yang artinya makanan saat minum teh.</p>
                        <h6 class="text-primary menu-price">Rp.400.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_korea/Hwangnam-ppang.jpeg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Hwangnam-ppang</h5>
                        <p>Hwangnam-ppang atau populer disebut Gyeongju bread berasal dari kota Gyeongju, kue ini terbuat dari telur dan tepung terigu, Hwangnam-ppang punya isian pasta kacang merah yang sangat melimpah. Hampir 70%nya berisi pasta kacang merah.</p>
                        <h6 class="text-primary menu-price">Rp.70.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_korea/Hwangwa.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Hwangwa</h5>
                        <p>Makanan sangat cocok dijadikan sebagai oleh-oleh untuk keluarga. Selain tahan lama, makanan ini juga memiliki warna dan bentuk yang menarik serta sangat sehat karena dalam proses pembuatannya tidak menggunakan bahan kimia. </p>
                        <h6 class="text-primary menu-price">Rp.70.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_korea/Jeolpyeon.jpeg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Jeolpyeon</h5>
                        <p>Kue basah yang terbuat dari tepung beras non gluten. Adonan tepung berasnya kemudian dicetak dalam cetakan bernama tteoksal sehingga menghasilkan bentuk kue yang beragam. Mulai dari bentuk bunga hingga huruf.</p>
                        <h6 class="text-primary menu-price">Rp.800.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_korea/songpyeon.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Songpyeon</h5>
                        <p> kue beras lembut yang disajikan pada hari raya Chuseok (festifal panen). Songpyeon berisi madu, manisan atau kacang merah.</p>
                        <h6 class="text-primary menu-price">Rp.500.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
				
<!-- Menu Jepang -->
              <div class="tab-pane fade" id="menu_jepang">
                <div class="row">
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_jepang/Amanatto.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Amanatto</h5>
                        <p>Jajanan manis yang dibuat dari banyak macam kacang yang direbus di dalam gula. Setelah direbus, kacang-kacang tersebut kemudian dikeringkan, lalu dilapisi gula lagi. Kacang yang sering digunakan adalah kacang azuki.</p>
                        <h6 class="text-primary menu-price">Rp.16.000</h6>
						            <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_jepang/dango.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Dango</h5>
                        <p>Kue Jepang berbentuk bulat seperti bola kecil, dan dimatangkan dengan cara dikukus atau direbus di dalam air. Adonan dango dibuat dari tepung beras yang diulen dengan air atau air panas.</p>
                        <h6 class="text-primary menu-price">Rp.21.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_jepang/higashi.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Higashi</h5>
                        <p>Kue tradisional Jepang yang kering dan mengandung sedikit air. Tepung yang digunakan untuk membuat higashi biasanya tepung beras. Higashi sering disajikan pada upacara minum teh Jepang.</p>
                        <h6 class="text-primary menu-price">Rp.25.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                  </div>
                  <div class="col-md-6 site-animate">

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_jepang/kompeito.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Kompeito</h5>
                        <p>Permen tradisional Jepang yang berbentuk seperti bintang berwarna-warni dan rasanya hanya manis. Sebutir permen umumnya berdiameter antara 5-10 milimeter. Nama 'kompeito' berasal dari bahasa Portugis, confeito yang berarti gula-gula.</p>
                        <h6 class="text-primary menu-price">Rp.72.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_jepang/taiyaki.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Taiyaki</h5>
                        <p>Kue Jepang berbentuk ikan. Bagian atas kue dipanggang terpisah dengan bagian bawah kue. Setelah kue hampir matang, keduanya disatukan dengan selai kacang merah.</p>
                        <h6 class="text-primary menu-price">Rp.140.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    <div class="media menu-item">
                      <img class="mr-3" src="images/menu_jepang/uiro.jpg" class="img-fluid" >
                      <div class="media-body">
                        <h5 class="mt-0">Uiro</h5>
                        <p>Kue kukus yang terbuat dari beras, air, dan gula. Manis dan kenyal, uiro dapat dibuat dalam berbagai warna dan rasa, termasuk adzuki, matcha, yuzu jeruk, stroberri dan cokelat.</p>
                        <h6 class="text-primary menu-price">Rp.70.000</h6>
                        <p><a href="https://bit.ly/3qMBfc3" target="_blank" class="btn btn-primary btn-sm">PESAN</a></p>
                      </div>
                    </div>

                    
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END Menu -->



    
    <!-- Form Kontak -->

    <section class="site-section bg-light" id="kontak">
      <div class="container">
        <div class="row">

          <div class="col-md-12 text-center mb-5 site-animate">
            <h2 class="display-4">Hubungi Kami</h2>
            <div class="row justify-content-center">
              <div class="col-md-7">
                <p class="lead">Silakan isi dan kirimkan formulir berikut dengan pertanyaan atau pernyataan kamu, dan kami akan senang hati menanggapi kamu segera mungkin. Terima kasih.</p>
              </div>
            </div>
          </div>

          <div class="col-md-7 mb-5 site-animate">
          <iframe width="0" height="0" name="dummyframe" id="dummyframe"></iframe>
            <form action="proses.php" method="post" id="form_kontak" target="dummyframe">
            <div class="form-group">
                <label for="nama" class="sr-only">Name</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama" required>
              </div>
              <div class="form-group">
                <label for="email" class="sr-only">Email</label>
                <input type="text" class="form-control" name="email" placeholder="Email" required>
              </div>
              <div class="form-group">
                <label for="message" class="sr-only">Message</label>
                <textarea name="pesan" cols="30" rows="10" class="form-control" placeholder="tuliskan pesanmu" required></textarea>
              </div>
              <div class="form-group">
              <input type="submit" class="btn btn-primary btn-lg" onclick="send()" id="kirim" value="Kirim">
			      	<input type="reset" class="btn btn-primary btn-lg" onclick="reset()" id="reset" value="Reset">
              </div>
                  <script>
	                    function send(){
		                  swal ("Terkirim!", "Pesanmu akan segera kami tanggapi", "success")
	                    }
                  </script>
            </form>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-4 site-animate">
            <p><img src="images/kontak.jpg" alt="" class="img-fluid"></p>
            <p class="text-black">
              Alamat: <br> Jl. Margonda Raya No.545, RW.7, Pondok Cina, Beji, Depok City, West Java 16424<br> <br>
              Telepon/Whatsapp: <br> <a href="https://bit.ly/3qMBfc3" target="_blank"> +62-877-7272-2074 </a><br><br>
              Email: <br> <a href="mailto:info@anekakue.com">info@anekakue.com</a>
            </p>

          </div>
          
        </div>
      </div>
    </section>
    <!-- END Kontak -->
    

    <footer class="site-footer site-bg-dark site-section">
        </div>
        <div class="row site-animate">
           <div class="col-md-12 text-center">
            <div class="site-footer-widget mb-4">
              <ul class="site-footer-social list-unstyled ">
				  <h5 style="color:#E3E3E3">Temukan juga kami di :</h5><br>
                <li class="site-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="site-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
      </div>
    </footer>

    
    

   



    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.waypoints.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/main.js"></script>
    
  </body>
</html>