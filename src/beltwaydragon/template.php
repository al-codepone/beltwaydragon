<!doctype html>
<html lang="en">
<head>
    <?wp_head()?>
    <?=$t_head?>
</head>
<body>
    <div id="main">
        <div id="header">
            <h1><a href="<?bloginfo('wpurl')?>"><?bloginfo('name')?></a></h1>
            <span><?bloginfo('description')?></span>
        </div>
        <?=$t_content?>
    </div>
<?wp_footer()?>
</body>
</html>
