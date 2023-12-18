<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../estilo.css">
        <title>Factorial un rango de numeros</title>
    </head>
    <body>
    <h2>Introduce los numeros del rango</h2>
        <form method="get">
        <label for="inicial">
            Número Inicial
        </label>
        <input type="text" name="inicial" required="required"/>
            <label for="final">Número Final</label><input type="text" name="final" required="required"/>
            <input type="submit" name="enviar"/>
        </form>
        <table>
            <tr>
                <?php
                require ('../factorial.php');
                if(isset($_GET['enviar'])){
                    $numeroInicial = $_GET['inicial'];
                    $numeroFinal = $_GET['final'];
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