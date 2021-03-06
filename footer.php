<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tater
 */
?>
<!-- new server 2/12/2020 -->
<footer>
    <ul class="footer_social">
            <li><a href="https://www.facebook.com/LouisianaMusicFactory" title="<?php echo get_bloginfo( 'name' ); ?> Facebook" target="_blank"><i class="fab fa-facebook-square" aria-hidden="true"></i>
                </a></li>
            <li><a href="https://twitter.com/LMFnola" title="<?php echo get_bloginfo( 'name' ); ?> Twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>
                </a></li>
            <li><a href="http://www.youtube.com/user/LAMUSICFACTORY" title="<?php echo get_bloginfo( 'name' ); ?> YouTube" target="_blank"><i class="fa fa-youtube" aria-hidden="true"></i>
                </a></li>
        <li><a href="https://www.instagram.com/louisianamusicfactory/" title="<?php echo get_bloginfo( 'name' ); ?> Instagram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
            </a></li>
        </ul>
    <?php wp_nav_menu( [ 'theme_location' => 'footer_menu' ] ); ?>
    <div id="bottom">
        <p class="copyright">&copy; 2012-<?=date("Y")?> <?=get_bloginfo( 'name' )?> - v<?=THEME_VERSION?></p>
        <p class="hosting-and-version">Hosting provided by <a href="http://www.handsomecathosting.com" title="Handsome Cat Hosting" target="_blank">Handsome Cat Hosting</a> - Made in the USA <img src="https://cdn.louisianamusicfactory.com/site-assets/usa_flag.jpg" alt="USA flag" /></p>
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
