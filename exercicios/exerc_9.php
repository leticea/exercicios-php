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
        <form id="minhaForm" method="get" action="exerc_9.php">
            Salário atual: <input type="text" name="salario_atual"><br><br>          
            Percentual de reajuste: <input type="text" name="percentual"><br><br>
            <input type="submit" value="Calcular">

        </form> 
        <?php
            
            if (!empty($_GET['salario_atual']) 
            && !empty($_GET['percentual']) 
            ) {
                $salario_atual = $_GET['salario_atual'];
                $percentual = $_GET['percentual'];

                calcularNovoSalario(
                    $salario_atual,                   
                    $percentual
                );                   
            }               
        ?>
            <p>
                <a href="../">Voltar</a>
            </p>
    </body>
</html>
<?php

    function calcularNovoSalario($salario_atual, $percentual)
    {
        $valor_percentual = ($salario_atual * $percentual) / 100;
        $novo_salario = $salario_atual + $valor_percentual;

        echo "O novo salário é R$ $novo_salario.";                    
    }


      
                    
           
    