<?php
$keyword="Landscaping Service";
require "header.php"; ?>

<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text">
            <h1><strong>Landscaping Services</strong> <?=($extra ? $extra:"")?></h1>
            <p>Highest Quality of <strong>Garden Design</strong>, <strong>Gardener Service</strong>, <strong>Flower Supplier</strong> & <strong>Landscaping Services</strong> in Malaysia</p>
            <a href="#about" class="btn btn-custom btn-lg page-scroll">More Info</a> </div>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->
<div id="about">
  <div class="container">
    <div class="row">
      <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Welcome to <span><strong>Landscaping Service</strong> <?=($extra ? $extra:"")?></span></h2>
          <hr>
          <p>We are a professional <strong>landscape and garden design</strong> in Malaysia. Our professional team will make your living environment beautiful and comfortable.</p>
          <p>Our <strong>landscape and garden service</strong> include <strong>gardener service</strong>, <strong>garden sculpture</strong>, <strong>flower supply</strong> and <strong>flower planting service</strong>, <strong>garden pond</strong> and <strong>garden fountain</strong> and <strong>garden landscaping</strong>.</p>
          <a href="#services" class="btn btn-custom btn-lg page-scroll">View All Services</a> </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="about-media"> <img src="http://landscaping.services.com.my/img/round-garden-sculpture.jpg" alt="Landscaping Service"> </div>
        <div class="about-desc">
          <h3><strong>Garden Service</strong> <?=($extra ? $extra:"")?></h3>
          <p><strong>Garden Sculpture</strong> is an outdoor garden dedicated to the presentation of sculpture, usually several permanently sited works in durable materials in landscaped surroundings.</p>
        </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="about-media"> <img src="http://landscaping.services.com.my/img/how-to-start-a-landscaping-business-a-simple-guide.jpg" alt="Landscaping Service"> </div>
        <div class="about-desc">
          <h3><strong>Landscape Service</strong> <?=($extra ? $extra:"")?></h3>
          <p>Our <strong>landscaping service</strong> which are available for houseowners, businesses, and organization, include the following: bed care, maintenance, leaf removal, planting, removal of tree and shrub care.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Services Section -->
<div id="services">
  <div class="container">
    <div class="col-md-10 col-md-offset-1 section-title text-center">
      <h2>Our Services</h2>
      <hr>
      <p>We provide multiple services which is one of it should be what you looking for</p>
    </div>
    <div class="row">
      <div class="col-md-3 text-center">
        <div class="service-media"> <a href="gardener-service<?=($extra ? "-".$ori:".php")?>"><img src="http://landscaping.services.com.my/img/BP16_AAG_814x431_Ask_A_Gardener_VERB.jpg" alt="Landscaping Service"></a></div>
        <div class="service-desc">
          <h3><strong>Gardener Service</strong></h3>
          <p>We provide <strong>gardener service</strong> which include normal <strong>gardener</strong>, <strong>contract gardener</strong>, <strong>part time gardener</strong>, and <strong>professional gardener</strong>.</p>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="service-media"> <a href="garden-landscaping-service<?=($extra ? "-".$ori:".php")?>"><img src="http://landscaping.services.com.my/img/IMG_20160710_211658.jpg" alt="Landscaping Service"></a></div>
        <div class="service-desc">
          <h3><strong>Garden Landscaping</strong></h3>
          <p>We have professional, skillful and experience landscape designer which is able to make your living environment beautiful and comfortable.</p>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="service-media"><a href="flower-planting-and-supply<?=($extra ? "-".$ori:".php")?>"><img src="http://landscaping.services.com.my/img/91GT4X-VDUL._SX425_.jpg" alt="Landscaping Service"></a></div>
        <div class="service-desc">
          <h3><strong>Flower Planting Supply</strong></h3>
          <p>Our designer will design and our gardener will follow it and do the <strong>flower planting</strong>. Furthermore, we are doing the <strong>flower supply</strong> for it too.</p>
        </div>
      </div>
      <div class="col-md-3 text-center">
        <div class="service-media"> <a href="garden-sculpture-and-pond-and-fountain<?=($extra ? "-".$ori:".php")?>"><img src="http://landscaping.services.com.my/img/P019B.jpg" alt="Landscaping Service"></a></div>
        <div class="service-desc">
          <h3><strong>Garden Sculpture & Pond & Fountain</strong></h3>
          <p>When you want to build a <strong>garden pond</strong> in your garden or you want to put the <strong>garden sculpture</strong> or <strong>garden fountain</strong> in your garden, we are providing the service too.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Gallery Section -->
