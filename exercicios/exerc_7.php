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
                width: 150px;

            }

            p { 
                border: 1px solid black;
                margin: 10px;
                padding: 10px;
                width: 150px;
            }

        </style>
    </head>
    <body>
        
            <form id="minhaForm" method="get" action="exerc_7.php">
                Escolha uma data: <input type="date" name="data"><br><br>
                <input type="submit" value="Calcular">
            </form>
            
        <?php
            
            if (!empty($_GET['data'])) {

                echo '<p> A idade em dias é: ' . calcularIdadeEmDias($_GET['data']) . '</p>';
            }

        ?>
        
        <p>
            <a href="../">Voltar</a>
        </p>
    </body>
</html>
<?php
        
    function calcularIdadeEmDias($data)
    {
        $idade = 0;

        $data_nascimento = date('Y-m-d', strtotime($data));


        list($anoNasc, $mesNasc, $diaNasc) = explode('-', $data_nascimento);

        $idade = date("Y") - $anoNasc;
        
        if (date("m") < $mesNasc) {
            $idade -= 1;

        } elseif ((date("m")== $mesNasc) && (date("d") <= $diaNasc)) {
            $idade -= 1;
        }

        return $idade * 365;
    }
