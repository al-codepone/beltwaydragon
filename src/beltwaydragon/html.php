<?php

namespace beltwaydragon;

//
function home_content() {
    ob_start();

    while(have_posts()) {
        the_post();
        echo single_post_html();
    }

    return ob_get_clean();
}

//
function single_post_content() {
    ob_start();

    if(have_posts()) {
        the_post();
        echo single_post_html();
        comment_form();
    }
    else {
        echo 'throw a 404 here';
    }

    return ob_get_clean();
}

//
function single_post_html() {
    ob_start(); ?>

    <div class="blog-post">
        <h3><a href="<?the_permalink()?>"><?the_title()?></a></h3>
        <p class="blog-info"><?the_date()?> by <?the_author()?></p>
        <?the_content()?>
    </div> <?php

    return ob_get_clean();
}
