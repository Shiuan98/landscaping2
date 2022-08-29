
<?include "header.php";?>
<?include "general-submit.php";?>

<section class="pb_section" data-section="contact" id="section-contact">
  <div id="contact" class="text-center">
  <div class="container">

    <div class="section-title text-center">
      <h2>Contact Us</h2>
        <hr>
      <p>If you need a gardener or garden landscaping service, Landscaping Service is always your first choice.</p>
      <p>Contact US and book your service NOW.</p>
    </div>

    <!-- <div class="col-md-10 col-md-offset-1 contact-info">
      <div class="col-md-4">
        <h3>Address</h3>
        <hr>
        <div class="contact-item">
          <p>123 Petaling Jaya</p>
          <p>Kuala Lumpur</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Working Hours</h3>
        <hr>
        <div class="contact-item">
          <p>Monday-Saturday: 07:00 - 18:00</p>
          <p>Sunday: CLOSED</p>
        </div>
      </div>
      <div class="col-md-4">
        <h3>Contact Info</h3>
        <hr>
        <div class="contact-item">
          <p>Phone: 012-3456789</p>
          <p>Email: info@company.com</p>
        </div>
      </div>
    </div> -->
    <div class="col-md-8 col-md-offset-2">
      <h3>Leave us a message</h3>
        <form action="" method="POST">
          <?include 'notification.php'?>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="text"  class="form-control" placeholder="Name" id="name" name="name" value="<?=$name?>">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" id="phone" placeholder="Phone" name="phone" value="<?=$phone?>">
              </div>
            </div>
      <div class="col-md-6">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Service" id="service" name="service" value="<?=$service?>">
              </div>
            </div>
          </div>
          <div class="form-group">
            <textarea  rows="2" class="form-control" id="address" name="address" placeholder="Address" value="<?=$address?>"></textarea>
          </div>
          <div class="form-group">
            <textarea  rows="4" class="form-control" placeholder="Message" id="message" name="message"><?if(isset($message)) echo $message;?></textarea>
            <input type="hidden" name="source" value="<?=$source?>">
          </div>
          <div class="g-recaptcha" data-sitekey="6LciUKEUAAAAAMgJU4Z4MkKniEKhE2BZs2RVS53k"></div>
          <div class="form-group">
            
            <input type="submit" name="submit-contact" class="btn btn-custom btn-lg" value="Send Message">
          </div>
        </form>
      </div>
      
    </div>

  </div>
</section>
<!-- END section -->



