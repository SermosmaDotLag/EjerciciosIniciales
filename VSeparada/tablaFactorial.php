<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo.css">
        <title>Factorial un rango de numeros</title>
    </head>
    <body>
        <table>
            <tr>
                <?php
                require ('../factorial.php');
                if($_GET['final']== ''){}
                else{
                    $numeroInicial = $_GET['inicial'] ?? 1;
                    $numeroFinal = $_GET['final'] ?? 1;
                    if($numeroInicial>=$numeroFinal || $numeroInicial < 0 || $numeroFinal > 999){
                        echo'Introduce valores válidos';
                    }
                    else{
                        echo '<th colspan="2">Tabla de factoriales del '.$numeroInicial.' al '.$numeroFinal.'</th>';
                        echo '</tr>';
                        factorialTabla($numeroInicial, $numeroFinal); 
                    }
                }
                               
                ?>
        </table>
    </body>
</html>