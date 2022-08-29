<?php
$keyword="Flower Planting And Supply";
require "header.php"; ?>

<header id="header">
  <div class="flowerbg">
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
         
        
        <p style="font-size: 20px;">If you need <strong>flower planting service</strong> for your house or <strong>flower supply</strong>, we are doing <strong>flower supply</strong> for gardening and <strong>flower planting service</strong>.</p>
</div>
  

    <div class="col-sm-6 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#flower-supply">
              <div class="hover-text">
                <h4><strong>Flower Supply</strong></h4>
              </div>
              <img src="http://landscaping.services.com.my/img/flowersupply.jpg" class="img-responsive" alt="Landscaping Service"> </a> </div>
          </div>
        </div>
        <div class="col-sm-6 gardener">
          <div class="portfolio-item">
            <div class="hover-bg"> <a href="#planting-service">
              <div class="hover-text">
                <h4><strong>Flower Planting Service</strong></h4>
              </div>
              <img src="http://landscaping.services.com.my/img/planting-geranium-red-flower-flower-pot-shutterstock-com_12598.jpg" class="img-responsive" alt="Project Title"> </a> </div>
          </div>
        </div>

    </div>
  </div>
</section>



<section id="flower-supply" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 50px; margin-bottom: 50px;">
        <h2><strong>Flower Supply <?=($extra ? $extra:"")?></strong></h2>
        
        <p id="service"> <strong>Landscaping Service</strong> is one of the flowers supplier in Malaysia. We are providing flower for gardening. <strong>Landscaping Service</strong> is a wholesaler in fresh cut flowers market more than 10 years experience. We are also supplying local and imported flowers to customer.
        <? if ($extra) { ?><br><br>Our staff service <strong>Flower Planting and Supply Service</strong> in <strong><?=$extra?></strong> area.<? } ?>
        </p>

      </div>
      <img src="http://landscaping.services.com.my/img/flowersupply-small.jpg" class="service-img " alt="Landscaping Service" style="padding-top: 70px; float: right;"> 


    </div>
  </div>
</section>

<section id="planting-service" class="">
      <div class="container">
        <div class="row">
          <div class="col-lg-6" style="margin-top: 50px; margin-bottom: 50px;">
        <h2><strong>Flower Planting Service <?=($extra ? $extra:"")?></strong></h2>
        
        <p id="service"> Planting in flower bed is an easy way to give your property's landscape pops of color and charming details. However, the process can be more complicated than you think. We will find the right flowers, shrubs and other plants to give the property perfect look, and we will help them live happily. We will keep your flower beds and other landscape features looking thier best.
        <? if ($extra) { ?><br><br>Our staff service <strong>Flower Planting and Supply Service</strong> in <strong><?=$extra?></strong> area.<? } ?>
        </p>

      </div>
      <img src="http://landscaping.services.com.my/img/planting-geranium-red-flower-flower-pot-shutterstock-com_12598-small.jpg" class="service-img " alt="Landscaping Service" style="padding-top: 70px; float: right;"> 


    </div>
  </div>
</section>

  


<? include 'contact.php' ?>
<? include 'footer.php' ?>