# Intro


# Logo
<a href="#"><img src="<?php echo $sys->template_url ?>html/img/index/logo.png" alt=""></a>

# Header
<ul class="nav navbar-nav navbar-right">
  <li><a href="index.html" class="active-nav">Home</a></li>
  <li><a href="about.html">About Us</a></li>
  <li><a href="product.html">Product</a></li>
  <li><a href="testimoni.html">Testimonial</a></li>
  <li><a href="news.html">News</a></li>
  <li><a href="contact.html">Contact Us</a></li>
  <li><button class="w3-btn w3-round-xxlarge btn-login"><a href="login.html">Login</a></button></li>
  <li><button class="w3-btn w3-round-xxlarge btn-reg"><a href="registrasi1.html">Registrasi</a></button></li>
</ul>

# Top
<!-- Slider -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/index/banner.png" width="100%" alt="banner">
    </div>
    <div class="item">
      <img src="img/index/banner.png" width="100%" alt="banner">
    </div>
    <div class="item">
      <img src="img/index/banner.png" width="100%" alt="banner">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- Slider End -->

# Content
<!-- About -->
<div class="aboutIndex">
  <div class="container">
    <div class="row">
      <div class="col-md-8 aboutleftContent">
        <span>HelloWorld</span>
        <h2>About Us</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum recusandae alias dolores facere quia optio labore ut. Repellendus eligendi ipsum distinctio tempore, aperiam laudantium molestiae ad illo minima dicta. Rerum perferendis nostrum inventore odio quae, molestias!</p>
        <a href="#">See More</a>
      </div>
      <div class="col-md-4" align="center">
        <img src="img/index/image_about.png" class="img-responsive" alt="">
      </div>
    </div>
  </div>
</div>
<!-- About End -->

# Content Bottom
<!-- Product -->
<div class="productIndex">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Our Product</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6" align="center">
        <img src="img/index/icon_product.png" class="img-responsive" alt="">
      </div>
      <div class="col-md-6 productContent">
        <h3>Binary Beauty Product</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta saepe dolore excepturi et nam dignissimos expedita, eligendi ex officia, quod, a labore reiciendis natus doloribus assumenda. Laboriosam doloribus error laborum.</p>
        <a href="registrasi1.html"><button class="w3-btn w3-ripple" style="margin-top: 25px; background-color: #6b4ff9; color:white;">See More</button></a>
      </div>
    </div>
  </div>
</div>
<!-- Product End -->

<!-- Testimoni -->
<div class="testiIndex">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Our Testimonial</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="carousel slide" data-ride="carousel" id="quote-carousel">

          <!-- Bottom Carousel Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#quote-carousel" data-slide-to="0"><img class="img-responsive" src="img/index/image_testimonial1.png" alt="">
              </li>
              <li data-target="#quote-carousel" data-slide-to="1" class="active"><img class="img-responsive" src="img/index/image_testimonial2.png" alt="">
              </li>
              <li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="img/index/image_testimonial3.png" alt="">
              </li>
            </ol>

          <!-- Carousel Slides / Quotes -->
          <div class="carousel-inner text-center">
            <!-- Quote 1 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12">
                  <h4>Maruli Wijinarko</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. !</p>
                </div>
              </div>
            </div>
            <!-- Quote 2 -->
            <div class="item active">
              <div class="row">
                <div class="col-md-12">
                  <h4>Maruli Wijinarko</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
                </div>
              </div>
            </div>
            <!-- Quote 3 -->
            <div class="item">
              <div class="row">
                <div class="col-md-12">
                  <h4>Maruli Wijinarko</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. .</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12 text-center">
            <a href="testimoni.html">See More Testimonial</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimoni End -->

