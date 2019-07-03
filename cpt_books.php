<?php /* Template Name: cpt_books */
get_header();

?>
<?php
    echo the_post_thumbnail();

    $args = array('post_type' => 'book');
    $query = new WP_Query($args);
    while($query->have_posts()): $query -> the_post();
    ?>
    <div class="BookImages">
    <a href='<?php the_permalink(); ?>'><?php echo the_post_thumbnail();?></a>
    </div>
    <div class='book'>
    <h2><?php the_title();?></h2>
    </div>
    
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
    <a href="<?php the_permalink(); ?>">Read More</a>
    <br><br><br>
    
</div>
<?php endwhile; ?>
<?php
numeric_posts_nav(); 

get_footer();

?>
