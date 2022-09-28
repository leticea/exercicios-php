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
                width: 160px;
            }

        </style>
    </head>
    <body>
        <?php

        if (!empty($_GET["base"]) || !empty($_GET["altura"])) { ?>

            <div>
               <p>A área do retângulo é: <?= $_GET["base"] * $_GET["altura"] ?> </p>
            </div>
            <p>
                <a href="exerc_6.php">Voltar</a>
            </p>

        <?php 

        } else { 
            
        ?>
            <form id="minhaForm" method="get" action="exerc_6.php">
                Base: <input type="text" name="base"><br><br>
                Altura: <input type="text" name="altura"><br><br>
                <input type="submit" value="Calcular">
            </form>

            <p>
                <a href="../">Voltar</a>
            </p>

        <?php } ?>
    </body>
</html>