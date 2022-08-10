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
        <form id="minhaForm" method="get" action="exerc_8.php">
                Número total de eleitores: <input type="text" name="totais"><br><br>
                Votos válidos: <input type="text" name="validos"><br><br>
                Votos brancos: <input type="text" name="brancos"><br><br>
                Votos nulos: <input type="text" name="nulos"><br><br>

               
                <input type="submit" value="Calcular">
        </form>

        <?php
         
            
       
            if (!empty($_GET['totais']) 
             && !empty($_GET['validos']) 
             && !empty($_GET['brancos'])
             && !empty($_GET['nulos'])       
            ) {
                $totais = $_GET['totais'];
                $validos = $_GET['validos'];
                $brancos = $_GET['brancos'];
                $nulos = $_GET['nulos'];
                $soma = $validos + $brancos + $nulos;

                if($totais >= $validos 
                && $totais >= $brancos 
                && $totais >= $nulos
                && $totais == $soma
                ) {
                    
                    calcularPorcentagemVotos(
                        $totais,
                        $validos,
                        $brancos,
                        $nulos
                    );
                }
               
            }                       
        ?>
        <p>
            <a href="../">Voltar</a>
        </p>       
   </body>        
</html>
<?php
    
    function calcularPorcentagemVotos($totais, $validos, $brancos, $nulos)
    {
        $votos_validos = ($validos * 100) / $totais;
        $votos_brancos = ($brancos * 100) / $totais;
        $votos_nulos = ($nulos * 100) / $totais;

        echo "<p>O valor $totais representa 100% dos eleitores.<br>";
        echo "<p>O valor $validos representa $votos_validos% dos eleitores.<br>";
        echo "<p>O valor $brancos representa $votos_brancos% dos eleitores.<br>";
        echo "<p>O valor $nulos representa $votos_nulos% dos eleitores.<br>";

    }



        