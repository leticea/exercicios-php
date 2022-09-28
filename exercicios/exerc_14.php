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
        <form id="minhaForm" method="get" action="exerc_14.php">
            Digite um valor e confira se é maior ou menor que 10: 
            <input type="text" name="valor"><br><br>                     
            <input type="submit" value="Conferir">
        </form>
    </body>

        <?php

            if (!empty($_GET['valor'])) {
                $valor = $_GET['valor'];

                if ($valor > 10) {
                    echo "<p>É maior que 10!";

                } else {
                    
                    echo "<p>Não é maior que 10!";
                }
            }                                                         
       ?>
       
        <p>
            <a href="../">Voltar</a>
        </p>
</html>