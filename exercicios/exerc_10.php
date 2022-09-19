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
        <p>Calcule o custo final de um carro aqui:</p>
        <form id="minhaForm" method="get" action="exerc_10.php">
            Custo de fábrica: <input type="text" name="custo_fabrica"><br><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
            
            if (!empty($_GET['custo_fabrica'])) {
                $custo_fabrica = $_GET['custo_fabrica'];

                calcularCustoFinal(
                    $custo_fabrica                 
                );                   
            }               
        ?>

        <p>
             <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function calcularCustoFinal($custo_fabrica)
    {
        $percentual_distribuidor = ($custo_fabrica * 28) / 100;
        $percentual_impostos = ($custo_fabrica * 45) / 100;
        $custo_final = $custo_fabrica + $percentual_distribuidor + $percentual_impostos;
        
        echo "<p>O valor final do custo do carro é de: R$ $custo_final.";                    
    }
