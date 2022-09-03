<?php
$title = "Home Page";
$style = "
  ";

$headScript = "
  WebFontConfig = {
      google: {
          families: ['Poppins:300,400,500,600,700,800']
      }
  };
  (function(d) {
      var wf = d.createElement('script'),
          s = d.scripts[0];
      wf.src = 'Templates/Front/js/webfont.js';
      wf.async = true;
      s.parentNode.insertBefore(wf, s);
  })(document);
";

$headList = [
  '<link rel="stylesheet" type="text/css" href="Templates/Front/vendor/fontawesome-free/css/all.min.css">',
  '<link rel="stylesheet" type="text/css" href="Templates/Front/vendor/animate/animate.min.css">',

  '<link rel="stylesheet" type="text/css" href="Templates/Front/vendor/magnific-popup/magnific-popup.min.css">',
  '<link rel="stylesheet" type="text/css" href="Templates/Front/vendor/owl-carousel/owl.carousel.min.css">',

  '<link rel="stylesheet" type="text/css" href="Templates/Front/css/demo1.min.css">'
];

include "shared/Front/head_include.php";
?>



<main class="main">
  <div class="page-content">

    <section class="intro-section">
      <div class="owl-carousel owl-theme row owl-dot-inner owl-dot-white intro-slider animation-slider cols-1 gutter-no" data-owl-options="{
                        'nav': false,
                        'dots': true,
                        'loop': false,
                        'items': 1,
                        'autoplay': false,
                        'autoplayTimeout': 8000
                    }">
        <div class="banner banner-fixed intro-slide1" style="background-color: #46b2e8;">
          <figure>
            <img src="Templates/Front/images/demos/demo1/slides/pinho-GCAnKZM21_c-unsplash.jpg" alt="intro-banner" width="1903" height="630" style="background-color: #34ace5;" />
          </figure>
          <div class="container">
            <div class="banner-content y-50 text-right">
              <h4 class="banner-subtitle font-weight-bold ls-l">
                <span class="d-inline-block slide-animate" data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.2s'}">Buy
                  2 Get</span>
                <span class="d-inline-block label-star bg-white text-primary slide-animate" data-animation-options="{'name': 'fadeInRightShorter', 'duration': '1s', 'delay': '.4s'}">1
                  Free</span>
              </h4>
              <h2 class="banner-title font-weight-bold text-primary lh-1 ls-md slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                Fashionable</h2>
              <h3 class="font-weight-normal lh-1 ls-l text-primary slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                Collection</h3>
              <p class="slide-animate text-dark ls-s mb-7" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1.2s', 'delay': '1s'}">
                Get Free Shipping on all orders over $99.00</p>
              <a href="shop.html" class="btn btn-dark btn-rounded slide-animate" data-animation-options="{'name': 'fadeInUpShorter', 'duration': '1s', 'delay': '1.8s'}">Shop
                Now<i class="d-icon-arrow-right"></i></a>
            </div>
          </div>
        </div>


        <div class="banner banner-fixed intro-slide2" style="background-color: #dddee0;">
          <figure>
            <img src="Templates/Front/images/demos/demo1/slides/keagan-henman-xPJYL0l5Ii8-unsplash.jpg" alt="intro-banner" width="1903" height="630" style="background-color: #d8d9d9;" />
          </figure>
          <div class="container">
            <div class="banner-content y-50 ml-auto text-right">
              <h4 class="banner-subtitle ls-s mb-1 slide-animate" data-animation-options="{'name': 'fadeInUp', 'duration': '.7s'}"><span class="d-block text-uppercase mb-2">Coming soon</span><strong class="font-weight-semi-bold ls-m">Riode Birthday</strong></h4>
              <h2 class="banner-title mb-2 d-inline-block font-weight-bold text-white slide-animate" data-animation-options="{'name': 'fadeInRight', 'duration': '1.2s', 'delay': '.5s'}">
                Sale</h2>
              <p class="slide-animate font-primary ls-s text-dark mb-4" data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.2s'}">
                Up to 70% off on all products <br />online &amp; Free Shipping over $90</p>
              <a href="shop.html" class="btn btn-dark btn-rounded slide-animate" data-animation-options="{'name': 'fadeInUp', 'duration': '1s', 'delay': '1.4s'}">Shop
                Now<i class="d-icon-arrow-right"></i></a>
            </div>
          </div>
        </div>

      </div>

      <div class="container mt-6 appear-animate">
        <div class="service-list">
          <div class="owl-carousel owl-theme row cols-lg-3 cols-sm-2 cols-1" data-owl-options="{
                                    'items': 3,
                                    'nav': false,
                                    'dots': false,
                                    'loop': true,
                                    'autoplay': false,
                                    'autoplayTimeout': 5000,
                                    'responsive': {
                                        '0': {
                                            'items': 1
                                        },
                                        '576': {
                                            'items': 2
                                        },
                                        '768': {
                                            'items': 3,
                                            'loop': false
                                        }
                                    }
                                }">
            <div class="icon-box icon-box-side icon-box1 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.3s'
                                    }">
              <i class="icon-box-icon d-icon-truck"></i>
              <div class="icon-box-content">
                <h4 class="icon-box-title text-capitalize ls-normal lh-1">Free Shipping &amp;
                  Return
                </h4>
                <p class="ls-s lh-1">Free shipping on orders over $99</p>
              </div>
            </div>

            <div class="icon-box icon-box-side icon-box2 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.4s'
                                    }">
              <i class="icon-box-icon d-icon-service"></i>
              <div class="icon-box-content">
                <h4 class="icon-box-title text-capitalize ls-normal lh-1">Customer Support 24/7
                </h4>
                <p class="ls-s lh-1">Instant access to perfect support</p>
              </div>
            </div>

            <div class="icon-box icon-box-side icon-box3 appear-animate" data-animation-options="{
                                        'name': 'fadeInRightShorter',
                                        'delay': '.5s'
                                    }">
              <i class="icon-box-icon d-icon-secure"></i>
              <div class="icon-box-content">
                <h4 class="icon-box-title text-capitalize ls-normal lh-1">100% Secure Payment
                </h4>
                <p class="ls-s lh-1">We ensure secure payment!</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!--Categories Section Start-->
    <section class="pt-10 mb-7 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }">
      <div class="container">
        <h2 class="title title-center mb-5">Our Categories</h2>
        <div class="row">
          <div class="col-xs-6 col-lg-3 mb-4">
            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
              <a href="shop.html">
                <figure class="category-media">
                  <img src="Templates/Front/images/categories/category1.jpg" alt="category" width="280" height="280" style="background-color: #8c8c8d;" />
                </figure>
              </a>
              <div class="category-content">
                <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">For
                    Men's</a></h4>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-lg-3 mb-4">
            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
              <a href="shop.html">
                <figure class="category-media">
                  <img src="Templates/Front/images/categories/category2.jpg" alt="category" width="280" height="280" style="background-color: #bcbdb7;" />
                </figure>
              </a>
              <div class="category-content">
                <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">Accessories</a></h4>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-lg-3 mb-4">
            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
              <a href="shop.html">
                <figure class="category-media">
                  <img src="Templates/Front/images/categories/category3.jpg" alt="category" width="280" height="280" style="background-color: #ececef;" />
                </figure>
              </a>
              <div class="category-content">
                <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">Fashionable
                    Women's</a></h4>
              </div>
            </div>
          </div>
          <div class="col-xs-6 col-lg-3 mb-4">
            <div class="category category-default1 category-absolute banner-radius overlay-zoom">
              <a href="shop.html">
                <figure class="category-media">
                  <img src="Templates/Front/images/categories/category4.jpg" alt="category" width="280" height="280" style="background-color: #e8eded;" />
                </figure>
              </a>
              <div class="category-content font-weight-bold">
                <h4 class="category-name font-weight-bold ls-l"><a href="shop.html">Cosmetic</a>
                </h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--Categories Section End-->



    <!--Summer Season Section Start-->
    <section class="banner banner-background parallax text-center" data-option="{'offset': -60}" data-image-src="Templates/Front/images/demos/demo1/parallax.jpg" style="background-color: #2d2f33;">
      <div class="container">
        <div class="banner-content appear-animate" data-animation-options="{'name': 'blurIn', 'duration': '1s', 'delay': '.2s'}">
          <h4 class="banner-subtitle text-white font-weight-bold ls-l">
            Extra<span class="d-inline-block label-star bg-dark text-primary ml-4 mr-2">30%
              Off</span>Online
          </h4>
          <h3 class="banner-title font-weight-bold text-white">Summer Season Sale</h3>
          <p class="text-white ls-s">Free shipping on orders over $99</p>
          <a href="shop.html" class="btn btn-primary btn-rounded btn-icon-right">Shop Now<i class="d-icon-arrow-right"></i></a>
        </div>
      </div>
    </section>
    <!--Summer Season Section End-->



    <!--Brands Section Start-->
    <section class="mt-2 pb-6 pt-10 pb-md-10 appear-animate" data-animation-options="{
                    'delay': '.3s'
                }">
      <h2 class="title d-none">Our Brand</h2>
      <div class="container">
        <div class="owl-carousel owl-theme row brand-carousel cols-xl-6 cols-lg-5 cols-md-4 cols-sm-3 cols-2" data-owl-options="{
                            'nav': false,
                            'dots': false,
                            'autoplay': true,
                            'margin': 20,
                            'loop': true,
                            'responsive': {
                                '0': {
                                    'items': 2
                                },
                                '576': {
                                    'items': 3
                                },
                                '768': {
                                    'items': 4
                                },
                                '992': {
                                    'items': 5
                                },
                                '1200': {
                                    'items': 6
                                }
                            }
                        }">
          <figure><img src="Templates/Front/images/brands/1.png" alt="brand" width="180" height="100" />
          </figure>
          <figure><img src="Templates/Front/images/brands/2.png" alt="brand" width="180" height="100" />
          </figure>
          <figure><img src="Templates/Front/images/brands/3.png" alt="brand" width="180" height="100" />
          </figure>
          <figure><img src="Templates/Front/images/brands/4.png" alt="brand" width="180" height="100" />
          </figure>
          <figure><img src="Templates/Front/images/brands/5.png" alt="brand" width="180" height="100" />
          </figure>
          <figure><img src="Templates/Front/images/brands/6.png" alt="brand" width="180" height="100" />
          </figure>
        </div>
      </div>
    </section>
    <!--Brands Section End-->


  </div>
</main>

<!-- End of Main -->




<?php
$scriptList = [
  '<script src="Templates/Front/vendor/jquery/jquery.min.js"></script>',
  '<script src="Templates/Front/vendor/parallax/parallax.min.js"></script>',
  '<script src="Templates/Front/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>',
  '<script src="Templates/Front/vendor/elevatezoom/jquery.elevatezoom.min.js"></script>',
  '<script src="Templates/Front/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>',
  '<script src="Templates/Front/vendor/owl-carousel/owl.carousel.min.js"></script>',
  '<script src="Templates/Front/js/main.min.js"></script>'
];

$footScript = "
  ";

include "shared/Front/foot_include.php";
?>