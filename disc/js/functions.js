"use strict";

function add() 
{
    fetch( 'app.php?create=1' )
    .then( x => x.json() )
    .then( x => {
        console.log(x);
    } )
    .catch( x => {
        console.log(x);        
    } );
}

function status( id ) 
{
    fetch( `app.php?status=${id}` )
    .then( x => x.json() )
    .then( x => {
        console.log(x);
     
    } )
    .catch( x => {
        console.log(x);        
    } );

}

function redireciona()
{
    setTimeout( () => {
        window.location.href = notificacao.link || "https://google.com";
    }, 1000 );
}

function play() 
{
    document.querySelector('#play').src = '';
    intervalo = setInterval( () => {
        fetch( 'app.php?get=1' )
        .then( x => x.json() )
        .then( x => {
            console.log(x);
            if( x.length > 0 ) {
                notificacao = x[0];
                document.querySelector('#popup').click();
                document.querySelector('#numero_notificacoes').innerHTML =  x.length - 1;
                document.querySelector('#play').src = 'uploads/musica.mp3';
                document.querySelector('#play').play();
                clearInterval(intervalo);
                status( x[0].id );        
            }
        } );    
    }, 3000 );
}