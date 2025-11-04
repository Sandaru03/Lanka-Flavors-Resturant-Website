<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Lanka Flavors</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="<?php echo base_url('assets/');?>assets/img/favicon2.jpg" rel="icon">
  <link href="<?php echo base_url('assets/');?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts (Correct way) -->
<link href="https://fonts.googleapis.com" rel="preconnect">
<link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/');?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/');?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/');?>assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/');?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?php echo base_url('assets/');?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?php echo base_url('assets/');?>assets/css/main.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Restaurantly
  * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

  <header id="header" class="header fixed-top">

    <div class="topbar d-flex align-items-center">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">sandarudilshan24@gmail.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+94 0702216447</span></i>
        </div>
        <div class="languages d-none d-md-flex align-items-center">
          <!-- <ul>
            <li>En</li>
            <li><a href="#">De</a></li>
          </ul> -->
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="home" class="logo d-flex align-items-center me-auto me-xl-0">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.png" alt=""> -->
          <h1 class="sitename">Lanka Flavors</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="#hero" class="active">Home<br></a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#menu">Menu</a></li>
            <li><a href="#specials">Specials</a></li>
            <li><a href="#events">Events</a></li>
            <li><a href="#chefs">Chefs</a></li>
            <li><a href="#gallery">Gallery</a></li>
            <!-- <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li> -->
            <li><a href="#contact">Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

        <a class="btn-book-a-table d-none d-xl-block" href="#book-a-table">Book a Table</a>

      </div>

    </div>

  </header>

  <main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section dark-background">

      <img src="<?php echo base_url('assets/');?>assets/img/hero2.jpg" alt="" data-aos="fade-in">

      <div class="container">
        <div class="row">
          <div class="col-lg-8 d-flex flex-column align-items-center align-items-lg-start">
            <h2 data-aos="fade-up" data-aos-delay="100">Welcome to <span>Lanka Flavors</span></h2>
            <p data-aos="fade-up" data-aos-delay="200">Delivering great food for more than 10 years!</p>
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              <a href="#menu" class="cta-btn">Our Menu</a>
              <a href="#book-a-table" class="cta-btn">Book a Table</a>
            </div>
          </div>
          <div class="col-lg-4 d-flex align-items-center justify-content-center mt-5 mt-lg-0">
            <a href="https://youtu.be/kRCH8kD1GD0?si=VZNL4RKTsRXNmCex" class="glightbox pulsating-play-btn"></a>
          </div>
        </div>
      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-6 order-1 order-lg-2">
            <img src="<?php echo base_url('assets/');?>assets/img/about2.jpg" class="img-fluid about-img" alt="">
          </div>
          <div class="col-lg-6 order-2 order-lg-1 content">
            <h3>🌴 Welcome to Lanka Flavors</h3>
            <p class="fst-italic">
              Where every bite tells the story of Sri Lanka.
            </p>
            <ul>
              <li><i class="bi bi-check2-all"></i> <span>We bring authentic Sri Lankan flavors to your plate, blending age-old recipes with a modern dining experience</span></li>
              <li><i class="bi bi-check2-all"></i> <span>Every dish is made with passion and freshness, using locally sourced ingredients and rich island spices.</span></li>
              <li><i class="bi bi-check2-all"></i> <span>We believe in the joy of sharing good food, creating moments of warmth, taste, and togetherness for every guest.</span></li>
            </ul>
            <p>
              We take pride in using only the freshest ingredients, sourced locally whenever possible. Every dish is prepared with care, ensuring an unforgettable dining experience filled with flavor, color, and joy.

