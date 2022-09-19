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

        if (!empty($_GET["txt_number"])) { ?>
            <div>
                <p>
                    Original: <?= $_GET["txt_number"] ?>
                </p>
                <p>
                    Antecessor: <?= $_GET["txt_number"] - 1 ?>
                </p>
                
            </div>
            <p>
                <a href="exerc_5.php">Voltar</a>
            </p>

        <?php 
        } else { 
        ?>

            <form id="minhaForm" method="get" action="exerc_5.php">
                Digite um número:<input type="text" name="txt_number"><br><br>
                <input type="submit" value="Calcular">
            </form>

            <p>
                <a href="../">Voltar</a>
            </p>

        <?php } ?>
    </body>
</html>