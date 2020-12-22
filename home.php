<?php
  get_header();
  get_template_part('template-parts/breadcrumb');
?>

<main>

<?php
if ( have_posts() ) :
  while ( have_posts() ) : the_post();
    get_template_part('template-parts/content');
  endwhile;
else:
  _e( 'No posts yet.', 'osterbro' );
endif;
?>

</main>

<?php
  get_template_part('template-parts/aside');
  get_footer();
?>
