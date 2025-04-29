<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MAJESTIC</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Favicons -->
  <link href="{{ asset('storage/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('storage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@400..900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <!-- Vendor CSS Files -->
  <link href="{{ asset('storage/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/venobox/venobox.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('storage/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  @vite(['resources/css/style.css', 'resources/js/main.js'])
  <!-- Template Main CSS File -->
  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-16992884960">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'AW-16992884960');
  </script>
  <script>
    gtag('config', 'AW-16992884960/2JYvCJXq7rYaEOCx66Y_', {
      'phone_conversion_number': '3852274246'
    });
  </script>
  
</head>

<body>

  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:{{ $company->email ?? 'majesticcustomjewelers@gmail.com'}}">{{ $company->email ?? 'majesticcustomjewelers@gmail.com'}}</a>
        <i class="icofont-phone"></i> <a href="tel:{{ preg_replace('/[^\d+]/', '', $company->phone ?? '+13852274246') }}">{{ $company->phone ?? '+1 385-227-4246' }}</a>

      </div>
      <div class="social-links float-right">
        <a href="{{ $company->facebook ?? 'https://www.facebook.com/MajesticJewelersInc' }}" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="{{ $company->instagram ?? 'https://www.instagram.com/majesticcustomjewelers' }}" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="{{ $company->x ?? 'https://www.tiktok.com/@majesticcustomjewelers' }}" class="tiktok"><i class="fab fa-tiktok"></i></a>
        
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <a href="#"><img src="{{ asset('storage/img/logo_simbolo.png') }}" alt="" class="img-fluid"></a>
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Products</a></li>
          <li><a href="#team">Family</a></li>
          <li class="drop-down"><a href="">Categories</a>
            <ul>
              @forelse($categories as $category)
              <li><a href="#portfolio" class="portfolio-filter-link" data-filter=".filter-{{ $category->id }}">{{ $category->category }}
              </a></li>
              <!-- <li class="drop-down"><a href="#">Category 2</a>
                <ul>
                  <li><a href="#">Subcategory 1</a></li>
                  <li><a href="#">Subcategory 2</a></li>
                  <li><a href="#">Subcategory 3</a></li>
                  <li><a href="#">Subcategory 4</a></li>
                  <li><a href="#">Subcategory 5</a></li>
                </ul>
              </li>              
              <li><a href="#">Category 5</a></li> -->
              @empty
              <li><a href="#">Category 1</a></li>
              <li class="drop-down"><a href="#">Category 2</a>
                <ul>
                  <li><a href="#">Subcategory 1</a></li>
                  <li><a href="#">Subcategory 2</a></li>
                  <li><a href="#">Subcategory 3</a></li>
                  <li><a href="#">Subcategory 4</a></li>
                  <li><a href="#">Subcategory 5</a></li>
                </ul>
              </li>
              <li><a href="#">Category 3</a></li>
              <li><a href="#">Category 4</a></li>
              <li><a href="#">Category 5</a></li>
              @endforelse
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

        <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          @forelse($heroes as $hero)
          <div class="carousel-item active" style="background-image: url({{ asset('storage/img/slide/slide-1.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MAJESTIC</span></h2>
                <p class="animate__animated animate__fadeInUp">Experience the art of transforming your story into one of a kind, handcrafted jewelry. At Majestic, we believe every piece should embody your individuality crafted with passion, precision, and unmatched dedication. Let us create something truly exceptional just for you.</p>
                <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
              </div>
            </div>
          </div>
          @empty
          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url({{ asset('storage/img/slide/6.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MAJESTIC</span></h2>
                <p class="animate__animated animate__fadeInUp">Experience the art of transforming your story into one of a kind, handcrafted jewelry. At Majestic, we believe every piece should embody your individuality crafted with passion, precision, and unmatched dedication. Let us create something truly exceptional just for you.</p>
                <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="carousel-item" style="background-image: url({{ asset('storage/img/slide/7.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Custom Jewelry Design</h2>
                <p class="animate__animated animate__fadeInUp">Transform your ideas into reality with our expert custom jewelry design service. Whether it's an engagement ring, a unique pendant, or a personalized gift, we create one-of-a-kind pieces that reflect your style and story.</p>
                <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="carousel-item" style="background-image: url({{ asset('storage/img/slide/8.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Jewelry Redesign & Restoration</h2>
                <p class="animate__animated animate__fadeInUp">Give new life to your heirloom pieces or outdated designs. Our restoration and redesign services preserve the sentimental value while enhancing the beauty and functionality of your jewelry.</p>
                <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>

          <!-- Slide 4 -->
          <div class="carousel-item" style="background-image: url({{ asset('storage/img/slide/10.jpg') }});">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Appraisals with Photo Documentation</h2>
                <p class="animate__animated animate__fadeInUp">Know the true value of your precious items with our detailed appraisal service. We provide accurate evaluations along with high-quality photographs for your records and insurance purposes.</p>
                <!-- <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a> -->
              </div>
            </div>
          </div>
          @endforelse
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-rounded-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-rounded-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="{{ asset('storage/img/about.jpg') }}" class="img-fluid" alt="">
            <a href="{{ $about->urlVideo ?? 'https://youtu.be/nWVtCJ1iR-c?si=ARignzlIfOrUR_em' }}" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>{{ $about->title ?? 'About Us' }}</h2>
              <p>{{ $about->description ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus cum, tempora alias praesentium deleniti eligendi quo. Et doloribus totam aperiam molestias, animi sapiente est in quos praesentium, reprehenderit vero numquam.' }}</p>
            </div>

            <!-- <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxs-heart"></i></div>
              <h4 class="title"><a href="">{{ $about->firstSubtitle ?? 'Lorem Ipsum' }}</a></h4>
              <p class="description">{{ $about->firstDescription ?? 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Placeat velit ipsa voluptate sequi quam saepe esse quisquam exercitationem accusantium quaerat, eaque aut excepturi culpa dignissimos itaque doloribus sint eos? Dolores?' }}</p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">{{ $about->secondSubtitle ?? 'Nemo Enim' }}</a></h4>
              <p class="description">{{ $about->secondDescription ?? 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque' }}</p>
            </div> -->

          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    <!-- ======= About Lists Section ======= -->
    <section class="about-lists d-none">
      <div class="container">

        <div class="row no-gutters">

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up">
            <span>01</span>
            <h4>Lorem Ipsum</h4>
            <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="100">
            <span>02</span>
            <h4>Repellat Nihil</h4>
            <p>Dolorem est fugiat occaecati voluptate velit esse. Dicta veritatis dolor quod et vel dire leno para dest</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="200">
            <span>03</span>
            <h4> Ad ad velit qui</h4>
            <p>Molestiae officiis omnis illo asperiores. Aut doloribus vitae sunt debitis quo vel nam quis</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="300">
            <span>04</span>
            <h4>Repellendus molestiae</h4>
            <p>Inventore quo sint a sint rerum. Distinctio blanditiis deserunt quod soluta quod nam mider lando casa</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="400">
            <span>05</span>
            <h4>Sapiente Magnam</h4>
            <p>Vitae dolorem in deleniti ipsum omnis tempore voluptatem. Qui possimus est repellendus est quibusdam</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-up" data-aos-delay="500">
            <span>06</span>
            <h4>Facilis Impedit</h4>
            <p>Quis eum numquam veniam ea voluptatibus voluptas. Excepturi aut nostrum repudiandae voluptatibus corporis sequi</p>
          </div>

        </div>

      </div>
    </section><!-- End About Lists Section -->

    <!-- ======= Counts Section ======= -->
    <section class="counts section-bg d-none">
      <div class="container">

        <div class="row">

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-simple-smile" style="color: #20b38e;"></i>
              <span data-toggle="counter-up">232</span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #c042ff;"></i>
              <span data-toggle="counter-up">521</span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-live-support" style="color: #46d1ff;"></i>
              <span data-toggle="counter-up">1,463</span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
              <span data-toggle="counter-up">15</span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
        </div>

        <div class="row">
          @forelse($services as $service)
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="{{ $service->logo }}"></i></div>
            <h4 class="title"><a href="">{{ $service->title }}</a></h4>
            <p class="description">{{ $service->description }}</p>
          </div>
          @empty
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
          @endforelse
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Our Portfolio Section ======= -->
    <section id="portfolio" class="portfolio section-bg">
      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="section-title">
          <h2>Our Jewels</h2>
          <p>Discover the brilliance of our handcrafted jewelry collections, designed to make every moment unforgettable. From timeless classics to modern masterpieces, our pieces are crafted with precision and passion.</p>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              @forelse($categories as $category)
              <li data-filter=".filter-{{ $category->id }}">{{ $category->category }}</li>
              @empty
              <li data-filter=".filter-app">Category 1</li>
              <li data-filter=".filter-card">Category 2</li>
              <li data-filter=".filter-web">Category 3</li>
              @endforelse
            </ul>
          </div>
        </div>

        <div class="row portfolio-container">
          @forelse ($products as $product)
          <div class="col-lg-4 col-md-6 portfolio-item filter-{{ $product->productcategory->first()->category_id ?? '1'}}">
            <div class="portfolio-wrap">
              <img src="{{ @asset('storage/img/'.$product->images->first()->image ?? 'storage/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>{{ $product->product }}<br>
                   @if($product->showprice!= 'N')
                   <span style="color:#fff">{{ $product->price }} $</span>
                   @endif
                </h4>
                <p>{{ $product->category}}</p>
                <div class="portfolio-links">
                  <a href="{{ @asset('storage/img/'.$product->images->first()->image) }}" data-gall="portfolioGallery" class="venobox" title="{{ $product->product }}"><i class="icofont-eye"></i></a>
                  <!-- <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a> -->
                   
                </div>
              </div>
            </div>
          </div>
          @empty
          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-1.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Name</h4>
                <p>Category Name</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-1.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Name 1"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-2.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Name 2</h4>
                <p>Category 1</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-2.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-3.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Name 2</h4>
                <p>Category</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-3.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Name 2"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-4.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-4.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-5.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Name 2</h4>
                <p>Name</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-5.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Name 2"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-6.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Name 3</h4>
                <p>Category</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-6.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Name 3"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-7.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Name 1</h4>
                <p>Name</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-7.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Name 1"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-8.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Name 3</h4>
                <p>Category</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-8.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Name 3"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{ asset('storage/img/portfolio/portfolio-9.jpg') }}" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Name 3</h4>
                <p>Name</p>
                <div class="portfolio-links">
                  <a href="{{ asset('storage/img/portfolio/portfolio-9.jpg') }}" data-gall="portfolioGallery" class="venobox" title="Name 3"><i class="icofont-eye"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="icofont-external-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforelse
        </div>

      </div>
    </section><!-- End Our Portfolio Section -->

    <!-- ======= Our Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title">
          <h2>The Majestic Family</h2>
          <p>At Majestic Custom Jewelers, we believe that every piece of jewelry tells a story, and so does our team. As a proud family-owned business, we pour our heart and passion into every creation.</p>
          <p>Meet Miguel and his family, the heart and soul behind Majestic. With years of craftsmanship passed down through generations, they are dedicated to bringing your vision to life with care, precision, and a personal touch.</p>
          <p>When you choose Majestic Custom Jewelers, you’re not just supporting a business—you’re becoming part of our family.</p>
        </div>
        <div class="row" style="margin:20px;"><p></p><p></p><p></p></div>
        <div class="row justify-content-center">

        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="{{ asset('storage/img/team/family1.jpeg') }}" class="img-fluid" alt=""></div>
              
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="{{ asset('storage/img/team/family2.jpeg') }}" class="img-fluid" alt=""></div>
              
            </div>
        </div>
        <!-- @forelse($teams as $team)
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="{{ asset('storage/'.$team->photo) }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>{{ $team->name }}</h4>
                <span>{{ $team->name }}</span>
                <div class="social">
                  <a href="{{ $team->x ?? '#' }}"><i class="icofont-twitter"></i></a>
                  <a href="{{ $team->facebook ?? '#' }}"><i class="icofont-facebook"></i></a>
                  <a href="{{ $team->instagram ?? '#' }}"><i class="icofont-instagram"></i></a>
                  <a href="{{ $team->linkedin ?? '#' }}"><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        @empty
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="{{ asset('storage/img/team/team-1.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Ncki Bell</h4>
                <span>Founder</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="{{ asset('storage/img/team/team-2.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Bill Thompsoms</h4>
                <span>Product Manager</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="{{ asset('storage/img/team/team-4.jpg') }}" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mary White</h4>
                <span>Accountant</span>
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        @endforelse -->
        </div>

      </div>
    </section><!-- End Our Team Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row  d-flex align-items-stretch">
          @forelse($faqs as $faq)
          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>{{ $faq->title }}?</h4>
            <p>
              {{ $faq->answer }}
            </p>
          </div>
          @empty
          <div class="col-lg-6 faq-item" data-aos="fade-up">
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="100">
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="200">
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="300">
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="400">
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>

          <div class="col-lg-6 faq-item" data-aos="fade-up" data-aos-delay="500">
            <h4>Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor?</h4>
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
            </p>
          </div>
        @endforelse
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

    <!-- ======= Contact Us Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up">
            <div class="info-box">
              <i class="bx bx-map"></i>
              <h3>Our Address</h3>
              <p>{{ $company->address ?? '75 East Fort Union Blvd suite 128'}}</p>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
            <div class="info-box">
              <i class="bx bx-envelope"></i>
              <h3>Email Us</h3>
              <p>{{ $company->email ?? 'majesticcustomjewelers@gmail.com' }}</p>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
            <div class="info-box ">
              <i class="bx bx-phone-call"></i>
              <h3>Call Us</h3>
              <p><a href="tel:{{ preg_replace('/[^\d+]/', '', $company->phone ?? '+13852274246') }}">{{ $company->phone ?? '+1 385-227-4246' }}</a></p>
            </div>
          </div>

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
    <form id="contactForm" method="POST" action="{{ route('contact.store') }}" class="php-email-form">
        @csrf
        <div class="form-row">
            <div class="col-lg-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required minlength="4">
                <div class="validate"></div>
            </div>
            <div class="col-lg-6 form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                <div class="validate"></div>
            </div>
        </div>
        <div class="form-row">
          <div class="col-lg-6 form-group">
              <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required minlength="4">
              <div class="validate"></div>
          </div>
          <div class="col-lg-6 form-group">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone">
              <div class="validate"></div>
          </div>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="message" rows="5" required placeholder="Message"></textarea>
            <div class="validate"></div>
        </div>
        <div class="mb-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your message has been sent. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Send Message</button></div>
    </form>
</div>

<script>
document.getElementById('contactForm').addEventListener('submit', async function(e) {
    e.preventDefault();
    
    const form = e.target;
    const loading = form.querySelector('.loading');
    const errorMessage = form.querySelector('.error-message');
    const sentMessage = form.querySelector('.sent-message');
    
    // Ocultar todos los mensajes y mostrar loading
    loading.style.display = 'block';
    errorMessage.style.display = 'none';
    sentMessage.style.display = 'none';

    try {
        // Obtener el token CSRF
        const csrfToken = document.querySelector('meta[name="csrf-token"]').content;
        
        // Crear FormData
        const formData = new FormData(form);
        
        // Enviar la solicitud
        const response = await fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'Accept': 'application/json',
                'X-CSRF-TOKEN': csrfToken,
                'X-Requested-With': 'XMLHttpRequest'
            },
            credentials: 'include'
        });

        // Procesar la respuesta
        const data = await response.json();
        
        if (!response.ok) {
            throw new Error(data.message || 'Error en el servidor');
        }

        // Mostrar mensaje de éxito
        sentMessage.style.display = 'block';
        sentMessage.textContent = data.message || '¡Mensaje enviado con éxito!';
        
        // Opcional: Resetear el formulario después de 3 segundos
        setTimeout(() => {
            form.reset();
            sentMessage.style.display = 'none';
        }, 3000);

    } catch (error) {
        console.error('Error:', error);
        errorMessage.style.display = 'block';
        errorMessage.textContent = error.message || 'Error al enviar el mensaje';
    } finally {
        loading.style.display = 'none';
    }
});
</script>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6 footer-info">
            <h3>MAJESTIC</h3>
            <p>
              {{ $company->address ?? '75 East Fort Union Blvd suite 128' }}<br>
              <strong>Phone:</strong> <a href="tel:{{ preg_replace('/[^\d+]/', '', $company->phone ?? '+13852274246') }}" style="color:#fff;">{{ $company->phone ?? '+1 385-227-4246' }}</a><br>
              <strong>Email:</strong> {{ $company->email ?? 'majesticcustomjewelers@gmail.com' }}<br>
            </p>
            <div class="social-links mt-3">
              <a href="{{ $company->facebook ?? 'https://www.facebook.com/MajesticJewelersInc' }}" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="{{ $company->instagram ?? 'https://www.instagram.com/majesticcustomjewelers' }}" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="{{ $company->x ?? 'https://www.tiktok.com/@majesticcustomjewelers' }}" class="tiktok"><i class="fab fa-tiktok"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Products</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#team">Family</a></li>
              <!-- <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li> -->
            </ul>
          </div>

          
        </div>
      </div>
    </div>

  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('storage/vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
  <!-- <script src="{{ asset('storage/vendor/php-email-form/validate.js') }}"></script> -->
  <script src="{{ asset('storage/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
  <script src="{{ asset('storage/vendor/venobox/venobox.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/waypoints/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('storage/vendor/aos/aos.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('storage/js/main.js')}}"></script>

</body>

</html>