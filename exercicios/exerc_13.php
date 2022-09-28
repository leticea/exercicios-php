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
        <p>Calcular a média final:</p>
        <form id="minhaForm" method="get" action="exerc_13.php">
            Nota 1: <input type="text" name="nota_1"><br><br>
            Nota 2: <input type="text" name="nota_2"><br><br>
            Nota 3: <input type="text" name="nota_3"><br><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
            
            if (!empty($_GET['nota_1'])
            && !empty($_GET['nota_2'])
            && !empty($_GET['nota_3'])
            ) {
                $nota_1 = $_GET['nota_1'];
                $nota_2 = $_GET['nota_2'];
                $nota_3 = $_GET['nota_3'];
                
                calcularMediaFinal (
                    $nota_1, 
                    $nota_2, 
                    $nota_3
                );
            }               
        ?>

        <p>
             <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function calcularMediaFinal($nota_1, $nota_2, $nota_3)
    {
        $media_final = ($nota_1 * 2 + $nota_2 * 3 + $nota_3 * 5) / 10;

        echo "<p>A média final do aluno é: $media_final.";
    }