<?php
$keyword="Garden Landscaping Service";
require "header.php"; ?>

<header id="header">
  <div class="landscapebg">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text ">
            <h1><strong><?=$keyword?> <?=($extra ? $extra:"")?></strong></h1>
        </div>
      </div>
    </div>
  </div>
</header>
<!-- About Section -->

      
       <section id="about">
      <div class="container">
        <div class="row">
          <!-- <div class="col-xs-12 col-md-6"> -->
           <div class="about-text text-center">
          <h2>Welcome to <span><strong><?=$keyword?> <?=($extra ? $extra:"")?></strong></span></h2>
         
        
        <p style="font-size: 20px;">If you need <strong>garden landscaping service</strong> for your house, we are providing <strong>garden landscaping design and service</strong>. Our landscaping and gardening specialist in specilized in design, installation and construction. Our services include <strong>Landscape</strong>, <strong>Garden design</strong>, <strong>landscape installation and construction</strong> and <strong>landscape maintenance</strong>.
        </p>
</div>
  <div class="col-sm-6 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#landscaped-design">
              <div class="hover-text">
                <h4><strong>Garden Landscaping Design</strong></h4>
              </div>
              <img src="http://landscaping.services.com.my/img/landscaping.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#landscape-service">
              <div class="hover-text">
                <h4><strong>Garden Landscaping Service</strong></h4>
              </div>
              <img src="http://landscaping.services.com.my/img/landscaping2.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>

    </div>
  </div>
</section>

<section id="landscaped-design" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 50px; margin-bottom: 50px;">
        <h2><strong>Garden Landscaping Design <?=($extra ? $extra:"")?></strong></h2>
        
        <p id="service"> We have always provide excellent <strong>Garden Landscaping Design</strong> at a reasonable and affordable prices. It is our responsibility to achieve customers' satisfaction for our <strong>garden landscaping design</strong>. Our professional <strong>garden landscaping design</strong> teams are well trained and experience doing this work. Feel free to contact <strong>Landscaping Service</strong> for know more about our <strong>Garden Landscaping Design service</strong>.
        <? if ($extra) { ?><br><br>Our staff service <strong>Garden Landscaping Service</strong> in <strong><?=$extra?></strong> area.<? } ?>
        </p>

      </div>
      <img src="http://landscaping.services.com.my/img/landscaping-small.jpg" class="service-img " alt="Landscaping Service" style="padding-top: 70px; float: right;"> 


    </div>
  </div>
</section>

<section id="landscape-service" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 50px; margin-bottom: 50px;">
        <h2><strong>Garden Landscaping Service <?=($extra ? $extra:"")?></strong></h2>
        
        <p id="service"> For <strong>garden landscaping service</strong>, we provide <strong>garden landscaping maintenance</strong>, <strong>garden landscaping construction and garden landscaping installation</strong>. All of this services are done by our professional gardeners who is able to make your garden more beautiful. 
           <? if ($extra) { ?><br><br>Our staff service <strong>Garden Landscaping Service</strong> in <strong><?=$extra?></strong> area.<? } ?>
        </p>

      </div>
      <img src="http://landscaping.services.com.my/img/landscaping2-small.jpg" class="service-img " alt="Landscaping Service" style="padding-top: 70px; float: right;"> 


    </div>
  </div>
</section>


  


<? include 'contact.php' ?>
<? include 'footer.php' ?>