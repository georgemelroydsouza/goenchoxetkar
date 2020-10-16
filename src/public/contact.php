<?php
$pageSubTitle = 'Contact';
$menuActive = 'contact';
require("structure/header.php");
?>

  <!-- ##### Breadcrumb Area Start ##### -->
  <div class="breadcrumb-area bg-img bg-overlay jarallax" style="background-image: url('img/bg-img/banner/contact_banner.webp');">
    <div class="container h-100">
      <div class="row h-100 align-items-center">
        <div class="col-12">
          <div class="breadcrumb-text">
            <h2>CONTACT US</h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="famie-breadcrumb">
    <div class="container">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#"><i class="fa fa-home"></i> Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Contact</li>
        </ol>
      </nav>
    </div>
  </div>
  <!-- ##### Breadcrumb Area End ##### -->

  <!-- ##### Contact Information Area Start ##### -->
  <section class="contact-info-area">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <!-- Section Heading -->
          <div class="section-heading text-center">
            <p>CONTACT INFO</p>
            <h2><span>The Best Way</span> To Contact Us</h2>
            <img src="img/core-img/decor2.png" alt="">
          </div>
        </div>
      </div>

      <div class="row">

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="100ms">
            <div class="contact-icon">
              <i class="icon_pin_alt"></i>
            </div>
            <h5>Address</h5>
            <h6>Goa</h6>
          </div>
        </div>

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="500ms">
            <div class="contact-icon">
              <i class="icon_phone"></i>
            </div>
            <h5>Phone</h5>
            <h6>+91 9822 583458</h6>
            <h6>+91 9850 482858</h6>
          </div>
        </div>

        <!-- Single Information Area -->
        <div class="col-12 col-md-4">
          <div class="single-information-area text-center mb-100 wow fadeInUp" data-wow-delay="1000ms">
            <div class="contact-icon">
              <i class="icon_mail_alt"></i>
            </div>
            <h5>Email</h5>
            <h6>info@goenchoxetkar.com</h6>
          </div>
        </div>

      </div>
      <div class="c-border"></div>
    </div>
  </section>
  <!-- ##### Contact Information Area End ##### -->

  <!-- ##### Contact Area Start ##### -->
  <section class="contact-area section-padding-100-0">
    <div class="container">
      <div class="row justify-content-between">

        <!-- Contact Content -->
        <div class="col-12 col-lg-5">
          <div class="contact-content mb-100">
            <!-- Section Heading -->
            <div class="section-heading">
              <p>Contact now</p>
              <h2><span>Get In Touch</span> With Us</h2>
              <img src="img/core-img/decor.png" alt="">
            </div>
            <!-- Contact Form Area -->
            <div class="contact-form-area">
			  	<div class="alert alert-success" id="mail-status" role="alert">
				  Thanks for contacting us! We will be in touch with you shortly.
				</div>
				<div class="alert alert-danger" id="mail-status-error" role="alert">
				</div>
                <div class="row">
                  <div class="col-lg-6">
					<input type="text" class="form-control" id="mail_name" name="name" placeholder="Your Name">
                  </div>
                  <div class="col-lg-6">
                    <input type="email" class="form-control" id="mail_email" name="email" placeholder="Your Email">
                  </div>
                  <div class="col-12">
                    <input type="text" class="form-control" id="mail_subject" name="subject" placeholder="Your Subject">
                  </div>
                  <div class="col-12">
                    <textarea name="message" id="mail_message" class="form-control" cols="30" rows="10" placeholder="Your Message"></textarea>
                  </div>
                  <div class="col-12">
                    <button type="submit" class="btn famie-btn" onClick="sendContact();">Send Message</button>
                  </div>
                </div>
            </div>
          </div>
        </div>

        <!-- Contact Maps -->
        <div class="col-lg-6">
          <div class="contact-maps mb-100">
            <iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=403001%20Goa%20India+(Goemcho%20Xethkar)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- ##### Contact Area End ##### -->

<?php
require("structure/footer.php");