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

        if( strpos( $type, 'html' ) !== false ) $htmlFile = 'demos/demo'.$id.'.html';
        if( strpos( $type, 'css' )  !== false ) $cssFile  = 'demos/demo'.$id.'.css';
        if( strpos( $type, 'js' )   !== false ) $jsFile   = 'demos/demo'.$id.'.js';
    }

    $theme    = 'dark';
    $height   = '80vh';
    $localCSS = 'css/styles.css';

    include_once '../top.php';
?>

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

<?php
    include_once '../bottom.php';
?>
