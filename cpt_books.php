<?php /* Template Name: cpt_books */
get_header();

?>
<?php
    echo the_post_thumbnail();
?>
    <section id="Services">
    <div class="container">
        <div class="block-heading">
                <h2>BOOKS</h2>
                <p><em>Suggested books :</em></p>
        </div>    
          
        <div class="services-wrapper">
        <?php 
                $args = array('post_type' => 'book');
                $query = new WP_Query($args);
                
                while($query->have_posts()): $query -> the_post();
                ?>
            <div class="each-service">
            
                <div class="service-icon"><i class="fa fa-book" aria-hidden="true"></i>
                </div>
                
                    <h5 class="service-title"><?php the_title();?></h5>
                    <a class="service-description" href="<?php echo the_permalink(); ?>">Read More</a>
                    <ul>
                        <li><?php // set the variable to the value entered for the "Price" custom field
                            $Price = get_post_meta($post->ID, 'Price', true);
                            // check if the price variable has a value
                            if($Price){ ?>
                            <!-- if the price variable has a value and echo out this sentence in addition to the value of the variable -->
                            <p>Price of Book is: <? echo $Price; ?></p>
                            <?php 
                            // if the price variable does not have a value then do the following
                            }else{ 
                            // do nothing
                            }
                            $Author = get_post_meta($post->ID,'Author',true);
                            if($Author){?>
                                <p>Author of book is :<?php echo $Author; ?></p>
                            <?php
                            }else{
                                //Nothing
                            }
                            ?>
			            </li>
                    </ul>
                    
            </div>
            <?php endwhile; ?>

        </div>
    </section>
    
    
   
    <br><br><br>
    
</div>

<?php
numeric_posts_nav(); 

get_footer();

?>