Sit back, relax, and let us take you on a journey through Sri Lanka’s diverse and delicious food traditions — one bite at a time.
            </p>
          </div>
        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Why Us Section -->
    <section id="why-us" class="why-us section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>WHY US</h2>
        <p>🌴 Why Choose Our Restaurant</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="card-item">
              <span>01</span>
              <h4><a href="" class="stretched-link">Authentic Sri Lankan Taste</a></h4>
              <p>Every dish at Lanka Flavors is a celebration of Sri Lanka’s vibrant culinary heritage.
                We use age-old recipes passed down through generations — bringing you the real taste of our island with a modern twist.</p>
            </div>
          </div><!-- Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="card-item">
              <span>02</span>
              <h4><a href="" class="stretched-link">Freshness You Can Taste</a></h4>
              <p>We believe great food begins with great ingredients.
              That’s why we source our vegetables, spices, and seafood from trusted local farmers and markets — ensuring every bite is fresh, flavorful, and full of life.</p>
            </div>
          </div><!-- Card Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="card-item">
              <span>03</span>
              <h4><a href="" class="stretched-link">A Place That Feels Like Home</a></h4>
              <p>At Lanka Flavors, you’re not just a guest — you’re family.
               Our cozy atmosphere, warm hospitality, and friendly service create the perfect space to relax, connect, and enjoy delicious food made with love.</p>
            </div>
          </div><!-- Card Item -->

        </div>

      </div>

    <section id="menu" class="menu section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Menu</h2>
    <p>🌴 Check Our Tasty Menu</p>   
  </div><!-- End Section Title -->  

  <div class="container isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

    <div class="row" data-aos="fade-up" data-aos-delay="100">
      <div class="col-lg-12 d-flex justify-content-center">
        <ul class="menu-filters isotope-filters">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-starters">Starters</li>
          <li data-filter=".filter-salads">Salads</li>
          <li data-filter=".filter-specialty">Specialty</li>
        </ul>
      </div>
    </div><!-- Menu Filters -->

    <div class="row isotope-container" data-aos="fade-up" data-aos-delay="200">

      <!-- Starters -->
      <div class="col-lg-6 menu-item isotope-item filter-starters">
        <img src="<?php echo base_url('assets/');?>assets/img/menu/lobster-bisque.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Fish Cutlets</a><span>Rs. 650</span>
        </div>
        <div class="menu-ingredients">
          Crispy golden bites filled with spiced fish and potatoes — a true Sri Lankan favorite.
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-specialty">
        <img src="<?php echo base_url('assets/');?>assets/img/menu/bread-barrel.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Egg Hoppers</a><span>Rs. 400</span>
        </div>
        <div class="menu-ingredients">
          Traditional bowl-shaped hoppers topped with a perfectly cooked egg and spicy sambol.
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-starters">
        <img src="<?php echo base_url('assets/');?>assets/img/menu/cake.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Spicy Devilled Chicken</a><span>Rs. 850</span>
        </div>
        <div class="menu-ingredients">
          Tender chicken cubes stir-fried with onions, peppers, and Sri Lankan spices.
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-salads">
        <img src="<?php echo base_url('assets/');?>assets/img/menu/caesar.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Coconut Sambol Salad</a><span>Rs. 650</span>
        </div>
        <div class="menu-ingredients">
          Freshly grated coconut mixed with chili, onion, and lime — perfect with rice & curry.
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-specialty">
        <img src="<?php echo base_url('assets/');?>assets/img/menu/tuscan-grilled.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Traditional Rice & Curry</a><span>Rs. 1,250</span>
        </div>
        <div class="menu-ingredients">
          Steamed rice served with dhal, coconut sambol, papadam, and your choice of meat curry.
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-starters">
        <img src="<?php echo base_url('assets/');?>assets/img/menu/mozzarella.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Vegetable Spring Rolls</a><span>Rs. 600</span>
        </div>
        <div class="menu-ingredients">
          Crispy rolls filled with seasoned vegetables, served with homemade chili sauce.
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-salads">
        <img src="<?php echo base_url('assets/');?>assets/img/menu/greek-salad.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Cucumber & Pineapple Salad</a><span>Rs. 700</span>
        </div>
        <div class="menu-ingredients">
          A tropical mix of cucumber, pineapple, chili, and lime — fresh and zesty!
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-salads">
        <img src="<?php echo base_url('assets/');?>assets/img/menu/spinach-salad.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Green Papaya Salad</a><span>Rs. 750</span>
        </div>
        <div class="menu-ingredients">
          Shredded papaya tossed with island herbs, crushed peanuts, and a tangy dressing.
        </div>
      </div><!-- Menu Item -->

      <div class="col-lg-6 menu-item isotope-item filter-specialty">
        <img src="<?php echo base_url('assets/');?>assets/img/menu/lobster-roll.jpg" class="menu-img" alt="">
        <div class="menu-content">
          <a href="#">Kottu Roti</a><span>Rs. 1,050</span>
        </div>
        <div class="menu-ingredients">
          Chopped roti stir-fried with vegetables, egg, and your choice of chicken or beef.
        </div>
      </div><!-- Menu Item -->

    </div><!-- Menu Container -->

  </div>

