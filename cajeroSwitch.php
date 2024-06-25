<?php
$saldOriginal = 500000;
$opcion = readline("Ingrese la accion que desea realizar; consultar, consignar o retirar. " );

switch($opcion){
    case "consultar":
        echo "Su saldo actual es de $saldOriginal.";
        break;
    
    case "consignar":
        $cons = readline("Ingrese la cantidad a consignar: ");
        $sum = $cons + $saldOriginal;
        echo "Su saldo actual ahora es de $sum";
        break;
    
    case "retirar":
        $reti = readline("Ingrese la cantinad que desea retirar: ");
        $res = $saldOriginal - $reti;
        echo "Su saldo actual ahora es de $res";
        break;
}