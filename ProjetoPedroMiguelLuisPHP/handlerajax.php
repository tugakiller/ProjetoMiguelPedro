<?php
include("Db.php");
if( isset($_REQUEST['serverlist']) ){
	switch( $_REQUEST['serverlist'] ){
        case "Insertid":
            $query = QueryCreator("UPDATE pessoa SET idServidor = ". $_REQUEST['id'] ." WHERE id = 1;", $con);
        break;
        case "GuardarCartao":
           $query = QueryCreator("INSERT INTO bingo (idpessoa, Numeros) VALUES (1, ".$_REQUEST['Numeros'].");", $con);
        break;
    }
}
?>