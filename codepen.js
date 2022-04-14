const scriptURL = document.currentScript.src;
const base = scriptURL.substring( 0, scriptURL.lastIndexOf( '/' ) );


function loadScript( url, callback=null )
{    
    var head = document.getElementsByTagName( 'head' )[0];
    var script = document.createElement( 'script' );
    script.type = 'text/javascript';
    script.src = base + '/' + url;

    if( callback ) {
        script.onreadystatechange = callback;
        script.onload = callback;
    }

    head.appendChild( script );
}


function loadStylesheet( url )
{    
    var iframe = document.getElementsByTagName( 'iframe' )[0];
    var link = document.createElement( 'link' );
    link.href = base + '/' + url; 
    link.rel  = 'stylesheet'; 
    link.type = 'text/css'; 

    iframe.document.head.appendChild( link );
}


var loadPlugins = function() {
    loadScript( 'lib/codemirror/addon/edit/matchbrackets.js' );
    loadScript( 'lib/codemirror/addon/edit/closebrackets.js' );
    loadScript( 'lib/codemirror/addon/edit/closetag.js' );

    loadScript( 'lib/codemirror/addon/scroll/simplescrollbars.js' );

    loadScript( 'lib/codemirror/addon/selection/active-line.js' );

    loadScript( 'lib/codemirror/mode/javascript/javascript.js' );
    loadScript( 'lib/codemirror/mode/css/css.js' );
    loadScript( 'lib/codemirror/mode/xml/xml.js' );
    loadScript( 'lib/codemirror/mode/htmlmixed/htmlmixed.js' );
    loadScript( 'lib/codemirror/mode/clike/clike.js' );
    loadScript( 'lib/codemirror/mode/php/php.js' );

    loadScript( 'lib/jotted/jotted-custom.js' );
}


function startCodePen( { div='editor', html=null, css=null, js=null, theme='dark' } = {} ) {

    var files = [];
    if( html ) files.push( { type: 'html', url: html } );
    else       files.push( { type: 'html', content: '<h1>Hello World!</h1>\n\n<p>This is HTML</p>' } );        
    if( css )  files.push( { type: 'css',  url: css } );
    if( js )   files.push( { type: 'js',   url: js  } );

    const params = {
        files: files,
        plugins: [
            {
                name: 'codemirror',
                options: {
                    theme: 'syntax-' + theme,
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
    };

    new Jotted( document.getElementById( div ), params );   

    // loadStylesheet( 'theme/base.css' );
}


loadScript( 'lib/codemirror/lib/codemirror.js', loadPlugins );

