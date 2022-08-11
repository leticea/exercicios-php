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
            <form id="minhaForm" method="get" action="exerc_15.php">
                Digite um valor e confira se é positivo ou negativo: 
                <input type="text" name="valor"><br><br>                     
                <input type="submit" value="Conferir">
            </form>
    </body>

        <?php

            if(!empty($_GET['valor'])){
                $valor = $_GET['valor'];
                if($valor > 0){
                    echo "<p>É positivo.";
                }
                else{
                    echo "<p>É negativo.";
                }

            }          
                                                
        ?>
            <p>
                 <a href="../">Voltar</a>
            </p>


</html>