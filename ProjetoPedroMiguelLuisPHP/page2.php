<?php
    $valor_recebido = $_POST['valor_q_passa'];
    $servidor_recebido = $_POST['servidorid_q_passa'];
    echo $valor_recebido;
    echo $servidor_recebido;
    echo "<br>";

    $con = mysqli_connect("localhost","root","", "p_l_m");
    
    //Select do servidor escolhido
    $sql = 'SELECT id, Tipo, numero_de_perticipantes, Valor_em_mesa FROM server_list WHERE id='.$servidor_recebido.'';
    //Select do servidor jogavel
    $sql2='SELECT id, id_server_list, id_pessoa FROM server_jogavel WHERE id_server_list='.$servidor_recebido.'';
    //Select dos jogadores no server
    $sql3='SELECT pessoa.id, nome, email, valor FROM pessoa, server_jogavel WHERE server_jogavel.id_pessoa = pessoa.id && server_jogavel.id_server_list = '.$servidor_recebido.'';

    $sql4='INSERT INTO modo1 (id, id_pessoa, id_server_list, carta_enviada) VALUES ()';
    //esta query mais o if vai servir para escrever a informação deste server
    $query=mysqli_query($con,$sql);

    if ($query->num_rows > 0) {
        // output data of each row
        while($row = $query->fetch_assoc())
        {
            echo "id: " . $row["id"]. " - Tipo: " . $row["Tipo"]. " - Numero de participantes " . $row["numero_de_perticipantes"] . " - Valor em mesa " . $row["Valor_em_mesa"]. "<br>";
        }
    } else {
        echo "0 results";
    }
    
    echo "<br>";

    //esta query mais o if vai servir para escrever a informação do server escolhido, ou seja o id, o id_server_list q faz ligaçao com o tabela server_list e o id_pessoa q faz ligação com a tabela pessoa
    $query2=mysqli_query($con,$sql2);

    if ($query2->num_rows > 0) {
        // output data of each row
        while($row = $query2->fetch_assoc())
        {
            echo "id: " . $row["id"]. " - id_server_list: " . $row["id_server_list"]. " - id_pessoa " . $row["id_pessoa"] . "<br>";
        }
    } else {
        echo "0 results";
    }

    echo "<br>";

    //esta query mais o if vai servir para escrever todos os jogadores existentes no servidor
    $query3=mysqli_query($con,$sql3);
    if ($query3->num_rows > 0) {
        // output data of each row
        while($row = $query3->fetch_assoc())
        {
            echo "id: " . $row["id"]. " - nome: " . $row["nome"]. " - email " . $row["email"] . " - valor " . $row["valor"] . "<br>";
        }
    } else {
        echo "0 results";
    }
    return;


?>
