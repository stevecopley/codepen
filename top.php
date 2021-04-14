<?php
    if( !isset( $title ) ) $title = "TITLE MISSING";
?>

<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?= $title ?></title>

        <?php if( isset( $localCSS ) ) { ?>
            <link rel="stylesheet" href="<?= $localCSS ?>">
        <?php } ?>

        <link rel="stylesheet" href="/codepen/lib/codemirror/lib/codemirror.css">
        <link rel="stylesheet" href="/codepen/lib/codemirror/addon/scroll/simplescrollbars.css">

        <link rel="stylesheet" href="/codepen/css/waimea-dark.css">
        <link rel="stylesheet" href="/codepen/lib/jotted/jotted.min.css">
        <link rel="stylesheet" href="/codepen/lib/jotted/jotted-custom.css">

       <?php if( isset( $theme ) && $theme == 'dark' ) { ?>
            <link rel="stylesheet" href="/codepen/css/dark.css">
        <?php } ?>

        <?php if( isset( $height ) ) { ?>
            <style>
                #editor {
                    min-height: <?= $height ?>;
                    height: <?= $height ?>;
                }
            </style>
        <?php } ?>

        <script src="/codepen/lib/codemirror/lib/codemirror.js"></script>

        <script src="/codepen/lib/codemirror/addon/edit/matchbrackets.js"></script>
        <script src="/codepen/lib/codemirror/addon/edit/closebrackets.js"></script>
        <script src="/codepen/lib/codemirror/addon/edit/closetag.js"></script>

        <script src="/codepen/lib/codemirror/addon/scroll/simplescrollbars.js"></script>

        <script src="/codepen/lib/codemirror/addon/selection/active-line.js"></script>

        <script src="/codepen/lib/codemirror/mode/javascript/javascript.js"></script>
        <script src="/codepen/lib/codemirror/mode/css/css.js"></script>
        <script src="/codepen/lib/codemirror/mode/xml/xml.js"></script>
        <script src="/codepen/lib/codemirror/mode/htmlmixed/htmlmixed.js"></script>
        <script src="/codepen/lib/codemirror/mode/clike/clike.js"></script>
        <script src="/codepen/lib/codemirror/mode/php/php.js"></script>

        <script src="/codepen/lib/jotted/jotted-custom.js"></script>

    </head>

    <body>
