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
                width: 180px;
            }

            p { 
                border: 1px solid black;
                margin: 10px;
                padding: 10px;
                width: 180px;
            }

        </style>
    </head>
    <body>
        <p>Verifique aqui se tem idade para votar nas eleições:</p>
        <form id="minhaForm" method="get" action="exerc_18.php">
            Ano atual: <input type="date" name="data_atual"><br><br>
            Ano em que nasceu: <input type="date" name="data_nasc"><br><br>
            <input type="submit" value="Verificar">
        </form>
            
        <?php
          
            if (!empty($_GET['data_atual'])
            && !empty($_GET['data_nasc'])) {

                $data_nasc = $_GET['data_nasc'];
                $data_atual = $_GET['data_atual'];

                verificarIdade($data_nasc, $data_atual);             
            }
        ?>
        
        <p>
            <a href="../">Voltar</a>
        </p>
     </body>
</html>
<?php

    function verificarIdade($data_nasc, $data_atual)
    {
        $idade = 16;

        list($ano_atual) = explode('-', $data_atual);
        list($ano_nasc) = explode('-', $data_nasc);

        if (($ano_atual - $ano_nasc) >= $idade) {
          
            echo "<p>Pode votar.";

        } else {
            
            echo "<p>Não pode votar.";
        }        
    }  