</section><!-- /Menu Section -->


    <!-- Specials Section -->
    <section id="specials" class="specials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Specials</h2>
    <p>🌴 Check Our Sri Lankan Specials</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="row">
      <div class="col-lg-3">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-bs-toggle="tab" href="#specials-tab-1">Signature Rice & Curry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-2">Spicy Devilled Chicken</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-3">Seafood Mixed Kottu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-4">Jaffna Mutton Curry</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="tab" href="#specials-tab-5">Pol Roti & Lunu Miris Combo</a>
          </li>
        </ul>
      </div>

      <div class="col-lg-9 mt-4 mt-lg-0">
        <div class="tab-content">

          <!-- Tab 1 -->
          <div class="tab-pane active show" id="specials-tab-1">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Lanka Flavors Signature Rice & Curry</h3>
                <p class="fst-italic">A wholesome Sri Lankan meal that celebrates island flavors with every bite.</p>
                <p>Served with fragrant white rice, dhal curry, tempered vegetables, coconut sambol, papadam, and your choice of chicken, fish, or jackfruit curry. Each element is cooked with traditional spices for an unforgettable local experience.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo base_url('assets/');?>assets/img/ricecurry.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab 1 -->

          <!-- Tab 2 -->
          <div class="tab-pane" id="specials-tab-2">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Spicy Devilled Chicken</h3>
                <p class="fst-italic">A fiery, flavorful dish that’s a favorite at every Sri Lankan table.</p>
                <p>Tender chicken pieces stir-fried with onions, bell peppers, chili paste, and tomato sauce. It’s perfectly balanced between spicy and tangy — best enjoyed with fried rice or kottu for a truly satisfying meal.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo base_url('assets/');?>assets/img/chicken.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab 2 -->

          <!-- Tab 3 -->
          <div class="tab-pane" id="specials-tab-3">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Seafood Mixed Kottu</h3>
                <p class="fst-italic">A coastal twist on Sri Lanka’s favorite street food.</p>
                <p>Fresh prawns, cuttlefish, and fish cubes mixed with chopped godhamba roti, egg, vegetables, and our homemade spice blend. It’s sizzling, spicy, and full of island character — served straight from the hotplate.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo base_url('assets/');?>assets/img/kottu.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab 3 -->

          <!-- Tab 4 -->
          <div class="tab-pane" id="specials-tab-4">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Authentic Jaffna Mutton Curry</h3>
                <p class="fst-italic">Rich, spicy, and deeply aromatic — a Northern delicacy.</p>
                <p>Slow-cooked mutton simmered in roasted curry powder, coconut milk, and Jaffna-style spices. This bold curry pairs beautifully with string hoppers or red rice, offering a true taste of Sri Lanka’s north.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo base_url('assets/');?>assets/img/jaffnacurry.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab 4 -->

          <!-- Tab 5 -->
          <div class="tab-pane" id="specials-tab-5">
            <div class="row">
              <div class="col-lg-8 details order-2 order-lg-1">
                <h3>Shawarma</h3>
                <p class="fst-italic">A classic Sri Lankan breakfast turned all-day comfort meal.</p>
                <p>Homemade coconut rotis served warm with spicy lunu miris, dhal curry, and coconut sambol. Simple yet deeply satisfying — the perfect comfort food for any time of the day.</p>
              </div>
              <div class="col-lg-4 text-center order-1 order-lg-2">
                <img src="<?php echo base_url('assets/');?>assets/img/shawarma.png" alt="" class="img-fluid">
              </div>
            </div>
          </div><!-- End Tab 5 -->

        </div><!-- End Tab Content -->
      </div>
    </div>

  </div>
