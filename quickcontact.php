 <form method="post" name="contact" action="mail.php">
    <fieldset>
      <legend>Quick Contact</legend>

      <label>Name</label>
      <input type="text" placeholder="Please Enter your Name" name="username">
      <label>Mobile</label>
      <input type="text" name="mobile"placeholder="Please Enter your Mobile Number">
      <label>E-mail</label>
      <input type="text" name="email" placeholder="Please Enter your E-Mail ID">
      <label>Message</label>
      <textarea name="message" placeholder="It would be great to hear from you"></textarea>
    </br>
      <input type="submit" Value="Get in Touch" onclick="return(validation());" class="radius button right">
    </fieldset>
  </form>