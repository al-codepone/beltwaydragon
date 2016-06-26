<?php

namespace beltwaydragon;

//
function home_content() {
    ob_start();

    while(have_posts()) {
        the_post();
        echo single_post_html();
    }

    $page_links = array();

    if($prev_link = get_previous_posts_link('< Previous Page')) {
        $page_links[] = $prev_link;
    }

    if($next_link = get_next_posts_link('Next Page >')) {
        $page_links[] = $next_link;
    }

    if($page_links) {
        printf('<div>%s</div>', implode(' ', $page_links));
    }

    return ob_get_clean();
}

//
function single_post_content() {
    ob_start();

    if(have_posts()) {
        the_post();
        echo single_post_html();
        wp_list_comments(
            array(),
            get_comments(array('post_id' => get_the_ID())));

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
        <h2><a href="<?the_permalink()?>"><?the_title()?></a></h2>
        <p class="blog-info"><?the_date()?> by <?the_author()?></p>
        <?the_content()?>
    </div> <?php

    return ob_get_clean();
}
