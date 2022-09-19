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
        <p>Converta a temperatura Fahrenheit em Celsius aqui:</p>
        <form id="minhaForm" method="get" action="exerc_12.php">
            Temperatura ºF : <input type="text" name="fahrenheit"><br><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
            
            if (!empty($_GET['fahrenheit'])) {
                $fahrenheit = $_GET['fahrenheit'];
                

                fahrenheitParaCelsius(
                    $fahrenheit               
                );                   
            }               
        ?>
     
        <p>
             <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php

    function fahrenheitParaCelsius($fahrenheit)
    {
        $celsius = ($fahrenheit - 32) * 5 / 9;

        echo "<p>A temperatura em Celsius é: $celsius ºC.";
    }