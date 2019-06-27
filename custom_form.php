<?php /* Template Name: Custom_form*/


get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			the_post_thumbnail();

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

                get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.
			?>
            <!DOCTYPE html>
                <html lang="en">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <meta http-equiv="X-UA-Compatible" content="ie=edge">
                    <link rel="stylesheet" href="css/style.css">
                </head>
                <body>
                    <div id="myform">
                        <form  action ="opt/lampp/htdocs/wordpress/wp-content/themes/twentynineteen/act.php" method="post">
                            <div>
                            <label for = "Name">NAME</label>
                            <input type="text" name="Name" id="Name">
                            </div>
                            <div>
                            <label for="Email" >Email</label>
                            <input type="email" name="Email" id="Email">
                            </div>
                            <input type="reset">
                            <input type="submit">
                        </form>
                    </div>
                </body>
                </html>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
?>
