<?php

$t_head = '<link rel="stylesheet" href="' . get_template_directory_uri() . '/css/single.css"/>';
$t_content = beltwaydragon\single_post_content();
include get_template_directory() . '/src/beltwaydragon/template.php';
