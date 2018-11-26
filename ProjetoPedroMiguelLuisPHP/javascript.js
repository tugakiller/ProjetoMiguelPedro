var contadorCartoes = 0;
var numerosLancados = [];
var EATirar = '1';

setInterval(function() {
    var querystring = location.search.substring(1);
    querystring = querystring.split("=");
    $.post('handlerajax.php?serverlist=QuemTira&Serverid=' + querystring[1] + '&idpessoa=' + '1' + '', function(response){
        EATirar = response;
    });
    if(EATirar == '0')
    {
        TirarNumero();
    }
    var querystring = location.search.substring(1);
    querystring = querystring.split("=");
    $.post('handlerajax.php?serverlist=NumerosTiradosBD&Serverid=' + querystring[1] + '', function (response) {               
        $.each(JSON.parse(response), function( i, l ){
            TirarNumero(l);
        });
    });
}, 10 * 100);

/*Bingo */
function CriarCartaoBingo()
{
    InstatiateCartao();
}

function InstatiateCartao()
{
    //Criar o cartao
    contadorCartoes++;
    $( "#divTotal" ).append( "<div id='Divcartao" + contadorCartoes + "'></div> <br>");
    $("#Divcartao" + contadorCartoes ).append('<table class="topazCells"><tbody><tr>');
    for (let index = 1; index < 28; index++) {
        if(index == 10 || index == 19 || index == 30)
        {
            $("#Divcartao" + contadorCartoes + " > table > tbody").prepend("<tr>");
        }
        $("#Divcartao" + contadorCartoes + " > table > tbody > tr").first().append("<td><label id='Label" + index +"_" + contadorCartoes + "'>-</label></td>");

    }

    /* Inicio Linha 1 do cartão */
    for (let index = 0; index < 5; index++)
    {
        var adicionou = 0;

        while (adicionou == 0)
        {
            var numerorandom = Math.floor((Math.random() * 90) + 1);

            if (numerorandom <= 10)
            {
                adicionou = AddNumRandomToLabel($("#Label1_" + contadorCartoes), $("#Label10_" + contadorCartoes), $("#Label19_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 10 && numerorandom <= 20)
            {
                adicionou = AddNumRandomToLabel($("#Label2_" + contadorCartoes), $("#Label11_" + contadorCartoes), $("#Label20_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 20 && numerorandom <= 30)
            {
                adicionou = AddNumRandomToLabel($("#Label3_" + contadorCartoes), $("#Label12_" + contadorCartoes), $("#Label21_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 30 && numerorandom <= 40)
            {
                adicionou = AddNumRandomToLabel($("#Label4_" + contadorCartoes), $("#Label13_" + contadorCartoes), $("#Label22_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 40 && numerorandom <= 50)
            {
                adicionou = AddNumRandomToLabel($("#Label5_" + contadorCartoes), $("#Label14_" + contadorCartoes), $("#Label23_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 50 && numerorandom <= 60)
            {
                adicionou = AddNumRandomToLabel($("#Label6_" + contadorCartoes), $("#Label15_" + contadorCartoes), $("#Label24_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 60 && numerorandom <= 70)
            {
                adicionou = AddNumRandomToLabel($("#Label7_" + contadorCartoes), $("#Label16_" + contadorCartoes), $("#Label25_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 70 && numerorandom <= 80)
            {
                adicionou = AddNumRandomToLabel($("#Label8_" + contadorCartoes), $("#Label17_" + contadorCartoes), $("#Label26_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 80)
            {
                adicionou = AddNumRandomToLabel($("#Label9_" + contadorCartoes), $("#Label18_" + contadorCartoes), $("#Label27_" + contadorCartoes), numerorandom);
            }
        } 
    }
      /* Fim Linha 1 do cartão */


       /* Inicio Linha 2 do cartão */
    for (let index = 0; index < 5; index++)
    {
        var adicionou = 0;

        while (adicionou == 0)
        {
            var numerorandom = Math.floor((Math.random() * 90) + 1);

            if (numerorandom <= 10)
            {
                adicionou = AddNumRandomToLabel( $("#Label10_" + contadorCartoes), $("#Label1_" + contadorCartoes), $("#Label19_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 10 && numerorandom <= 20)
            {
                adicionou = AddNumRandomToLabel($("#Label11_" + contadorCartoes), $("#Label2_" + contadorCartoes), $("#Label20_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 20 && numerorandom <= 30)
            {
                adicionou = AddNumRandomToLabel($("#Label12_" + contadorCartoes), $("#Label3_" + contadorCartoes), $("#Label21_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 30 && numerorandom <= 40)
            {
                adicionou = AddNumRandomToLabel($("#Label13_" + contadorCartoes), $("#Label4_" + contadorCartoes), $("#Label22_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 40 && numerorandom <= 50)
            {
                adicionou = AddNumRandomToLabel($("#Label14_" + contadorCartoes), $("#Label5_" + contadorCartoes), $("#Label23_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 50 && numerorandom <= 60)
            {
                adicionou = AddNumRandomToLabel($("#Label15_" + contadorCartoes), $("#Label6_" + contadorCartoes), $("#Label24_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 60 && numerorandom <= 70)
            {
                adicionou = AddNumRandomToLabel($("#Label16_" + contadorCartoes), $("#Label7_" + contadorCartoes), $("#Label25_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 70 && numerorandom <= 80)
            {
                adicionou = AddNumRandomToLabel($("#Label17_" + contadorCartoes), $("#Label8_" + contadorCartoes), $("#Label26_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 80)
            {
                adicionou = AddNumRandomToLabel($("#Label18_" + contadorCartoes), $("#Label9_" + contadorCartoes), $("#Label27_" + contadorCartoes), numerorandom);
            }
        }
        
    }
      /* Fim Linha 2 do cartão */

    /* Inicio Linha 3 do cartão */
    for (let index = 0; index < 5; index++)
    {
        var adicionou = 0;

        while (adicionou == 0)
        {
            var numerorandom = Math.floor((Math.random() * 90) + 1);

            if (numerorandom <= 10)
            {
                adicionou = AddNumRandomToLabel($("#Label19_" + contadorCartoes),  $("#Label10_" + contadorCartoes), $("#Label1_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 10 && numerorandom <= 20)
            {
                adicionou = AddNumRandomToLabel($("#Label20_" + contadorCartoes), $("#Label11_" + contadorCartoes), $("#Label2_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 20 && numerorandom <= 30)
            {
                adicionou = AddNumRandomToLabel($("#Label21_" + contadorCartoes), $("#Label12_" + contadorCartoes), $("#Label3_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 30 && numerorandom <= 40)
            {
                adicionou = AddNumRandomToLabel($("#Label22_" + contadorCartoes), $("#Label13_" + contadorCartoes), $("#Label4_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 40 && numerorandom <= 50)
            {
                adicionou = AddNumRandomToLabel($("#Label23_" + contadorCartoes), $("#Label14_" + contadorCartoes), $("#Label5_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 50 && numerorandom <= 60)
            {
                adicionou = AddNumRandomToLabel($("#Label24_" + contadorCartoes), $("#Label15_" + contadorCartoes), $("#Label6_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 60 && numerorandom <= 70)
            {
                adicionou = AddNumRandomToLabel($("#Label25_" + contadorCartoes), $("#Label16_" + contadorCartoes), $("#Label7_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 70 && numerorandom <= 80)
            {
                adicionou = AddNumRandomToLabel($("#Label26_" + contadorCartoes), $("#Label17_" + contadorCartoes), $("#Label8_" + contadorCartoes), numerorandom);
            }
            if (numerorandom > 80)
            {
                adicionou = AddNumRandomToLabel($("#Label27_" + contadorCartoes), $("#Label18_" + contadorCartoes), $("#Label9_" + contadorCartoes), numerorandom);
            }
        }
        
    }
    /* Fim Linha 3 do cartão */
    
    /* Guardar o cartao na base de dados */
    var NumerosDoCartao = "";
    $("#Divcartao" + contadorCartoes + " > table > tbody > tr > td > label").each(function (index, element) {
        NumerosDoCartao = NumerosDoCartao.concat($(element).text() + "_");
    });
    var querystring = location.search.substring(1);
    querystring = querystring.split("=");
    $.post('handlerajax.php?serverlist=GuardarCartao&Numeros='+NumerosDoCartao+'&Serverid=' + querystring[1] + '', function(response){
    });
}

function AddNumRandomToLabel(LabelToPutValue, FirstVerificationLabel, SecondVerificationLabel, RandomNumber)
{
    if (LabelToPutValue.html() == "-" &&  FirstVerificationLabel.html() != RandomNumber && SecondVerificationLabel.html() != RandomNumber)
    {
        LabelToPutValue.html(RandomNumber);
        return 1;
    }
    return 0;
}


function TirarNumero(chamado=0)
{
    var jaentrou = 0;
    while (jaentrou == 0) {
        if(chamado == 0)
        {
            var numerorandom = Math.floor((Math.random() * 90) + 1);
        }
        else
        {
            var numerorandom = chamado;
            jaentrou = 1;
        }
        if(jQuery.inArray(numerorandom, numerosLancados) == -1)
        {
            jaentrou = 1;
            
            numerosLancados.push(numerorandom);
            $("label").each(function (index, element) {
                // element == this

                    if($(element).text() == numerorandom)
                    {
                        $(element).text("X"); 
                    }
            });
            $("#divNumerosSaidos").append(numerorandom + " &nbsp;");
        }        
    }
    if(chamado == 0)
    {
        var querystring = location.search.substring(1);
        querystring = querystring.split("=");
        $.post('handlerajax.php?serverlist=GuardarNumero&Numero='+numerorandom+'&Serverid=' + querystring[1] + '', function(response){
        });
    }
    VerifyWinner();
}

function VerifyWinner()
{
    $("#divTotal > div").each(function (index, element) {
        if(EVencedor(element) == 0)
        {
            alert("Ganhou a div " + element.id);
        }
    });
}
function EVencedor(element) {
    var contador = 0;
    $("#" + element.id + " > table > tbody > tr > td > label").each(function (index2, element2) {
        if (parseInt($(element2).text())) {
            contador = 1;
            return contador;
        }
    });
    return contador;
}

function Cartoesexistentes(value)
{
    var arrayvalue = value.split("_");

    //Criar o cartao
    contadorCartoes++;
    $( "#divTotal" ).append( "<div id='Divcartao" + contadorCartoes + "'></div> <br>");
    $("#Divcartao" + contadorCartoes ).append('<table class="topazCells"><tbody><tr>');
    for (let index = 1; index < 28; index++) {
        if(index == 10 || index == 19 || index == 30)
        {
            $("#Divcartao" + contadorCartoes + " > table > tbody").prepend("<tr>");
        }
        $("#Divcartao" + contadorCartoes + " > table > tbody > tr").first().append("<td><label id='Label" + index +"_" + contadorCartoes + "'>" + arrayvalue[index-1] + "</label></td>");
    }
}
/*Fim Bingo*/