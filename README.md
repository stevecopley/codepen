# CodePen

A CodePen-style code editor / previewer

Based on **Jotted** [https://github.com/ghinda/jotted](https://github.com/ghinda/jotted) with layout and styling tweaks

The code editor used is **CodeMirror** [https://github.com/codemirror/CodeMirror](https://github.com/codemirror/CodeMirror)

The following files need to be linked in your HTML:

```html
<link rel="stylesheet" href="codepen.css">
<script src="codepen.js"></script>
```

Within your document, you need an empty `<div>` for the editor with the id **editor**:

```html
<div id="editor"></div>'
```

`startCodePen()` needs to be called on page load:

```html
<body onload="startCodePen();">
```

You can optionally pass the URL / filenames of an HTML, CSS and JS file to `startCodePen()`:

```html
<body onload="startCodePen( {html:'demo.html', css:'demo.css'} );">
```

By default the codepen will have dark frames / borders and use a dark syntax theme. However you can override this with an additional stylesheet:

```html
<link rel="stylesheet" href="codepen.css">
<link rel="stylesheet" href="theme/light.css">
```

And passing the value 'light' as a theme parameter:

```html
<body onload="startCodePen( {theme:'light'} );">
```


