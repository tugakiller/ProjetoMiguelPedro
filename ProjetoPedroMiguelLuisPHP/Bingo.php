<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="javascript.js"></script>
    <link rel="stylesheet" href="Css.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
    <button class="btn btn-primary" onclick="CriarCartaoBingo()">Criar Cartão Bingo</button>
    <button class="btn btn-primary" onclick="TirarNumero()">Tirar Numero</button>
    <div id="divTotal"></div>
    <div id="divNumerosSaidos"></div>
    <?php 
        include("Db.php");
        $data = $_SERVER['QUERY_STRING'];    
        $whatIWant = substr($data, strpos($data, "=") + 1);

        $query = QueryCreator("SELECT * FROM bingo WHERE id_servidor = ".$whatIWant. "", $con); 

        if ($query->num_rows > 0) {
            // output data of each row
            while($row = $query->fetch_assoc())
            {
                echo '<script type="text/javascript">',
                        'Cartoesexistentes("'.$row["Numeros"].'");',
                      '</script>';   
            }
        }
    ?>
</body>
</html>