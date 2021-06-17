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


function startCodePen( htmlFile=null, cssFile=null, jsFile=null ) {

    var files = [];
    if( htmlFile ) files.push( { type: 'html', url: htmlFile } );
    else           files.push( { type: 'html', content: '<h1>Hello World!</h1>' } );        
    if( cssFile ) files.push( { type: 'css', url: cssFile } );
    if( jsFile )  files.push( { type: 'js',  url: jsFile  } );

    const params = {
        files: files,
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
    };

    new Jotted( document.querySelector( '#editor' ), params );    
}


loadScript( 'lib/codemirror/lib/codemirror.js', loadPlugins );
