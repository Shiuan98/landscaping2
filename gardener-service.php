<?php
$keyword="Gardener Service";
require "header.php"; ?>

<header id="header">
  <div class="gardenerbg">
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
         
        
        <p style="font-size: 20px;">If you need <strong>garden landscaping service</strong> for your house, we are providing multiple <strong>gardener service</strong> include <strong>normal gardener</strong>, <strong>part time gardener</strong>, <strong>contract gardener</strong>, and <strong>professional gardener</strong>.</p>
</div>
  
<div class="col-sm-6 col-md-4 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#Gardener">
              <div class="hover-text">
                <h4><strong>Gardener</strong></h4>
              </div>
              <img src="http://landscaping.services.com.my/img/gardener-service.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#Part-Time-Gardener">
              <div class="hover-text">
                <h4><strong>Part Time Gardener</strong></h4>
              </div>
              <img src="http://landscaping.services.com.my/img/part-time-gardener-service.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-4 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#contract-gardener">
              <div class="hover-text">
                <h4><strong>Contract Gardener</strong></h4>
              </div>
              <img src="http://landscaping.services.com.my/img/professional-gardener-service.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>

    </div>
  </div>
</section>

<section id="Gardener" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 50px; margin-bottom: 50px;">
        <h2><strong>Gardener Service <?=($extra ? $extra:"")?></strong></h2>
        
        <p id="service"> Our <strong>gardener service</strong> can help you regarding of which stage your garden now. To see whether you have a blank garden which need the design, or you already have a garden but have to rejuvenation. We provide the services you need to have a beautiful garden.
         <? if ($extra) { ?><br><br>Our staff service <strong>Gardener Service</strong> in <strong><?=$extra?></strong> area.<? } ?>
        </p>

      </div>
      <img src="http://landscaping.services.com.my/img/gardener-service-small.jpg" class="service-img " alt="Landscaping Service" style="padding-top: 70px; float: right;"> 


    </div>
  </div>
</section>

<section id="Part-Time-Gardener" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 50px; margin-bottom: 50px;">
        <h2><strong>Part Time Gardener Service <?=($extra ? $extra:"")?></strong></h2>
        
        <p id="service"> Instead of <strong>professional gardener</strong>, we provide <strong>part time gardener service</strong> too. They work 3 days a week and 8 hours a day. As they are not skillful like <strong>professional gardener</strong>, so the price for it will be cheaper.</p>

      </div>
      <img src="http://landscaping.services.com.my/img/part-time-gardener-service-small.jpg" class="service-img " alt="Landscaping Service" style="padding-top: 70px; float: right;"> 


    </div>
  </div>
</section>

<section id="contract-gardener" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 50px; margin-bottom: 50px;">
        <h2><strong>Contract Gardener Service <?=($extra ? $extra:"")?></strong></h2>
        
        <p id="service"> For the <strong>contract gardener service</strong>, we will provide the customers who need a gardener for long term for thier home garden. This <strong>contract gardener</strong> will be staying in the customer house and work for them until the contract end.
        <? if ($extra) { ?><br><br>Our staff service <strong>Gardener Service</strong> in <strong><?=$extra?></strong> area.<? } ?>
        </p>

      </div>
      <img src="http://landscaping.services.com.my/img/professional-gardener-service-small.jpg" class="service-img " alt="Landscaping Service" style="padding-top: 70px; float: right;"> 


    </div>
  </div>
</section>

  


<? include 'contact.php' ?>
<? include 'footer.php' ?>