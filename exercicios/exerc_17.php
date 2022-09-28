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
        <p>Calcular a média das avaliações:</p>
         <form id="minhaForm" method="get" action="exerc_17.php">
            Avaliação 1: <input type="text" name="avaliacao_1"><br><br>
            Avaliação 2: <input type="text" name="avaliacao_2"><br><br>                      
            <input type="submit" value="Calcular">
        </form>

        <?php
            
            if (!empty($_GET['avaliacao_1'])
            && !empty($_GET['avaliacao_2'])
            ) {
                $avaliacao_1 = $_GET['avaliacao_1'];
                $avaliacao_2 = $_GET['avaliacao_2'];
                
                calcularMedia (
                    $avaliacao_1, 
                    $avaliacao_2
                );
            }               
        ?>

        <p>
             <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function calcularMedia($avaliacao_1, $avaliacao_2)
    {
        $media = ($avaliacao_1 + $avaliacao_2) / 2;

        if ($media < 6) {

            echo "<p>O aluno não foi aprovado e obteve a média $media .";

        } else {

            echo "<p>O aluno foi aprovado e obteve a média $media .";
        }
    }          