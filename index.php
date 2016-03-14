<?php

ob_start();

while(have_posts()) {
    the_post(); ?>
    <div class="blog-post">
        <h3><?php the_title()?></h3>
        <p class="blog-info"><?php the_date()?> by <?php the_author()?></p>
        <?php the_content()?>
    </div> <?php
}

$t_content = ob_get_clean();
include TEMPLATEPATH . '/template.php';