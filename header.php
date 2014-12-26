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

    <?php get_sidebar(); ?>

    <div id="main">
