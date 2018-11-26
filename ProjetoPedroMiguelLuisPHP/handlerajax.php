<?php
include("Db.php");
if (isset($_REQUEST['serverlist'])) {
    switch ($_REQUEST['serverlist']) {
        case "Insertid":
            $query = QueryCreator("UPDATE pessoa SET idServidor = " . $_REQUEST['id'] . " WHERE id = 1;", $con);
        break;
        case "GuardarCartao":
            $query = QueryCreator("INSERT INTO bingo (idpessoa, Numeros, id_servidor) VALUES (1, '" . $_REQUEST['Numeros'] . "', " . $_REQUEST['Serverid'] . ");", $con);
        break;
        case "GuardarNumero":
            $query = QueryCreator("INSERT INTO numerosbingo (NumeroQueSaiu, idServidor) VALUES ('" . $_REQUEST['Numero'] . "', " . $_REQUEST['Serverid'] . ");", $con);
        break;
        case "NumerosTiradosBD":
            $query = QueryCreator("SELECT * FROM numerosbingo WHERE idServidor = " . $_REQUEST['Serverid'] . "", $con);
            $arrayreturn = array();
            if ($query->num_rows > 0) {
                // output data of each row
                while ($row = $query->fetch_assoc()) {
                    array_push($arrayreturn, $row["NumeroQueSaiu"]);
                }
            }
            echo json_encode($arrayreturn);
        break;
        case "QuemTira":
            $query = QueryCreator("SELECT quemtira FROM server_list WHERE id = " . $_REQUEST['Serverid'] . "", $con);
            if ($query->num_rows > 0) {
                // output data of each row
                while ($row = $query->fetch_assoc()) {
                    if($row["quemtira"] == 0)
                    {
                        $query = QueryCreator("UPDATE server_list SET quemtira = " . $_REQUEST['idpessoa'] ." WHERE id = " . $_REQUEST['Serverid'] . "", $con);
                        echo '0';
                    }
                    else{
                        if($row["quemtira"] == $_REQUEST['idpessoa'])
                        {
                            echo 0;
                        }
                        else
                        {
                            echo $row["quemtira"];
                        }
                    }
                }
            }
        break;    
    }
}
?>