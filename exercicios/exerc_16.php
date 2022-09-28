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
                width: 240px;
            }

            p { 
                border: 1px solid black;
                margin: 10px;
                padding: 10px;
                width: 240px;
            }

        </style>
    </head>
    <body> 
        <form id="minhaForm" method="get" action="exerc_16.php">
            Descreva a quantidade das maçãs e confira o valor da compra: <input type="text" name="quantidade"><br><br>                     
            <input type="submit" value="Calcular">
        </form>
    </body>
        <?php

            if (!empty($_GET['quantidade'])) {
                
                $quantidade = $_GET['quantidade'];

                calcularValor($quantidade);          
            }                                                
        ?>

        <p>
             <a href="../">Voltar</a>
        </p>
</html>
<?php

    function calcularValor($quantidade)
    {
        $valor = 1.00;

        if ($quantidade < 12) {
            
            $valor = 1.30;
        } 

       $resultado = $quantidade * $valor;
        echo "<p>O valor total é de: R$ $resultado.";
    }