    <div id="menu_left">
        <br />
        <a href="<?php echo get_home_url(); ?>" class="no-underline"><img src="<?php echo get_bloginfo('template_url'); ?>/css/mads_logo.jpg" alt="Elizabethan Madrigal Singers of Aberystwyth - Logo" width="180" height="346" /></a>
        <hr />
        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container'      => false,
            'menu_class'     => 'dropdown dropdown-horizontal'
        ));
        ?>
        <hr />
        <a href="http://www.facebook.com/AberMADs" class="no-underline" target="_blank"><img src="<?php echo get_bloginfo('template_url'); ?>/css/facebook_faded.png" id="icon_facebook" alt="Facebook Icon" /></a>
        <a href="http://www.twitter.com/AberMADs" class="no-underline" target="_blank"><img src="<?php echo get_bloginfo('template_url'); ?>/css/twitter_faded.png" id="icon_twitter" alt="Twitter Icon" /></a>
        <a href="http://www.youtube.com/user/AberMADs" class="no-underline" target="_blank"><img src="<?php echo get_bloginfo('template_url'); ?>/css/youtube_faded.png" id="icon_youtube" alt="YouTube Icon" /></a>
        <a href="<?php echo get_home_url(); ?>/contact/" class="no-underline"><img src="<?php echo get_bloginfo('template_url'); ?>/css/email_faded.png" id="icon_email" alt="Email Icon" /></a>
    </div>