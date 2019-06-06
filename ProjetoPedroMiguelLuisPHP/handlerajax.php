<?php
include("Db.php");
if (isset($_REQUEST['serverlist'])) {
    switch ($_REQUEST['serverlist']) {
        case "Insertid":
            $query = QueryCreator("UPDATE pessoa SET idServidor = " . $_REQUEST['id'] . " WHERE id = " .  $_REQUEST['idpessoa'] . ";", $con);
        break;
        case "GuardarCartao":
            $query = QueryCreator("INSERT INTO bingo (idpessoa, Numeros, id_servidor) VALUES (" . $_REQUEST['idpessoa'] . ", '" . $_REQUEST['Numeros'] . "', " . $_REQUEST['Serverid'] . ");", $con);
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
            $query = QueryCreator("SELECT * FROM server_list WHERE id = " . $_REQUEST['Serverid'] . "", $con);
            if ($query->num_rows > 0) {
                // output data of each row
                while ($row = $query->fetch_assoc()) {
                    if($row["quemtira"] == 0)
                    {
                        if($row["Vai_a_Meio"] == 1)
                        {
                            $query = QueryCreator("UPDATE server_list SET quemtira = " . $_REQUEST['idpessoa'] ." WHERE id = " . $_REQUEST['Serverid'] . "", $con);
                            echo '0';
                        }
                        else
                        {
                            echo '1';
                        }
                    }
                    else{
                        if($row["quemtira"] == $_REQUEST['idpessoa'] && $row["Vai_a_Meio"] == 1)
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
        case "Vencedor":
            $query = QueryCreator("UPDATE pessoa SET valor = valor + 50  WHERE id = " . $_REQUEST['QuemGanhou'] . "", $con);
            $query = QueryCreator("DELETE FROM numerosbingo WHERE idServidor = " . $_REQUEST['Serverid'] . "", $con);
            $query = QueryCreator("DELETE FROM bingo WHERE 	id_servidor = " . $_REQUEST['Serverid'] . "", $con);
            $query = QueryCreator("UPDATE server_list SET Vai_a_Meio = 0 WHERE id = " . $_REQUEST['Serverid'] . "", $con);
        break;  
        case "PodeComprar":
            $query = QueryCreator("SELECT Vai_a_Meio FROM server_list WHERE id = " . $_REQUEST['Serverid'] . "", $con);
            if ($query->num_rows > 0) {
                // output data of each row
                while ($row = $query->fetch_assoc()) {
                    if($row["Vai_a_Meio"] == 0)
                    {
                        echo true;
                    }
                    else
                    {
                        echo false;
                    }
                }
            }
        break;  
        case "ComecaJogo":
            $query = QueryCreator("UPDATE server_list SET Vai_a_Meio = 1 WHERE id = " . $_REQUEST['Serverid'] . "", $con);
        break;  
        case "CartoesExistentes":
            $query = QueryCreator("SELECT * FROM bingo WHERE id_servidor = " . $_REQUEST['Serverid'] . "", $con);
            
            if ($query->num_rows > 0) {
                // output data of each row
                $cars = array();

                while ($row = $query->fetch_assoc()) {
                    $cars[] = array($row["Numeros"], $row["idpessoa"]);
                }
                echo json_encode($cars);
            }
        break; 
        case "TemqueFazerRefresh":
            $query = QueryCreator("UPDATE pessoa SET fazerrefresh = 1 WHERE id != " . $_REQUEST['idpessoa'] . " AND idServidor = " . $_REQUEST['Serverid'] . ";", $con);
        break;     
        case 'FazerRefresh':
            $query = QueryCreator("SELECT fazerrefresh FROM pessoa WHERE id = " . $_REQUEST['idpessoa'] . "", $con);
                
            if ($query->num_rows > 0) {
                // output data of each row
                while ($row = $query->fetch_assoc()) {
                    echo $row["fazerrefresh"];
                }
            }
        break; 
        case "removerrefresh":
            $query = QueryCreator("UPDATE pessoa SET fazerrefresh = 0 WHERE id = " . $_REQUEST['idpessoa'] . "", $con);
        break;    
    }
}
?>