const message = 'Edit the code to see this preview update...';
let chars = [...message];

const hint = document.getElementById( 'hint' );

setTimeout( function typeMessage() {
  hint.innerHTML += chars.shift();
  if( chars.length ) setTimeout( typeMessage, 50 );
}, 500 );
