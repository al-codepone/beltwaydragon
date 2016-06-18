<!doctype html>
<html lang="en">
<head>
    <?wp_head()?>
    <?=$t_head?>
</head>
<body>
    <div id="header">
        <h1><a href="<?bloginfo('wpurl')?>"><?bloginfo('name')?></a></h1>
        <h2><?bloginfo('description')?></h2>
    </div>
    <?=$t_content?>
<?wp_footer()?>
</body>
</html>
