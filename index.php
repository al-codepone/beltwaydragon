<?php

ob_start();

while(have_posts()) {
    the_post(); ?>
    <div class="blog-post">
        <h3><?the_title()?></h3>
        <p class="blog-info"><?the_date()?> by <?the_author()?></p>
        <?the_content()?>
    </div> <?php
}

$t_content = ob_get_clean();
include TEMPLATEPATH . '/template.php';
