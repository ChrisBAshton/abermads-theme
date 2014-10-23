<!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8" />
    <title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    
    <meta name="description" content="The Official Website of the Aberystwyth Elizabethan Madrigal Singers, more affectionately known as 'Mads'." />
    
    <link rel="stylesheet" type="text/css" href="<?php echo get_bloginfo('template_url'); ?>/style.css" />
    <link rel="shortcut icon" href="<?php echo get_bloginfo('template_url'); ?>/favicon.ico" />

    <!-- START GOOGLE ANALYTICS -->
    <script type="text/javascript">

      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-33296344-1']);
      _gaq.push(['_setDomainName', 'abermads.co.uk']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();

    </script>
    <!-- END GOOGLE ANALYTICS -->

    <?php wp_head(); ?>
</head>
<body>

<div id="container">
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
        <form name="subscribe" action="<?php echo get_home_url(); ?>/subscribe/" method="get">            
            <div id="subscribe_section">
                Never miss another concert!
                <br />
                <input type="text" class="form_text" value="your_email@example.com" name="email" onmouseup="clearEmail()" />
                <br />
                <input type="submit" class="form_button" value="Subscribe!" />
            </div>
        </form>
        <hr />
        <a href="http://www.facebook.com/AberMADs" class="no-underline" target="_blank" onmouseover="highlight('facebook')" onmouseout="fade('facebook')"><img src="<?php echo get_bloginfo('template_url'); ?>/css/facebook_faded.png" id="icon_facebook" alt="Facebook Icon" /></a> 
        <a href="http://www.twitter.com/AberMADs" class="no-underline" target="_blank" onmouseover="highlight('twitter')" onmouseout="fade('twitter')"><img src="<?php echo get_bloginfo('template_url'); ?>/css/twitter_faded.png" id="icon_twitter" alt="Twitter Icon" /></a> 
        <a href="http://www.youtube.com/user/AberMADs" class="no-underline" target="_blank" onmouseover="highlight('youtube')" onmouseout="fade('youtube')"><img src="<?php echo get_bloginfo('template_url'); ?>/css/youtube_faded.png" id="icon_youtube" alt="YouTube Icon" /></a> 
        <a href="<?php echo get_home_url(); ?>/contact/" class="no-underline" onmouseover="highlight('email')" onmouseout="fade('email')"><img src="<?php echo get_bloginfo('template_url'); ?>/css/email_faded.png" id="icon_email" alt="Email Icon" /></a>
    </div>

    <div id="main">
