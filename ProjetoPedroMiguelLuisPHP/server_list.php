    <?php
    include("Db.php");
    $query = QueryCreator("SELECT id, Tipo, numero_de_perticipantes, Valor_em_mesa FROM server_list", $con);

    if ($query->num_rows > 0) {
            // output data of each row
        while ($row = $query->fetch_assoc()) {
            if ($row["Tipo"] == "tipo1") {
                echo '<li ng-repeat="notebook in notebooks | filter:query | orderBy: orderList">
                    Id: ' . $row["id"] . '<br/>
                    Tipo: ' . $row["Tipo"] . '<br/>
                    Numero de participantes: ' . $row["numero_de_perticipantes"] . '<br/>
                    Valor em mesa: ' . $row["Valor_em_mesa"] . '<br/>
                    <div class="right top"><button onclick="AjaxServerList(\'Bingo.php?id=' . $row["id"] . '\', ' . $row["id"] . ')">Entrar</button></div>
                    </li>';
            } else if ($row["Tipo"] == "modo1") {
                echo '<li ng-repeat="notebook in notebooks | filter:query | orderBy: orderList">
                    Id: ' . $row["id"] . '<br/>
                    Tipo: ' . $row["Tipo"] . '<br/>
                    Numero de participantes: ' . $row["numero_de_perticipantes"] . '<br/>
                    Valor em mesa: ' . $row["Valor_em_mesa"] . '<br/>
                    <div class="right top"><button onclick="AjaxServerList(\'page2.html?id=' . $row["id"] . '\', ' . $row["id"] . ')">Entrar</button></div>
                    </li>';
            }
        }
    } else {
        echo "0 results";
    }
    echo '</ul>
        <span>Numero de Servidores: ' . $query->num_rows . '</span>
        </div>';
    ?>  

    <script>
        function AjaxServerList(Link, id) {
            $.post('handlerajax.php?serverlist=Insertid&id='+id+'', function(response){});
            window.location = Link;
        }
    </script>    