# Bottom
<!-- Statistik -->
<div class="statistikIndex">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>Statistik Member</h2>
      </div>
    </div>
    <div class="row statRow">
      <div class="col-md-4 statMenu" data-wow-delay="0.1s">
        <div class="text-center py-3 testiHead newMember">
          <img src="img/index/icon_statistik1.png" class="mr-2" style="max-width: 15%;"><span>New Member</span>
        </div>
        <div class="text-center px-3 py-5" style="height: 450px;">
          <div id="carousel-example-vertical" class="carousela vertical slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>

                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>

                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>


                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>


                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 statMenu" data-wow-delay="0.1s">
        <div class="text-center py-3 testiHead topIncome">
          <img src="img/index/icon_statistik1.png" class="mr-2" style="max-width: 15%;"><span>Top Income</span>
        </div>
        <div class="text-center px-3 py-5" style="height: 450px;">
          <div id="carousel-example-vertical" class="carousela vertical slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>

                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>

                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>


                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>


                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 statMenu" data-wow-delay="0.1s">
        <div class="text-center py-3 testiHead topSponsor">
          <img src="img/index/icon_statistik1.png" class="mr-2" style="max-width: 15%;"><span>Top Sponsor</span>
        </div>
        <div class="text-center px-3 py-5" style="height: 450px;">
          <div id="carousel-example-vertical" class="carousela vertical slide" data-ride="carousel">
            <div class="carousel-inner">

              <div class="carousel-item active">
                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>

                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>

                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>


                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>


                <div class="row mb-3 d-flex-c">
                  <div class="col-5">
                    <img src="img/index/icon_statistik2.png" style="max-width: 65%;">
                  </div>
                  <div class="col-7 text-left text-white pl-0">
                    <span>Binary123456</span><br>
                    <span>Marjuki Wijanarko</span><br>
                    <span>Yogyakarta</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Statistik End -->

# Bottom_2
<!-- Join -->
<section class="join_us">
  <div class="container-fluid text-center">
    <div class="row justify-content-center">
      <div class="col-lg">
        <h3>#Bergabunglah dan Sukses Bersama Kami</h3>       
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg">
        <a href="#"><button type="button" class="btn btn-warning" >Join Now</button></a>
      </div>
    </div>
  </div>
</section>
<!-- Join End-->

<!-- News -->
<div class="newsIndex">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2>News</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 text-center">
        <img src="img/index/image_news1.png" class="img-responsive" alt="">
        <h5>Perayaan HUT RI ke - 73</h5>
        <span>Agustus 17th, 2018 by <span style="font-weight: bold; color: #8062ef;">Admin</span></span> 
      </div>
      <div class="col-lg-4 text-center">
        <img src="img/index/image_news2.png" class="img-responsive" alt="">
        <h5>Perayaan HUT RI ke - 73</h5>
        <span>Agustus 17th, 2018 by <span style="font-weight: bold; color: #8062ef;">Admin</span></span> 
      </div>
      <div class="col-lg-4 text-center">
        <img src="img/index/image_news3.png" class="img-responsive" alt="">
        <h5>Perayaan HUT RI ke - 73</h5>
        <span>Agustus 17th, 2018 by <span style="font-weight: bold; color: #8062ef;">Admin</span></span> 
      </div>
    </div>
  </div>
</div>
<!-- News End -->

<!-- Gallery -->
<div class="galleryIndex">
  <div class="row">
    <div class="col-lg-12">
      <img src="img/index/image_gallery1.png" class="img-responsive" alt="">
      <img src="img/index/image_gallery2.png" class="img-responsive" alt="">
      <img src="img/index/image_gallery3.png" class="img-responsive" alt="">
      <img src="img/index/image_gallery4.png" class="img-responsive" alt="">
    </div>
  </div>
  <div class="row">
    <div class="col-lg-12">
      <img src="img/index/image_gallery4.png" class="img-responsive" alt="">
      <img src="img/index/image_gallery3.png" class="img-responsive" alt="">
      <img src="img/index/image_gallery1.png" class="img-responsive" alt="">
      <img src="img/index/image_gallery2.png" class="img-responsive" alt="">
    </div>
  </div>
</div>
<!-- Gallery End -->




# Footer
<!-- Footer -->
<div class="footer">
  <div class="container">
    <div class="row">
      <div class="col-lg-1"><img src="img/index/logo_footer.png" class="s_icon"></div>
      <div class="col-lg-4 address">Jl.Ahmad Wahid,Kalangan,Baturetno,<br>Banguntapan,Bantul,Yogyakarta,55197<br>Office : 0274-452 155<br>Phone : 081 226 272 827<br>Email : cro2@esoftdream.net</div>
      <div class="col-lg-7 text-right">
        <a class="glyph" href=""><img src="img/index/icon_ig.png" alt=""></a>
        <a class="glyph" href=""><img src="img/index/icon_tw.png" alt=""></a>
        <a class="glyph" href=""><img src="img/index/icon_fb.png" alt=""></a>
        <a class="glyph" href=""><img src="img/index/icon_yout.png" alt=""></a>
        <a  href=""><img src="img/index/icon_link.png" alt=""></a>
        <br>
        <p>Copyright 2018 &copy;Office. All rights reserved<br>Privacy Policy. Terms of Use. Site Map</p>
      </div>
    </div>
  </div>  
</div>
  <!-- Footer End -->

<!-- Scroll Top -->
<a href="#0" class="cd-top js-cd-top"></a>
<!-- Scroll Top End -->
