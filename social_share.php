<?php
/**
 * Social Share Links
 *
 * So that we do not have to use a horrible plugin
 * #youknowthis
 */
//get and store current page
global $wp;
$current_url = home_url(add_query_arg(array(),$wp->request)); ?>

<div id="social_share">
    <ul>
        <li>
            <?php
            //facebook
            //@source: https://developers.facebook.com/docs/plugins/share-button
            echo '<div class="fb-share-button" data-href="http://www.google.com" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='. $current_url .'%2F&amp;src=sdkpreparse">Share</a></div>';
            ?>
        </li>
        <li>
            <?php
            //twitter
            //@source: https://publish.twitter.com/#
            echo '<a href="https://twitter.com/share" class="twitter-share-button" data-show-count="false">Tweet</a><script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>';
            ?>
        </li>
        <li>
            <?php
            //email
            echo '<a href="mailto:?subject=I wanted you to see this site&amp;body=Check out this site '. $current_url .'"
   title="Share by Email">
  <div class="share_email_button">Share via Email <i class="fa fa-envelope-o" aria-hidden="true"></i></div>
</a>';
            ?>
        </li>
    </ul>
</div>