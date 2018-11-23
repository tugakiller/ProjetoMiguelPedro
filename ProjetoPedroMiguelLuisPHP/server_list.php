<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <style>
        .div_com_valores_de_salas
        {
            background-color: darkgray;
        }
        /*Inicio de list*/
        body {
        font-family: helvetica;
        font-weight: 100;
        font-size: 14px;
        margin: 0 auto;
        }

        .right {
        float: right;
        position: relative;
        top: 6px;
        }

        .top {
        margin-top: -30px;
        }

        #notebooks {
        background: whitesmoke;
        position: absolute;
        left: 50%;
        margin-left: -175px;
        margin-top: 35px;
        width: 350px;
        padding: 15px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 5px;
        box-shadow: inset 1px 1px 0 white;
        max-height: 450px;
        }

        ul {
        margin: 0 auto;
        padding: 0;
        max-height: 390px;
        overflow-y: auto;
        border: 1px solid rgba(0, 0, 0, 0.1);
        padding: 5px 5px 0 5px;
        border-left: none;
        border-right: none;
        }

        li {
        list-style: none;
        background-color: rgba(0, 0, 0, 0.05);
        background-image: 
            linear-gradient(
            90deg,
            #FFD32E 10px,
            #EEE 10px,
            #EEE 11px,
            transparent 11px);
        padding: 10px 15px 10px 25px;
        border: 1px solid #CCC;
        box-shadow: inset 1px 1px 0 rgba(255, 255, 255, 0.5);
        margin-bottom: 5px;
        width: 100%;
        box-sizing: border-box;
        cursor: pointer;
        border-radius: 3px;
        }

        #query {
        width: 100%;
        box-sizing: border-box;
        font-size: 19px;
        padding: 5px;
        font-family: calibri light;
        margin-bottom: 10px;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-radius: 3px;
        box-shadow: inset 1px 1px 0 rgba(0, 0, 0, 0.1);
        }

        #notebooks span {
        display: block;
        position: absolute;
        background: #FFD32E;
        bottom: -35px;
        left: -1px;
        width: 360px;
        border-radius: 0 0 5px 5px;
        border: 1px solid rgba(0, 0, 0, 0.1);
        padding: 10px;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
        box-shadow: inset 1px 1px rgba(255, 255, 255, 0.5);
        }

        #notebooks select {
        width: 120px;
        margin-left: 230px;
        margin-top: -45px;
        border-radius: 0 3px 3px 0;
        border: 1px solid rgba(0, 0, 0, 0.2);
        border-left: 1px solid rgba(0, 0, 0, 0.1);
        position: absolute;
        padding: 7.5px;
        box-shadow: inset 0 1px 0 rgba(0, 0, 0, 0.1);
        }

        #notebooks select:focus, #query:focus {
        border: 1px solid #FFD32E;
        box-shadow: 0 0 10px rgba(255, 255, 0, 0.1);
        outline: none;
        }
        /*Fim de list*/
    </style>
</head>
<body>
    <div id="notebooks" ng-app="notebooks" ng-controller="NotebookListCtrl">
        Lista de servidores
        <ul id="notebook_ul">
            
       
    <?php
        $con = mysqli_connect("localhost","root","", "p_l_m");
        
        //codigo para fazer insert
        //$sql="insert into server_list (Tipo, Vai_a_Meio, numero_de_perticipantes, Valor_em_mesa) values ('tipo1','1','20','2000')" ;
        
        $sql = "SELECT id, Tipo, numero_de_perticipantes, Valor_em_mesa FROM server_list";
        $query=mysqli_query($con,$sql);
      
        
        if ($query->num_rows > 0) {
            // output data of each row
            while($row = $query->fetch_assoc())
            {
                if($row["Tipo"]=="tipo1")
                {
                    //echo "id: " . $row["id"]. " - Tipo: " . $row["Tipo"]. " - Numero de participantes " . $row["numero_de_perticipantes"] . " - Valor em mesa " . $row["Valor_em_mesa"]. "<br>";
                    echo '<li ng-repeat="notebook in notebooks | filter:query | orderBy: orderList">
                    Id: '. $row["id"].'<br/>
                    Tipo: '. $row["Tipo"] .'<br/>
                    Numero de participantes: '. $row["numero_de_perticipantes"] .'<br/>
                    Valor em mesa: '. $row["Valor_em_mesa"] .'<br/>
                    <div class="right top"><a href="Server_Jogavel.php?id='.$row["id"].'"><button>Entrar</button></a></div>
                    </li>';
                }
                else if($row["Tipo"]=="modo1")
                {
                    //echo "id: " . $row["id"]. " - Tipo: " . $row["Tipo"]. " - Numero de participantes " . $row["numero_de_perticipantes"] . " - Valor em mesa " . $row["Valor_em_mesa"]. "<br>";
                    echo '<li ng-repeat="notebook in notebooks | filter:query | orderBy: orderList">
                    Id: '. $row["id"].'<br/>
                    Tipo: '. $row["Tipo"] .'<br/>
                    Numero de participantes: '. $row["numero_de_perticipantes"] .'<br/>
                    Valor em mesa: '. $row["Valor_em_mesa"] .'<br/>
                    <div class="right top"><a href="page2.html?id='.$row["id"].'"><button>Entrar</button></a></div>
                    </li>';
                }
            }
        } else {
            echo "0 results";
        }
        echo'</ul>
        <span>Numero de Servidores: '.$query->num_rows.'</span>
        </div>';
    ?>
      
</body>
</html>