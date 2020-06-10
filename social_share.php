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
            echo '<div class="fb-share-button" data-href="'. $current_url .'" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='. $current_url .'%2F&amp;src=sdkpreparse">Share</a></div>';
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
        <li>
            <?php
            //reddit
            //@source; https://www.reddit.com/buttons/
            echo '<a href="//www.reddit.com/submit" onclick="window.location = \'//www.reddit.com/submit?url=\' + encodeURIComponent(window.location); return false"> <img src="//www.redditstatic.com/spreddit7.gif" alt="submit to reddit" border="0" /> </a>';
            ?>
        </li>
        <li>
            <?php
            //google +
            //@source; https://developers.google.com/+/web/share/
            ?>
            <g:plus action="share"></g:plus>
        </li>
        <li>
            <?php
            //pinterest
            //@source; https://developers.pinterest.com/docs/widgets/save/
            ?>
            <script
                    type="text/javascript"
                    async defer
                    src="//assets.pinterest.com/js/pinit.js"
            ></script>
            <a href="https://www.pinterest.com/pin/create/button/">
                <img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_gray_20.png" />
            </a>
        </li>
        <li>
            <?php
            //tumblr
            //@source;https://www.tumblr.com/docs/en/share_button
            ?>
            <a class="tumblr-share-button" href="https://www.tumblr.com/share"></a>
            <script id="tumblr-js" async src="https://assets.tumblr.com/share-button.js"></script>
        </li>
    </ul>
</div>