</section><!-- /Specials Section -->


    <!-- Events Section -->
    <!-- Events Section -->
<section id="events" class="events section">

  <img class="slider-bg" src="<?php echo base_url('assets/');?>assets/img/event.jpg" alt="" data-aos="fade-in">

  <div class="container">

    <div class="swiper init-swiper" data-aos="fade-up" data-aos-delay="100">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          }
        }
      </script>
      <div class="swiper-wrapper">

        <!-- Event 1 -->
        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="<?php echo base_url('assets/');?>assets/img/events-slider/birthday.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Birthday Celebrations</h3>
              <div class="price">
                <p><span>Rs. 15,000</span></p>
              </div>
              <p class="fst-italic">
                Celebrate your special day with authentic Sri Lankan cuisine and a warm tropical ambiance.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Custom-decorated space for your celebration.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Delicious buffet or à la carte Sri Lankan dishes.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Friendly staff to make your day truly memorable.</span></li>
              </ul>
              <p>
                Whether it’s an intimate dinner or a lively party, Lanka Flavors is the perfect place to create unforgettable birthday memories with your loved ones.
              </p>
            </div>
          </div>
        </div><!-- End Slider item -->

        <!-- Event 2 -->
        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="<?php echo base_url('assets/');?>assets/img/events-slider/events-slider-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Private Dining & Gatherings</h3>
              <div class="price">
                <p><span>Rs. 5,000</span></p>
              </div>
              <p class="fst-italic">
                Enjoy an exclusive dining experience surrounded by the flavors and hospitality of Sri Lanka.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>Private rooms and cozy seating for family or corporate events.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Personalized menus featuring traditional and fusion dishes.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Dedicated staff ensuring a smooth, memorable event.</span></li>
              </ul>
              <p>
                Perfect for anniversaries, corporate dinners, or private get-togethers — we provide the space, service, and taste that make your occasion truly special.
              </p>
            </div>
          </div>
        </div><!-- End Slider item -->

        <!-- Event 3 -->
        <div class="swiper-slide">
          <div class="row gy-4 event-item">
            <div class="col-lg-6">
              <img src="<?php echo base_url('assets/');?>assets/img/events-slider/events-slider-3.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0 content">
              <h3>Custom Sri Lankan Events</h3>
              <div class="price">
                <p><span>Rs. 20,000</span></p>
              </div>
              <p class="fst-italic">
                Bring your vision to life — we host custom events infused with Sri Lankan warmth and flavor.
              </p>
              <ul>
                <li><i class="bi bi-check2-circle"></i> <span>From cultural nights to themed dinners — your ideas, our creativity.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Music, decorations, and food tailored to your event style.</span></li>
                <li><i class="bi bi-check2-circle"></i> <span>Flexible packages for small or large gatherings.</span></li>
              </ul>
              <p>
                At Lanka Flavors, we make every event feel like home — filled with smiles, spice, and Sri Lankan spirit.
              </p>
            </div>
          </div>
        </div><!-- End Slider item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Events Section -->


    <!-- Book A Table Section -->
    <section id="book-a-table" class="book-a-table section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>RESERVATION</h2>
        <p>Book a Table</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

         <form action="http://localhost/resturant/index.php/book/table" method="post" role="form" class="php-email-form">


          <div class="row gy-4">
            <div class="col-lg-4 col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="date" name="date" class="form-control" id="date" placeholder="Date" required="">
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
            </div>
            <div class="col-lg-4 col-md-6">
              <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required="">
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
          </div>

          <div class="text-center mt-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
            <button type="submit">Book a Table</button>
          </div>
        </form><!-- End Reservation Form -->

      </div>

    </section><!-- /Book A Table Section -->

    <!-- Testimonials Section -->
