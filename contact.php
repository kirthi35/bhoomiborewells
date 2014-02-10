<!doctype html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" data-useragent="Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)">
  <head>
   <?php
      require('header.php');
   ?>
   
    <title>Contact Bhoomi Bore Wells | Bore Wells in Banglore | No 1 Borewells in Banglore | Best Bore wells in Banglore</title>

  </head>
  <body>
  <?php require('logo.php');?>
  
<!-- End Header and Nav -->

<!-- First Band (Slider) -->

  <div class="row">
    <div class="large-12 columns">
      <?php require('slider.php');?>
      <hr />
    </div>
  </div>
  
  <div class="row">
    <div class="large-6 small-6 columns">
      <form method="post" action="mail.php">
        <div class="row">
          <div class="large-12 small-12 columns">
             <label>Name</label>
             <input type="text"name="name" placeholder="Enter your Name" />
          </div>
          <div class="large-12 small-12 columns">
             <label>Mobile</label>
             <input type="text" name="mobile"placeholder="Enter your Mobile Number" />
          </div>
          <div class="large-12 small-12 columns">
             <label>E-Mail</label>
             <input type="text" name="email"placeholder="Enter your E-Mail ID" />
          </div>
          <div class="large-12 small-12 columns">
             <label>Message</label>
             <textarea type="text"name="message" placeholder="Message"></textarea>
          </div>
          <div class="large-12 small-12 columns">
            <br>
            <input type="submit" Value="Get in Touch" class="radius button right ">
          </div>
        </div>
      </form>
    </div>
    <div class="large-6 small-6 columns">
      <div class="panel">
        <h2>Contact Us</h2>
        <p>Bhoomi Borewells & pumps <br>
            #6, D.B.Road, Near Police station Circle,<br>Yelanka, 
            Bangalore-64.<br>
            Cell +91 99865 50999 <br>

            &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;+91 96201 56598 <br>

            &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;+91 94488 11119
        </p>
      </div>
      <br>
      <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d124389.08656710113!2d77.59198677724612!3d13.025547689170036!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sbhoomiborewells!5e0!3m2!1sen!2s!4v1390136659977" width="400" height="300" frameborder="0" style="border:0"></iframe>
    </div>
  </div>  
  <!-- Footer -->
  <?php
    require('footer.php')
  ?>
  
  </body>
</html>