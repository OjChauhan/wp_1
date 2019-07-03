<?php /*Template Name: page_for_blog*/
get_header();
?>
<?php
the_post_thumbnail();
?>
<section id="Services">
    <div class ="container">
        <div class="block-heading">
            <h2>Books we offer:</h2>
        </div>
        <div class="services-wrapper">
        <?php 
        // $args=arrary('post_type'=>'post');
        // $query=WP_Query($args);
        while(have_posts()):the_post();
        ?>
        <div class="each-service">
            <!--icon -->
            <div class="service-icon"><i class="fa fa-home" aria-hidden=true></i>
            </div>
            <h5 class="service-title"><?php the_title(); ?></h5>
            <p class="service-description"><?php the_content();?></p>  
        </div>
        <?php endwhile?>
        </div>
    </div>
</section>

<?php
get_footer();
?>