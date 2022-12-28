      <!-- Footer -->
         <footer id="footer">

            <div class="inner">
   <?php if ($submitted) : ?>
      <?php if (!($valid_email) || empty($message)) : ?>
         <div><p style="text-align: center; color: #ffcc33">Please provide both a valid email address and your message.</p></div>
      <?php else : ?>
         <div><p style="text-align: center; color: #ffffff">Your request has been sent. We will contact you shortly.</p></div>
      <?php endif ?>
   <?php endif ?>

               <h3>Get in touch</h3>

               <form action="#footer" method="post">

                  <div class="field half first">
                     <label for="name">Name</label>
                     <input name="name" id="name" type="text" placeholder="Name">
                  </div>
                  <div class="field half">
                     <label for="email">Email</label>
                     <input name="email" id="email" type="email" placeholder="Email">
                  </div>
                  <div class="field">
                     <label for="message">Message</label>
                     <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                  </div>
                  <ul class="actions">
                     <li><input value="Send Message" name="submit" class="button alt" type="submit"></li>
                  </ul>
               </form>

<!--
             <form action="?" method="POST">
               <div class="g-recaptcha" data-sitekey="6LdR-akUAAAAAMoNPkRAWmuX4n7_V9HviguKu2_m"></div>
               <br/>
               <input type="submit" value="Submit">
             </form>
-->

               <div class="copyright">
                  &copy; <?php echo date('Y') ?> - Lucid Media Concepts. Images: <a href="https://unsplash.com">Unsplash</a>.
               </div>

            </div>
         </footer>
