<?php

    $demos = [
        1 => [ 'type' => 'html',      'title' => 'Hello World!' ],
        2 => [ 'type' => 'htmlcss',   'title' => 'Lonely Box' ],
        3 => [ 'type' => 'htmlcss',   'title' => 'FlexBox' ],
        4 => [ 'type' => 'htmlcss',   'title' => 'Background Image' ],
        5 => [ 'type' => 'htmlcssjs', 'title' => 'All the Things' ]
    ];

    $id = isset( $_GET['id'] ) && !empty( $_GET['id'] ) ? $_GET['id'] : 1;

    if( array_key_exists( $id, $demos ) ) {
        $title = 'Jotted Demo '.$id.' - '.$demos[$id]['title'];
        $type = $demos[$id]['type'];

        $htmlFile = strpos( $type, 'html' ) !== false ? 'demos/demo'.$id.'.html' : null;
        $cssFile  = strpos( $type, 'css' )  !== false ? 'demos/demo'.$id.'.css'  : null;
        $jsFile   = strpos( $type, 'js' )   !== false ? 'demos/demo'.$id.'.js'   : null;
    }

?>

<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CodePen Demos</title>

        <link rel="stylesheet" href="../codepen.css">
        <link rel="stylesheet" href="css/styles.css">
        <script src="../codepen.js"></script>
    </head>

    <body onload="startCodePen( {html:'<?= $htmlFile ?>', css:'<?= $cssFile ?>', js:'<?= $jsFile ?>'} );">

        <header>
            <h1><?= $title ?></h1>

            <nav id="mainnav">
                <ul>
<?php
    foreach( $demos as $id => $demo ) {
        echo '<li><a href="index.php?id='.$id.'" title="'.$demo['title'].'">Demo '.$id.'</a></li>';
    }
?>
                </ul>
            </nav>
        </header>

        <div id="editor"></div>

    </body>

</html>
