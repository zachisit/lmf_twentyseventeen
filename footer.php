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
            <li><a href="" title="LMF Home">LMF Home</a></li>
            <li><a href="" title="Shipping Rates">Shipping Rates</a></li>
            <li><a href="" title="Inside Louisiana Music Factory">Inside Louisiana Music Factory</a></li>
            <li><a href="" title="Louisiana Music Factory events and updates!">Louisiana Music Factory events and updates!</a></li>
        </ul>
    </div>
    <div id="bottom">
        <p>&copy; 2012-<?php echo date("Y"); ?> <?php echo get_bloginfo( 'name' ); ?></p>
        <p>Hosting provided by <a href="" title="Handsome Cat Hosting">Handsome Cat Hosting</a></p>
    </div>
</footer>
</div><!--/wrapper-->
<?php wp_footer(); ?>

<!--Google Analytics-->
    <!--remove me and replace with client GA code-->
</body>
</html>