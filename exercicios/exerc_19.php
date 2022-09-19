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
        <p>Digite dois valores e veja qual é o maior.</p>
        <form id="minhaForm" method="get" action="exerc_19.php">
            Valor 1: <input type="text" name="valor_1"><br><br>
            Valor 2: <input type="text" name="valor_2"><br><br>
            <input type="submit" value="Verificar">
        </form>
    </body>
        <?php

            if (!empty($_GET['valor_1']) 
               &&!empty($_GET['valor_2'])) {

                $valor_1 = $_GET['valor_1'];
                $valor_2 = $_GET['valor_2'];

            if($valor_1 > $valor_2){
                echo "<p>O valor $valor_1 é maior.";

            } else {
                echo "<p>O valor $valor_2 é maior.";
            }
            }                                                         
        ?>

        <p>
            <a href="../">Voltar</a>
        </p>
</html>