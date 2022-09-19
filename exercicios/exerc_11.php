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
        <form id="minhaForm" method="get" action="exerc_11.php">
            Total de carros: <input type="text" name="total_carros"><br><br> 
            Valor total de vendas: <input type="text" name="total_vendas"><br><br>
            Salário fixo: <input type="text" name="salario_fixo"><br><br>
            Valor da comissão por carro vendido: <input type="text" name="valor_carro"><br><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
            
            if (!empty($_GET['total_carros'])
            && !empty($_GET['total_vendas'])
            && !empty($_GET['salario_fixo'])
            && !empty($_GET['valor_carro'])
            ) {
                $total_carros = $_GET['total_carros'];
                $total_vendas = $_GET['total_vendas'];
                $salario_fixo = $_GET['salario_fixo'];
                $valor_carro = $_GET['valor_carro'];

                
                calcularSalarioFinal(
                    $total_carros, 
                    $total_vendas, 
                    $salario_fixo, 
                    $valor_carro
                );
            }               
        ?>

        <p>
             <a href="../">Voltar</a>
        </p>
</html>
<?php
    
    function calcularSalarioFinal($total_carros, $total_vendas, $salario_fixo, $valor_carro)
    {
        $valor = $total_carros * $valor_carro;
        $valor2 = ($total_vendas * 5) / 100;
        $salario_final = $salario_fixo + $valor + $valor2;

        echo "<p>O salário final do vendedor é de: R$ $salario_final.";
    }
