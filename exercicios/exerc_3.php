<!DOCTYPE html>
<html>
    <head>
        <style>

            *{
                margin: 0px;
                padding: 0px;
            }

            #minhaForm {
                border: 1px solid black;
                margin: 10px;
                padding: 10px;
            }

            div { 
                border: 1px solid black;
                margin: 10px;
                padding: 10px;
                width: 120px;
            }

        </style>
    </head>
    <body>  
        <p>Escolha uma data e verifique se o ano é bissexto:</p>
        <form id="minhaForm" method="get" action="exerc_3.php">
            Data: <input type="date" name="data" /><br /><br>
            <input type="submit" name="submit" value="Conferir" />
        </form>
            
        <?php
            
            if (!empty($_GET['data'])) {
                
                verificarDataBissexto($_GET['data']);
            }
        ?>
           
        <p>
            <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php 

    function verificarDataBissexto($data)
    {
        list($ano_nasc) = explode('-', $data);
       
        if (($ano_nasc % 4 == 0 && $ano_nasc % 100 !=0) || $ano_nasc % 400 == 0) {

            echo "$ano_nasc é bissexto.";

        } else {

            echo "$ano_nasc não é bissexto.";
        }        
    }