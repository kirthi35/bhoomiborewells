<footer class="row">
    <div class="large-12 columns">
      <hr />
      <div class="row">
        <div class="large-6 columns">
          <p>&copy; Copyright 2013 Bhoomi Bore Wells.</p>
        </div>
        <div class="large-6 columns">
          <ul class="inline-list right">
            <li><a href="index.php">Home</a></li>
            <li><a href="service.php">Service</a></li>
            <!-- <li><a href="#">Link 3</a></li> -->
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>
   
  <script src="js/modernizr.js"></script>
  <script src="js/lean-slider.js"></script>
    
   <script type="text/javascript">
     
     function validation (){
      var name=document.contact.username.value;
      var mobile=document.contact.mobile.value;
      var email=document.contact.email.value;
      var message=document.contact.message.value;

      if(username=="")
      {
        name.placeholder="Enter the name";
        name.focus();
        name.className="input";
        return false;
      }
      if(mobile=="")
      {
        mobile.placeholder="Enter the mobile no";
        mobile.focus();
        mobile.className="input";
        return false;
      }
      if(email=""){
        email.placeholder="Enter the email id";
        email.focus();
        email.className="input";
        return false;
      }
      if(message=""){
        message.placeholder="Enter the message";
        message.focus();
        message.className="input"
        return false;
      }
      return true;

     }
   </script>
    <script type="text/javascript">
     $(document).ready(function() {
        var slider = $('#slider').leanSlider({
            directionNav: '#slider-direction-nav',
            controlNav: '#slider-control-nav'
        });
    });
    </script>
    <script src="js/foundation/foundation.js"></script>
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-46797506-1']);
      _gaq.push(['_setDomainName', 'bhoomiborewells.in']);
      _gaq.push(['_setAllowLinker', true]);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
   
    