<div id="portfolio">
  <div class="container">
    <div class="section-title text-center center">
      <h2>Works</h2>
      <hr>
      
    </div>
    <div class="categories">
      <ul class="cat">
        <li>
          <ol class="type">
            <li><a href="#" data-filter="*" class="active">All</a></li>
            <li><a href="#" data-filter=".gardener">Gardener</a></li>
            <li><a href="#" data-filter=".landscap">Landscaping</a></li>
            <li><a href="#" data-filter=".flower">Flower</a></li>
            <li><a href="#" data-filter=".gardening">Gardening</a></li>

          </ol>
        </li>
      </ul>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="portfolio-items">
        <div class="col-sm-6 col-md-4 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/gardenerlarge.png" title="Gardener Service" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Gardener</h4>
              </div>
              <img src="http://landscaping.services.com.my/img/gardenersmall.png" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/gardener2large.jpg" title="Gardener Service" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Gardener</h4>
              </div>
              <img src="http://landscaping.services.com.my/img/gardener2small.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 landscap">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/landscaplarge.jpg" title="Landscaping Service" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Landscaping</h4>
              </div>
              <img src="http://landscaping.services.com.my/img/landscapsmall.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 landscap">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/landscap2large.jpg" title="Landscaping Service" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Landscaping</h4>
              </div>
              <img src="http://landscaping.services.com.my/img/landscap2small.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 flower">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/flower2large.jpg" title="Flower Planting Service" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Flower Planting</h4>
              </div>
              <img src="http://landscaping.services.com.my/img/flower2small.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 flower">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/flowerlarge.jpeg" title="Flower Planting Service" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Flower Planting</h4>
              </div>
              <img src="http://landscaping.services.com.my/img/flowersmall.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 gardening">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/sculpturelarge.jpg" title="Gardening Service" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Garden</h4>
              </div>
              <img src="http://landscaping.services.com.my/img/sculpturesmall.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 gardening">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/pondlarge.jpg" title="Gardening Service" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Garden</h4>
              </div>
              <img src="http://landscaping.services.com.my/img/pondsmall.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 gardening">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="img/fountainlarge.jpg" title="Gardening Service" data-lightbox-gallery="gallery1">
              <div class="hover-text">
                <h4>Garden</h4>
              </div>
              <img src="http://landscaping.services.com.my/img/fountainsmall.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Testimonials Section -->
<div id="testimonials" class="text-center">
  <div class="overlay">
    <div class="container">
      <div class="section-title">
       
      </div>
      <div class="row">
        <div class="col-md-10 col-md-offset-1">
          <div id="testimonial" class="owl-carousel owl-theme">
            <div class="item">
              <p>Landscaping Service is creative and responsive as they have make a creative garden fountain for my house.</p>
              <p>- John </p>
            </div>
            <div class="item">
              <p>Landscaping Service have done a quick and high quality work for my house new garden pond.</p>
              <p>- Samantha </p>
            </div>
            <div class="item">
              <p>Landscaping Service have design a beautiful and comfortable garden for my house and they have high efficiency of thier work.</p>
              <p>- Alisha </p>
            </div>
            <div class="item">
              <p>The gardener provide by Landscaping Service is friendly and efficiency on thier work.</p>
              <p>- Puan Anita </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<? include 'contact.php' ?>


<? include 'footer.php' ?>

