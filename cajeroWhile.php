<?php
$saldo = 500000;
$cajero = readline("Ingrese la accion que desea realizar; [1] consultar, [2] consignar, [3] retirar.");

while(true){
    if ($cajero == 1){
        echo "Su saldo actual es de $saldo.";
        break;
    }
    elseif ($cajero == 2){
        $cons = readline("Ingrese la candidad a consignar: ");
        $sum = $saldo + $cons;
        echo "Ahora su saldo es de $sum.";
        break;
    }
    elseif ($cajero == 3){
        $reti = readline("Ingrese la cantidad qu desea retirar: ");
        $rest = $saldo - $reti;
        echo "Con lo recien retirafdo su saldo equivale a $rest.";
        break;
    }
    else{
        echo "Opcion no valida.";
        break;
    }

}