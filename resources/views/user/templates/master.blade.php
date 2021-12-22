@include('user.templates.partials.header')

@yield('header')
@yield('content')

  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(user/assets/img/batik/a.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Kain Tradisional Sasirangan</h2>
                <p class="animate__animated animate__fadeInUp">Budaya Kain Tradisional Khas Suku Banjar</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(user/assets/img/batik/c.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Varian dari Batik</h2>
                <p class="animate__animated animate__fadeInUp">Oleh-oleh yang Bisa Dibawa Pulang dari Kalimantan Selatan.</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(user/assets/img/batik/e.jpg)">
            <div class="carousel-container">
              <div class="container">
                <h2 class="animate__animated animate__fadeInDown">Beragam dan Unik</h2>
                <p class="animate__animated animate__fadeInUp">Ragam Motifnya yang Kaya dan Beragam.</p>
                <a href="#about" class="btn-get-started scrollto animate__animated animate__fadeInUp">Get Started</a>
              </div>
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Tentang Rumah Sasirangan</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="user/assets/img/batik/1.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <a href="#">
                  <h4 class="sec-head">Projek ini</h4>
                </a>
                <p>
                  Website ini menyediakan informasi seputar kain Sasirangan. Kain Sasirangan adalah kain tradisional yang dibuat di Kalimantan Selatan. Sasirangan berasal dari kata Bahasa Banjar, yaitu sirang yang berarti menjelujur. Sebagai salah satu kain tradisional Indonesia, kain Sasirangan harus dijaga dan dilestarikan.
                </p>
                <ul>
                  <li>
                    <i class="bi bi-check"></i> informasi tentang Sasirangan
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Macam-macam motif 
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Berita seputar Sasirangan
                  </li>
                  <!-- 
                  <li>
                    <i class="bi bi-check"></i> Renovaion of Commercial Office
                  </li>
                  <li>
                    <i class="bi bi-check"></i> Make Quality Products
                  </li>
                  -->
                </ul>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

  



    <!-- ======= Services Section ======= -->
    <div id="services" class="services-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline services-head text-center">
              <h2>Our Services</h2>
            </div>
          </div>
        </div>
        <div class="row text-center">
          <!-- Start Left services -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-briefcase"></i>
                  </a>
                  <h4>informasi</h4>
                  <p>
                    Berisi berbagai informasi seperti sejarah kain sasirangan dan lainnya.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-card-checklist"></i>
                  </a>
                  <h4>Berita</h4>
                  <p>
                    Berisi berbagai berita seputar kain Sasirangan.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <!-- end col-md-4 -->
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-bar-chart"></i>
                  </a>
                  <h4>Koleksi</h4>
                  <p>
                    Berisi bermacam-macam jenis dan motif kain Sasirangan.
                  </p>
                </div>
              </div>
              <!-- end about-details -->
            </div>
          </div>
          
          <!-- 
          <div class="col-md-4 col-sm-4 col-xs-12">
            
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-binoculars"></i>
                  </a>
                  <h4>Social Marketer </h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
              
            </div>
          </div>
          
          <div class="col-md-4 col-sm-4 col-xs-12">
             end col-md-4 
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-brightness-high"></i>
                  </a>
                  <h4>Seo Expart</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-md-4 col-sm-4 col-xs-12">
            
            <div class=" about-move">
              <div class="services-details">
                <div class="single-services">
                  <a class="services-icon" href="#">
                    <i class="bi bi-calendar4-week"></i>
                  </a>
                  <h4>24/7 Support</h4>
                  <p>
                    will have to make sure the prototype looks finished by inserting text or photo.make sure the prototype looks finished by.
                  </p>
                </div>
             </div>          
            </div>
          </div>
           -->
        </div>
      </div>
    </div>
   
    <!-- End Services Section -->

    




    <!-- ======= Blog Section ======= -->
    <div id="information" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Informasi</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="user/assets/img/batik/Sejarah Kain Sasirangan.jpg" alt="">
                  </a>
                </div>
                
                <div class="blog-meta">
                  <!-- 
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                -->

                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Sejarah Kain Sasirangan</a>
                  </h4>
                  <p>
                  Sasirangan mulai dibuat sejak abad ke-12 hingga ke-14 Masehi di Kalimantan Selatan. Pembuatannya dikenal dalam cerita rakyat yang membahas tentang masa Kerajaan Negara Dipa. Cerita ini membahas tentang Patih Lambung Mangkurat yang merupakan raja Kerajaan Negara Dipa. 
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="user/assets/img/batik/Makna Tersembunyi Kain Sasirangan.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <!-- 
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">130 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                  -->
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Makna Tersembunyi Kain Sasirangan</a>
                  </h4>
                  <p>
                  Masyarakat suku Banjar meyakini bahwa setiap corak atau motif yang terdapat pada kain sasirangan memiliki fungsi yang berbeda dalam ritual upacara adat. Seperti untuk pengobatan orang sakit (ghaib), ikat kepala adat Banjar (laung), kerudung (kakamban) dan sarung.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="user/assets/img/batik/Membuat Kain Sasirangan3.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <!-- 
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                  -->
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Membuat Kain Sasirangan</a>
                  </h4>
                  <p>
                  Proses pembuatan kain sasirangan cukup rumit/unik, dikerjakan melalui tahap-tahapan mulai dari mendesign motif, merajut, mencelup, membuka rajutan, mencuci dan menstrika. Keseluruhan penyelesaiannya dikerjakan oleh masing-masing pengrajin sesuai dengan keahliannya dan tidak menggunakan alat mekanis.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
            </div>
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog Section -->


    <!-- ======= Blog2 Section ======= -->
    <div id="news" class="blog-area">
      <div class="blog-inner area-padding">
        <div class="blog-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Berita Terbaru</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="user/assets/img/batik/Tingkatkan Pamor Kain Sasirangan.jpg" alt="">
                  </a>
                </div>
                
                <div class="blog-meta">
                  <!-- 
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">13 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                -->

                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Tingkatkan Pamor Kain Sasirangan Lewat BSF, Puluhan Desainer Bersaing</a>
                  </h4>
                  <p>
                  Gelaran Banjarmasin Sasirangan Festival (BSF) Ke-5 menjadi momentum untuk kembali meningkatkan pamor Kain Sasirangan ke pentas nasional hingga dunia. 
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Left Blog -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="user/assets/img/batik/Fashion Carnaval Sasirangan.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <!-- 
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">130 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                  -->
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Fashion Carnaval Sasirangan</a>
                  </h4>
                  <p>
                  Fashion Carnaval Sasirangan menampilkan busana sasirangan kreasi tersebut merupakan rangkaian kegiatan Banjarmasin Sasirangan Festival 2021 yang bertujuan untuk memperkenalkan kain sasirangan di tingkat Nasional hingga Internasional itu tetap digelar di masa pandemi COVID-19 dengan menerapkan protokol kesehatan. 
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
              <!-- Start single blog -->
            </div>
            <!-- End Left Blog-->
            <!-- Start Right Blog-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-blog">
                <div class="single-blog-img">
                  <a href="blog.html">
                    <img src="user/assets/img/batik/Busana Bertema Kampung Sasirangan3.jpg" alt="">
                  </a>
                </div>
                <div class="blog-meta">
                  <!-- 
                  <span class="comments-type">
                    <i class="fa fa-comment-o"></i>
                    <a href="#">10 comments</a>
                  </span>
                  <span class="date-type">
                    <i class="fa fa-calendar"></i>2016-03-05 / 09:10:16
                  </span>
                  -->
                </div>
                <div class="blog-text">
                  <h4>
                    <a href="blog.html">Busana Bertema Kampung Sasirangan Juara Carnaval Banjarmasin Sasirangan Festival 2021</a>
                  </h4>
                  <p>
                  Busana tema Kampung Sasirangan juara Carnaval Sasirangan yang menjadi rangkaian Banjarmasin Sasirangan Festival (BSF) ke-5 Tahun 2021, Sabtu (9/10/2021) sore.
                  </p>
                </div>
                <span>
                  <a href="blog.html" class="ready-btn">Read more</a>
                </span>
              </div>
            </div>
            <!-- End Right Blog-->
          </div>
        </div>
      </div>
    </div><!-- End Blog2 Section -->


           <!-- ======= Portfolio Section ======= -->
    <div id="portfolio" class="portfolio-area area-padding fix">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Jenis Sasirangan</h2>
            </div>
          </div>
        </div>
        <!-- Start Portfolio
        <div class="row wesome-project-1 fix">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>
        -->

        <div class="row awesome-project-content portfolio-container">

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="user/assets/img/batik/Motif Naga Balimbur.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="user/assets/img/batik/Motif Naga Balimbur.jpg">
                      <h4>Sasirangan</h4>
                      <span>Motif Naga Balimbur</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="user/assets/img/batik/Motif Kambang Sakaki2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="user/assets/img/batik/Motif Kambang Sakaki2.jpg">
                      <h4>Sasirangan</h4>
                      <span>Motif Kambang Sakaki</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="user/assets/img/batik/Motif Hiris Gagatas.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="user/assets/img/batik/Motif Hiris Gagatas.jpg">
                      <h4>Sasirangan</h4>
                      <span>Motif Hiris Gagatas</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="user/assets/img/batik/Motif Gigi Haruan.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="user/assets/img/batik/Motif Gigi Haruan.jpg">
                      <h4>Sasirangan</h4>
                      <span>Motif Gigi Haruan</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="user/assets/img/batik/Motif Rumah Banjar.jpg" alt="" /></a>
                <div class="add-actions text-center text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="user/assets/img/batik/Motif Rumah Banjar.jpg">
                      <h4>Sasirangan</h4>
                      <span>Motif Rumah Banjar</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="user/assets/img/batik/Motif Bayam Raja.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="user/assets/img/batik/Motif Bayam Raja.jpg">
                      <h4>Sasirangan</h4>
                      <span>Motif Bayam Raja</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-web">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="user/assets/img/batik/Motif Kulat Karikit2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="user/assets/img/batik/Motif Kulat Karikit2.jpg">
                      <h4>Sasirangan</h4>
                      <span>Motif Kulat Karikit</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->


          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-app portfolio-item">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="user/assets/img/batik/Motif Kambang Kacang2.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="user/assets/img/batik/Motif Kambang Kacang2.jpg">
                      <h4>Sasirangan</h4>
                      <span>Motif Kambang Kacang</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->


          <!-- portfolio-item start -->
          <div class="col-md-4 col-sm-4 col-xs-12 portfolio-item filter-card">
            <div class="single-awesome-project">
              <div class="awesome-img">
                <a href="#"><img src="user/assets/img/batik/Motif Daun Jaruju.jpg" alt="" /></a>
                <div class="add-actions text-center">
                  <div class="project-dec">
                    <a class="portfolio-lightbox" data-gallery="myGallery" href="user/assets/img/batik/Motif Daun Jaruju.jpg">
                      <h4>Sasirangan</h4>
                      <span>Motif Daun Jaruju</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- portfolio-item end -->

        </div>
      </div>
    </div><!-- End Portfolio Section -->





    <!-- ======= Rviews Section ======= -->
    <div class="reviews-area">
      <div class="row g-0">
        <div class="col-lg-6">
          <img src="user/assets/img/batik/b.jpg" alt="" class="img-fluid">
        </div>
        <div class="col-lg-6 work-right-text d-flex align-items-center">
          <div class="px-5 py-5 py-lg-0">
            <h2>Bekerjasama dengan Kami</h2>
            <h5>Hubungi Kami untuk Informasi Lebih Lanjut</h5>
            <a href="#contact" class="ready-btn scrollto">Contact us</a>
          </div>
        </div>
      </div>
    </div><!-- End Rviews Section -->


    <!-- ======= Team Section =======
    <div id="team" class="our-team-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Our special Team</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/1.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Mickel</h4>
                <p>Seo</p>
              </div>
            </div>
          </div>
          

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/2.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Andrew Arnold</h4>
                <p>Web Developer</p>
              </div>
            </div>
          </div>
          

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/3.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Lellien Linda</h4>
                <p>Web Design</p>
              </div>
            </div>
          </div>
          

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="single-team-member">
              <div class="team-img">
                <a href="#">
                  <img src="assets/img/team/4.jpg" alt="">
                </a>
                <div class="team-social-icon text-center">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="bi bi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="bi bi-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="team-content text-center">
                <h4>Jhon Powel</h4>
                <p>Seo Expert</p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>End Team Section -->


   

    <!-- ======= Pricing Section ======= 
    <div id="pricing" class="pricing-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Pricing Table</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>basic <br /> <span>$80 / month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                <li class="check"><i class="bi bi-x"></i><span>Full access</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Multiple slider</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Free domin</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Support unlimited</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                <li class="check"><i class="bi bi-x"></i><span>Cash back</span></li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list active">
              <span class="saleon">top sale</span>
              <h3>standard <br /> <span>$110 / month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Full access</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Multiple slider</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Free domin</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Support unlimited</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                <li class="cross"><i class="bi bi-x"></i><span>Cash back</span></li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="pri_table_list">
              <h3>premium <br /> <span>$150 / month</span></h3>
              <ol>
                <li class="check"><i class="bi bi-check"></i><span>Online system</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Full access</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free apps</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Multiple slider</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Free domin</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Support unlimited</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Payment online</span></li>
                <li class="check"><i class="bi bi-check"></i><span>Cash back</span></li>
              </ol>
              <button>sign up now</button>
            </div>
          </div>
        </div>
      </div>
    </div> End Pricing Section -->

    <!-- ======= Testimonials Section ======= 
    <div id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

            <div class="swiper-slide">
              <div class="testimonial-item">
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </div>End Testimonials Section -->

    <!-- ======= Suscribe Section =======
    <div class="suscribe-area">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs=12">
            <div class="suscribe-text text-center">
              <h3>Welcome to our eBusiness company</h3>
              <a class="sus-btn" href="#">Get A quote</a>
            </div>
          </div>
        </div>
      </div>
    </div> End Suscribe Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    Call: +1 5589 55488 55<br>
                    <span>Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    Email: info@example.com<br>
                    <span>Web: www.example.com</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-4">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Location: A108 Adam Street<br>
                    <span>NY 535022, USA</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">

            <!-- Start Google Map
            <div class="col-md-6">
              
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22864.11283411948!2d-73.96468908098944!3d40.630720240038435!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sbg!4v1540447494452" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
              
            </div>
            End Google Map -->

            <!-- Start  contact
            <div class="col-md-6">
              <div class="form contact-form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
            End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->

  @include('user.templates.partials.footer')