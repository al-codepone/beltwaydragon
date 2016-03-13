<!doctype html>
<html lang="en">
<head>
    <?php wp_head()?>
</head>
<body>
    <div id="header">
        <h1><?php bloginfo('name')?></h1>
        <h2><?php bloginfo('description')?></h2>
    </div>
    <?php

        while(have_posts()) {
	    the_post(); ?>
            <div class="blog-post">
                <h3><?php the_title()?></h3>
                <p class="blog-info"><?php the_date()?> by <?php the_author()?></p>
                <?php the_content()?>
            </div> <?php
        }

    ?>
<?php wp_footer()?>
</body>
</html>
