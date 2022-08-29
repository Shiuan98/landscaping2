<?php
$keyword="Garden Sculpture & Pond & Fountain";
require "header.php"; ?>

<header id="header">
  <div class="gardenbg">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 intro-text ">
            <h1><?=$keyword?> <?=($extra ? $extra:"")?></h1>
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
         
        
        <p style="font-size: 20px;">If you need <strong>garden sculpture</strong>, <strong>garden pond</strong>, and <strong>garden fountain</strong> to decorate your house, we are selling these products too and we are providing the service for installing it.</p>
</div>
  

    <div class="col-sm-6 col-md-4 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#sculpture">
              <div class="hover-text">
                <h4><strong>Garden Sculpture</strong></h4>
              </div>
              <img src="http://landscaping.services.com.my/img/garden-sculpture- three-arcs-A.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#pond">
              <div class="hover-text">
                <h4><strong>Garden Pond</strong></h4>
              </div>
              <img src="http://landscaping.services.com.my/img/Pond-installation.png" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#fountain">
              <div class="hover-text">
                <h4><strong>Garden Fountain</strong></h4>
              </div>
              <img src="http://landscaping.services.com.my/img/lutyens-garden-fountain.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
    </div>
  </div>
</section>


<section id="sculpture" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 50px; margin-bottom: 50px;">
        <h2><strong>Garden Sculpture <?=($extra ? $extra:"")?></strong></h2>
        
        <p id="service"> <strong>Landscaping Service</strong> contains a variety of public art installations by renowned artists. These <strong>garden sculptures</strong> are made from materials such as glass, steel, marble, iron, and wood. Customer can design the sculpture by themselves and we will help to produce the <strong>garden sculpture</strong>.
        <? if ($extra) { ?><br><br>Our staff service <strong>Garden Service</strong> in <strong><?=$extra?></strong> area.<? } ?>
        </p>

      </div>
      <img src="http://landscaping.services.com.my/img/garden-sculpture- three-arcs-A-small.jpg" class="service-img " alt="Landscaping Service" style="padding-top: 70px; float: right;"> 


    </div>
  </div>
</section>

<section id="pond" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 50px; margin-bottom: 50px;">
        <h2><strong>Garden Pond <?=($extra ? $extra:"")?></strong></h2>
        
        <p id="service"> <strong>Landscaping Service</strong> has experience in the landscaping and the water garden industries. <strong>Landscaping Service</strong> recognized for excellence and offering only the best quality pond products and services. <strong>Landscaping Service</strong> provides full design and construction of your pond.</p>

      </div>
      <img src="http://landscaping.services.com.my/img/Pond-installation-small.png" class="service-img " alt="Landscaping Service" style="padding-top: 70px; float: right;"> 


    </div>
  </div>
</section>

<section id="fountain" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 50px; margin-bottom: 50px;">
        <h2><strong>Garden Fountain <?=($extra ? $extra:"")?></strong></h2>
        
        <p id="service"> <strong>Landscaping Service</strong> has also provide service in installing <strong>garden fountain</strong>. <strong>Garden fountain service</strong> can come with <strong>garden pond service</strong> together. Our team have many years of experience in <strong>garden fountain installtion</strong>.
        <? if ($extra) { ?><br><br>Our staff service <strong>Garden Service</strong> in <strong><?=$extra?></strong> area.<? } ?>
        </p>

      </div>
      <img src="http://landscaping.services.com.my/img/lutyens-garden-fountain-small.jpg" class="service-img " alt="Landscaping Service" style="padding-top: 70px; float: right;"> 


    </div>
  </div>
</section>

  


<? include 'contact.php' ?>
<? include 'footer.php' ?>