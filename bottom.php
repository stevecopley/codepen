<?php
    $css  = isset( $cssFile );
    $js   = isset( $jsFile );
?>

        <script>
          new Jotted( document.querySelector( '#editor' ), {
            files: [
                {
                    type: 'html',
                    <?php if( isset( $htmlFile ) )
                            echo "url: '$htmlFile'";
                          else
                            echo "content: '<h1>Hello World!</h1>'"; ?>
                }
                <?php if( $css ) { ?>
                ,
                {
                    type: 'css',
                    url: '<?= $cssFile ?>'
                }
                <?php } if( $js ) { ?>
                ,
                {
                    type: 'js',
                    url: '<?= $jsFile ?>'
                }
                <?php } ?>
            ],
            plugins: [
                {
                    name: 'codemirror',
                    options: {
                        theme: 'waimea-dark',
                        tabSize: 2,
                        lineWrapping: false,
                        lineNumbers: true,
                        autoCloseBrackets: true,
                        autoCloseTags: true,
                        matchBrackets: true,
                        styleActiveLine: false,
                        scrollbarStyle: 'overlay'
                    }
                },
                {
                    name: 'pen'
                }
            ]
          } );
        </script>

    </body>

</html>
