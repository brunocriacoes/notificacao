"use strict";

var notificacao = {};

fetch( 'app.php?get=1' )
.then( x => x.json() )
.then( x => {
    document.querySelector('#numero_notificacoes').innerHTML =  x.length;
} )
.catch( x => {
    console.log(x);        
} );

var intervalo = null;

play();
