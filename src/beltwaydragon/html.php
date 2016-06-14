<?php

namespace beltwaydragon;

function get_posts() {
    ob_start();

    while(have_posts()) {
        the_post(); ?>
        <div class="blog-post">
            <h3><a href="<?the_permalink()?>"><?the_title()?></a></h3>
            <p class="blog-info"><?the_date()?> by <?the_author()?></p>
            <?the_content()?>
        </div> <?php
    }

    return ob_get_clean();
}
