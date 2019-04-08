<?php 


    define( 'host', 'localhost' );
    define( 'banc', 'projeto_notificacao' );
    define( 'user', 'root' );
    define( 'pass', '' );

    include __DIR__ . "/functions.php";
   
    if( !empty ( $_REQUEST['get'] ) ) {
        $consult = query( "SELECT * FROM notificacao WHERE public= 1 " );
        echo json_encode( $consult );
        die;
    }

    if( !empty ( $_REQUEST['status'] ) ) {
        $status = (int)$_REQUEST['status'];
        exec_query( "UPDATE notificacao SET public=0 WHERE id = {$status} " );
        echo json_encode( [ "error" => false ] );
        die;
    }

    if( !empty ( $_REQUEST['create'] ) ) {
        exec_query( "INSERT INTO notificacao(user, mensagem, foto, public ) VALUES ( 1,'musica.mp3','default.png',1) " );
        echo json_encode( ["error" => false ]);
        die;
    }

    if( !empty ( $_REQUEST['like'] ) ) {
        echo json_encode( [ "error" => false ] );
        die;
    }

    if( !empty ( $_REQUEST['deslike'] ) ) {
        echo json_encode( [ "error" => false ] );
        die;
    }