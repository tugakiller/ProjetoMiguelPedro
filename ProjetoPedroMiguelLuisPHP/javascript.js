var contadorCartoes = 0;
var numerosLancados = [];

/*Bingo */
function CriarCartaoBingo()
{
    InstatiateCartao();
}

function InstatiateCartao()
{
    contadorCartoes++;
    $( "#divTotal" ).append( "<div id='Divcartao" + contadorCartoes + "'></div> <br>");
    for (let index = 1; index < 28; index++) {
        if(index == 10 || index == 19 || index == 30)
        {
            $("#Divcartao" + contadorCartoes ).append("<br>");
        }
        $("#Divcartao" + contadorCartoes ).append("<label id='Label" + index +"_" + contadorCartoes + "'>-</label> &nbsp;");
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

function TirarNumero()
{
    var jaentrou = 0;
    while (jaentrou == 0) {
        var numerorandom = Math.floor((Math.random() * 90) + 1);
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

    VerifyWinner();
}

function VerifyWinner()
{
    $("divTotal > div").each(function (index, element) {
                
    });
}
/*Fim Bingo*/