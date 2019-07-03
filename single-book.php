<?php 
get_header();
?>

<?php 
    echo the_post_thumbnail();
?>
<h2><?php the_title(); ?></h2>
<?php 
    $Price = get_post_meta($post->ID,'Price',true);
    if($Price){?>
    <p><strong>Price of Book is :</strong> <?php echo $Price; ?></p>
    <?php
    }else{
        //Nothing
    }
?>

<?php
while(have_posts())
    the_post();
get_footer();
?>