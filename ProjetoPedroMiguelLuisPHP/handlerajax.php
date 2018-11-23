<?php
include("Db.php");
if( isset($_REQUEST['serverlist']) ){
	switch( $_REQUEST['serverlist'] ){
        case "Insertid":
            $query = QueryCreator("UPDATE pessoa SET idServidor = ". $_REQUEST['id'] ." WHERE id = 1;", $con);
        break;
        case "GuardarCartao":
           $query = QueryCreator("INSERT INTO bingo (idpessoa, Numeros, id_servidor) VALUES (1, '".$_REQUEST['Numeros']."', ".$_REQUEST['Serverid'].");", $con);
        break;
    }
}
?>