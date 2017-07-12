<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tater
 */
?>
<footer>
    <div id="left">
        <ul>
            <li><a href="https://www.facebook.com/LouisianaMusicFactory" title="<?php echo get_bloginfo( 'name' ); ?> Facebook" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i>
                </a></li>
            <li><a href="https://twitter.com/LMFnola" title="<?php echo get_bloginfo( 'name' ); ?> Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>
                </a></li>
            <li><a href="http://www.youtube.com/user/LAMUSICFACTORY" title="<?php echo get_bloginfo( 'name' ); ?> YouTube" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i>
                </a></li>
        </ul>
    </div>
    <div id="right">
        <ul>
            <li><a href="<?php echo get_home_url(); ?>" title="LMF Home">LMF Home</a></li>
            <li><a href="<?php echo get_home_url(); ?>/shipping-rates/" title="Shipping Rates">Shipping Rates</a></li>
            <li><a href="<?php echo get_home_url(); ?>/inside-louisiana-music-factory/" title="Inside Louisiana Music Factory">Inside Louisiana Music Factory</a></li>
            <li><a href="<?php echo get_home_url(); ?>/lmf-news/" title="Louisiana Music Factory events and updates!">Louisiana Music Factory events and updates!</a></li>
        </ul>
    </div>
    <div id="bottom">
        <p>&copy; 2012-<?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?></p>
        <p>Hosting provided by <a href="http://www.handsomecathosting.com" title="Handsome Cat Hosting" target="_blank">Handsome Cat Hosting</a></p>
    </div>
</footer>
</div><!--/wrapper-->
<?php wp_footer(); ?>

<!--Google Analytics - re-added 07/12/2017-->
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-43442088-1', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>