<section id="testimonials" class="testimonials section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Testimonials</h2>
    <p>🌴What Our Valued Guests Say</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <div class="swiper init-swiper" data-speed="600" data-delay="5000"
      data-breakpoints="{ &quot;320&quot;: { &quot;slidesPerView&quot;: 1, &quot;spaceBetween&quot;: 40 }, &quot;1200&quot;: { &quot;slidesPerView&quot;: 3, &quot;spaceBetween&quot;: 40 } }">
      <script type="application/json" class="swiper-config">
        {
          "loop": true,
          "speed": 600,
          "autoplay": {
            "delay": 5000
          },
          "slidesPerView": "auto",
          "pagination": {
            "el": ".swiper-pagination",
            "type": "bullets",
            "clickable": true
          },
          "breakpoints": {
            "320": {
              "slidesPerView": 1,
              "spaceBetween": 40
            },
            "1200": {
              "slidesPerView": 3,
              "spaceBetween": 20
            }
          }
        }
      </script>

      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>“The best rice and curry I’ve ever had! Authentic Sri Lankan flavors, friendly staff, and cozy atmosphere. Highly recommended for anyone craving home-style food.”</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            <img src="<?php echo base_url('assets/');?>assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
            <h3>Tharindu Perera</h3>
            <h4>Software Engineer</h4>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>“Absolutely loved the seafood platter! The prawns and crab curry were cooked perfectly. This place really captures the coastal taste of Sri Lanka.”</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            <img src="<?php echo base_url('assets/');?>assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
            <h3>Malsha Fernando</h3>
            <h4>Graphic Designer</h4>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>“From the hoppers to the spicy sambols, everything tasted like my amma’s kitchen! Great service and beautiful presentation too.”</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            <img src="<?php echo base_url('assets/');?>assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
            <h3>Nipuni Weerasinghe</h3>
            <h4>Teacher</h4>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>“Great ambience and the kottu was next level! The spicy chicken kottu had that perfect balance of heat and flavor. Will definitely visit again.”</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            <img src="<?php echo base_url('assets/');?>assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
            <h3>Ruwan Jayasuriya</h3>
            <h4>Entrepreneur</h4>
          </div>
        </div><!-- End testimonial item -->

        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="bi bi-quote quote-icon-left"></i>
              <span>“A lovely dining experience! Tried the Sri Lankan buffet — excellent variety and quality. Staff was very kind and welcoming.”</span>
              <i class="bi bi-quote quote-icon-right"></i>
            </p>
            <img src="<?php echo base_url('assets/');?>assets/img/testimonials/user.jpg" class="testimonial-img" alt="">
            <h3>Harsha de Silva</h3>
            <h4>Travel Blogger</h4>
          </div>
        </div><!-- End testimonial item -->

      </div>
      <div class="swiper-pagination"></div>
    </div>

  </div>

</section><!-- /Testimonials Section -->

    <!-- Gallery Section -->
    <section id="gallery" class="gallery section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Gallery</h2>
        <p>🌴Some photos from Our Restaurant</p>
      </div><!-- End Section Title -->

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo base_url('assets/');?>assets/img/gallery/gallery-1.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="<?php echo base_url('assets/');?>assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo base_url('assets/');?>assets/img/gallery/gallery-2.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="<?php echo base_url('assets/');?>assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo base_url('assets/');?>assets/img/gallery/gallery-3.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="<?php echo base_url('assets/');?>assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo base_url('assets/');?>assets/img/gallery/gallery-4.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="<?php echo base_url('assets/');?>assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo base_url('assets/');?>assets/img/gallery/gallery-5.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="<?php echo base_url('assets/');?>assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo base_url('assets/');?>assets/img/gallery/gallery-6.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="<?php echo base_url('assets/');?>assets/img/gallery/res1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo base_url('assets/');?>assets/img/gallery/gallery-7.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="<?php echo base_url('assets/');?>assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="<?php echo base_url('assets/');?>assets/img/gallery/gallery-8.jpg" class="glightbox" data-gallery="images-gallery">
                <img src="<?php echo base_url('assets/');?>assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div><!-- End Gallery Item -->

        </div>

      </div>

    </section><!-- /Gallery Section -->

   <!-- Chefs Section -->
