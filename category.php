<?php

get_header();

if (have_posts()):
    while(have_posts()): the_post();
?>

<h1><?php the_title(); ?></h1>
<sup><?php echo get_the_date(); ?></sup>

<?php the_content(); ?>

<?php
    endwhile;
endif;

get_footer();

?>