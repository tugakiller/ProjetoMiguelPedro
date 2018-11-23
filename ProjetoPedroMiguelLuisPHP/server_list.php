<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" href="Css.css">
    <script src="javascript.js"></script>
</head>
<body>
    <?php
    include("Db.php");
    ?>
    <div id="notebooks" ng-app="notebooks" ng-controller="NotebookListCtrl">
        Lista de servidores
        <ul id="notebook_ul">
            <?php
                $query = QueryCreator("SELECT id, Tipo, numero_de_perticipantes, Valor_em_mesa FROM server_list", $con); 

                if ($query->num_rows > 0) {
                    // output data of each row
                    while($row = $query->fetch_assoc())
                    {
                        if($row["Tipo"]=="tipo1")
                        {
                            echo '<li ng-repeat="notebook in notebooks | filter:query | orderBy: orderList">
                            Id: '. $row["id"].'<br/>
                            Tipo: '. $row["Tipo"] .'<br/>
                            Numero de participantes: '. $row["numero_de_perticipantes"] .'<br/>
                            Valor em mesa: '. $row["Valor_em_mesa"] .'<br/>
                            <div class="right top"><button onclick="AjaxServerList(\'Server_Jogavel.php?id='.$row["id"].'\')">Entrar</button></div>
                            </li>';
                        }
                        else if($row["Tipo"]=="modo1")
                        {
                            echo '<li ng-repeat="notebook in notebooks | filter:query | orderBy: orderList">
                            Id: '. $row["id"].'<br/>
                            Tipo: '. $row["Tipo"] .'<br/>
                            Numero de participantes: '. $row["numero_de_perticipantes"] .'<br/>
                            Valor em mesa: '. $row["Valor_em_mesa"] .'<br/>
                            <div class="right top"><button onclick="AjaxServerList(\'page2.html?id='.$row["id"].'\')">Entrar</button></div>
                            </li>';
                        }
                    }
                } else {
                    echo "0 results";
                }
                echo'</ul>
                <span>Numero de Servidores: '.$query->num_rows.'</span>
                </div>';
     
                function add()
                {
                    return "'3'";
                }   
            ?>  
    <script>
        function AjaxServerList(Link) {
            var teste = <?php echo add();?>;
            window.location = Link;
        }
    </script>
      
</body>
</html>