<?php /* Template Name: page-1 */
get_header();

?>
<!-- Banner starts here -->
<section id="HeroBanner">
    <div class="video-container">
        <div class="color-overlay">
            <video autoplay muted loop poster="JBi-Film-Cover-1200x675.jpg">
                <source src="<?php echo get_template_directory_uri()?>/images/Code_flythough_loop_01.mp4" type="video/mp4">
            </video>
        </div>

    </div>
    <div class="hero-content">
        <h1>Welcome to <br>my website</h1>
        <p>Created by Ojas</p>
        <a href="http://localhost/wordpress/#Footer" class="hero-cta">Social Media Info</a>
    </div>
    
</section>

<!-- Banner ends here -->

<!-- Services section starts here -->

<section id="Services">
    <div class="container">
        <div class="block-heading">
                <h2>Services</h2>
                <p><em>Services we offer :</em></p>
        </div>    
          
        <div class="services-wrapper">
        <?php 
                $args = array('post_type' => 'book');
                $query = new WP_Query($args);
                
                while($query->have_posts()): $query -> the_post();
                ?>
            <div class="each-service">
            
                <div class="service-icon"><i class="fa fa-wordpress" aria-hidden="true"></i>
                </div>
                
                    <h5 class="service-title"><?php the_title();?></h5>
                    <a class="service-description" href="<?php echo the_permalink(); ?>">Read More</a>
                    
                  
                    <br><br>
            </div>
<?php endwhile; ?>
    </div>
</section>
<!-- Services section ends here -->
<!-- About Us section starts here -->
<section id="About">
    <div class="container">

        <div class="about-wrapper">
            <h2>About Us</h2>
            <p><em>"We don't just build websites, we build websites that SELLS".<br>― Christopher Dayagdag<br><br>"Writing the first 90 percent of a computer program takes 90 percent of the time. The remaining ten percent also takes 90 percent of the time and the final touches also take 90 percent of the time ". <br> – N.J. Rubenking</em></p>
        </div>
    </div>
</section>
<!-- About Us section ends here -->
<!-- Portfolio section starts here -->
<section id="Portfolio">
    <div class="container">
        <div class="block-heading">
            <h2>Portfolio</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        </div>
        <div class="portfolio-wrapper clearfix">
            <a class="each-portfolio" data-fancybox="gallery" href="<?php echo get_template_directory_uri(); ?>/images/p-one.jpg">
            <img src="<?php echo get_template_directory_uri(); ?>/images/p-one.jpg" alt="p-one">
            <div class="hover-cont-wrap">
                <div class="hover-cont-block">
                   <h5 class="p-title">Title</h5>
                    <div class="p-desc">
                        <div>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                        <div class="icon-div"><i class="fa fa-search-plus" aria-hidden="true"></i></div>
                    </div>
                </div>
            </div>
           </a>
        </div>
    </div>
</section>
<!-- Portfolio section ends here -->
<section id="Testimonial">
    <div class="testimonial-wrap">
  <div class="container">
    <div class="block-heading">
      <h2>What Clients Say About Us</h2>
    </div>
    <ul class="testimonial-slider">
      <li>" I would like to thank Click and the team for the fantastic work<br> on content writing for my site. "</li>
      <li>" I'd say that the team is excellent and it is some of the best service<br> I have received both online and offline in a long time. "</li>
      <li>" It's been great working with you. The content is also great. I can certainly recommend your<br> services to others as cost effective services. "</li>
    </ul>
  </div>
</div>
</section>
<!-- Contact us section starts here -->
<section id="ContactUs">
    <div class="container contact-container">
        <h3 class="contact-title">Get In Touch</h3>
        <div class="contact-outer-wrapper">
            <div class="address-block">
                <p class="add-title">Contact Details</p>
                <div class="c-detail">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3503.705356197282!2d77.3132221141617!3d28.57860918243916!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce45b86d9529d%3A0x9e804bb4b0da84b1!2sJBi+Digital!5e0!3m2!1sen!2sin!4v1561536499299!5m2!1sen!2sin" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    <span class="c-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></span> <span class="c-info">JBi Digital, A Block, Sector 16, Noida, Uttar Pradesh</span>
                </div>
                <div class="c-detail">
                    <span class="c-icon"><a href="tel:0120 411 9481"><i class="fa fa-phone" aria-hidden="true"></i></a></span> <span class="c-info">0120 411 9481</span>
                </div>
                <div class="c-detail">
                    <span class="c-icon"><a href='mailto:contact@jbigital.co.uk'><i class="fa fa-envelope" aria-hidden="true"></i></a></span> <span class="c-info">contact@jbidigital.co.uk</span>
                </div>
            </div>
            <div class="form-wrap">
                <p class="add-title">Send Us Message</p>
                <form method='post' action='<?php echo get_template_directory_uri(); ?>/act.php' >
                    <div class="fname floating-label">
                        <input type="text" class="floating-input" name="full name" id="full-name-field" />
                        <label for="full-name-field">Full Name</label>
                    </div>
                    <div class="email floating-label">
                        <input type="email" class="floating-input" name="email" id="mail-field" />
                        <label for="mail-field">Email</label>
                    </div>
                    <div class="contact floating-label">
                        <input type="tel" class="floating-input" name="contact" id="contact-us-field" />
                        <label for="contact-us-field">Contact</label>
                    </div>
                    <div class="company floating-label">
                        <input type="text" class="floating-input" name="company" id="company-field" />
                        <label for="company-field">Company</label>
                    </div>
                    <div class="user-msg floating-label">
                        <textarea class="floating-input" name="user message" id="user-msg-field"></textarea>
                        <label for="user-msg-field" class="msg-label">Your Message</label>
                    </div>
                    <div class="submit-btn">
                        <button type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact us section ends here -->


<?php

get_footer();

?>
