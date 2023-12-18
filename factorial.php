<?php
    function factorialTabla($numeroInicial, $numeroFinal){
        for($numeroInicial;$numeroInicial<=$numeroFinal;$numeroInicial++){
            echo '<tr>';
            echo '<td>'.$numeroInicial.'</td>';
            $numero=1;
            for($i=1;$i<=$numeroInicial;$i++){
                
                $numero=$numero*$i;
            };
            echo '<td>'.$numero.'</td>';
            echo '</tr>';
        }
    }
?>