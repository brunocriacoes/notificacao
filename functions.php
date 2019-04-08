<?php 

    function query( $sql ) {
        $pdo = exec_query( $sql );
        return $pdo->fetch_all(MYSQLI_ASSOC);
    }

    function exec_query( $sql ) { 
        $pdo = new mysqli( host, user, pass, banc);
        $result = $pdo->query($sql);
        return $result;
    }
    