<section id="chefs" class="chefs section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Our Culinary Team</h2>
    <p>Passionate chefs bringing authentic Sri Lankan flavors to your table</p>
  </div><!-- End Section Title -->

  <div class="container">

    <div class="row gy-4">

      <!-- Chef 1 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="member">
          <img src="<?php echo base_url('assets/');?>assets/img/chefs/cf1.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Chef Dilan Perera</h4>
              <span>Head Chef</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <!-- Chef 2 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="member">
          <img src="<?php echo base_url('assets/');?>assets/img/chefs/cf3.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Chef Malini Fernando</h4>
              <span>Dessert & Pastry Specialist</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

      <!-- Chef 3 -->
      <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="member">
          <img src="<?php echo base_url('assets/');?>assets/img/chefs/cf2.jpg" class="img-fluid" alt="">
          <div class="member-info">
            <div class="member-info-content">
              <h4>Chef Nuwan Jayasinghe</h4>
              <span>Traditional Sri Lankan Cook</span>
            </div>
            <div class="social">
              <a href=""><i class="bi bi-twitter-x"></i></a>
              <a href=""><i class="bi bi-facebook"></i></a>
              <a href=""><i class="bi bi-instagram"></i></a>
              <a href=""><i class="bi bi-linkedin"></i></a>
            </div>
          </div>
        </div>
      </div><!-- End Team Member -->

    </div>

  </div>

</section><!-- /Chefs Section -->


    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Contact Us</p>
      </div><!-- End Section Title -->

      <div class="mb-5" data-aos="fade-up" data-aos-delay="200">
        <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.8143669940696!2d79.84806807475694!3d6.912785993086713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae25960d4668fff%3A0xf07c01bc93e0f1ac!2sSLIIT%20CITY%20UNI!5e0!3m2!1sen!2slk!4v1761891620905!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></iframe>
      </div><!-- End Google Maps -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-4">
            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-geo-alt flex-shrink-0"></i>
              <div>
                <h3>Location</h3>
                <p> 28 St Michaels Rd, Colombo 00300</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Open Hours</h3>
                <p>Monday-Saturday:<br>11:00 AM - 2300 PM</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-telephone flex-shrink-0"></i>
              <div>
                <h3>Call Us</h3>
                <p>+94 702216447</p>
              </div>
            </div><!-- End Info Item -->

            <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
              <i class="bi bi-envelope flex-shrink-0"></i>
              <div>
                <h3>Email Us</h3>
                <p>sandarudilshan24@gmail.com</p>
              </div>
            </div><!-- End Info Item -->

          </div>

          <div class="col-lg-8">
            <form action="http://localhost/resturant/index.php/contact/send" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">


              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required="">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Lanka Flavors</span>
          </a>
          <div class="footer-contact pt-3">
            <p>28 St Michaels Rd, Colombo 00300</p>
            <p class="mt-3"><strong>Phone:</strong> <span>+94 702216447</span></p>
            <p><strong>Email:</strong> <span>sandarudilshan24@gmail.com</span></p>
          </div>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-md-3 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About us</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">Terms of service</a></li>
            <li><a href="#">Privacy policy</a></li>
          </ul>
        </div>

        <!-- <div class="col-lg-2 col-md-3 footer-links">
          <h4>Our Services</h4>
          <ul>
            <li><a href="#">Web Design</a></li>
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Product Management</a></li>
            <li><a href="#">Marketing</a></li>
            <li><a href="#">Graphic Design</a></li>
          </ul>
        </div> -->

        <div class="col-lg-4 col-md-12 footer-newsletter">
          <h4>Our Newsletter</h4>
          <p>Subscribe to our newsletter and receive the latest news about our products and services!</p>
          <form action="forms/newsletter.php" method="post" class="php-email-form">
            <div class="newsletter-form"><input type="email" name="email"><input type="submit" value="Subscribe"></div>
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your subscription request has been sent. Thank you!</div>
          </form>
        </div>

      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Lanka Flavors</strong> <span>2025 All Rights Reserved</span></p>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">Sandaru Dilshan</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="<?php echo base_url('assets/');?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo base_url('assets/');?>assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Main JS File -->
  <script src="<?php echo base_url('assets/');?>assets/js/main.js"></script>

</body>

</html>