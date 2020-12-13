<?php

get_header();

if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        the_title( '<h2>', '</h2>' );
        the_content();
    endwhile;
else:
    _e( 'No posts yet.', 'osterbro' );
endif;

get_footer();

?>
