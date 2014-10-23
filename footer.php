    </div>
</div>

<?php wp_footer(); ?>

<div id="footer">
    Copyright &copy; 2012-<?php echo date("Y", time()); ?> Elizabethan Madrigal Singers, Aberystwyth.
</div>


<script type="text/javascript">
    var icon_facebook = new Image();
        icon_facebook.src = "/css/facebook_faded.png";
    var icon_facebook_highlight = new Image();
        icon_facebook_highlight.src = "/css/facebook.png";
        
    var icon_twitter = new Image();
        icon_twitter.src = "/css/twitter_faded.png";
    var icon_twitter_highlight = new Image();
        icon_twitter_highlight.src = "/css/twitter.png";

    var icon_youtube = new Image();
        icon_youtube.src = "/css/youtube_faded.png";
    var icon_youtube_highlight = new Image();
        icon_youtube_highlight.src = "/css/youtube.png";
        
    var icon_email = new Image();
        icon_email.src = "/css/email_faded.png";
    var icon_email_highlight = new Image();
        icon_email_highlight.src = "/css/email.png";
    
    function highlight(social_button) { 
        if(social_button == "facebook") {
            document.getElementById('icon_facebook').src = icon_facebook_highlight.src;
        }
        else if(social_button == "twitter") {
            document.getElementById('icon_twitter').src = icon_twitter_highlight.src;
        }
        else if(social_button == "youtube") {
            document.getElementById('icon_youtube').src = icon_youtube_highlight.src;
        }
        else if(social_button == "email") {
            document.getElementById('icon_email').src = icon_email_highlight.src;
        }
    }
    
    function fade(social_button) {  
        if(social_button == "facebook") {
            document.getElementById('icon_facebook').src = icon_facebook.src;
        }
        else if(social_button == "twitter") {
            document.getElementById('icon_twitter').src = icon_twitter.src;
        }
        else if(social_button == "youtube") {
            document.getElementById('icon_youtube').src = icon_youtube.src;
        }
        else if(social_button == "email") {
            document.getElementById('icon_email').src = icon_email.src;
        }
    }
    
    function clearEmail() {
        if(document.subscribe.email.value == "your_email@example.com") {
            document.subscribe.email.value = "";
        }
    }
</script>


</body>
</html>