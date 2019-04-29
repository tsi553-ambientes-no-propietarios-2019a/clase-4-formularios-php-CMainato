<?php
/*
Escribir código PHP que inicialice un arreglo con los números del 1 al 365. Determine a que mes pertenece el día del año. Y luego calcule cuántos días faltan para que se acabe el año con cada día del año, y muestre el mensaje “Falta poco para el año nuevo” solo si faltan menos de 5 días.
*/
function saber_dia($nombredia) {
$dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');
$fecha = $dias[date('N', strtotime($nombredia))];
echo $fecha;
}


for ($i = 1 ; $i <=365; $i++ ){
        if($contDias > 6){
            $contDias = 0; 
        }
function resultados($busqueda){
    $arreglo = array(); 
    $aux = 0; 
    $aux = 365 - $busqueda; 
if($busqueda >= 1 and $busqueda <= 365){
foreach(Agrega($arreglo) as $dia => $arreglo){
    if($dia == $busqueda){
        echo 'El dia numero ' . $dia . ' '; 
    foreach($arreglo => $dias){
        echo ', corresponde a la fecha: ' . $dias . ' / ' . revisaDia($busqueda) . ' / ' . $mes; 
        echo '<br>'; 
        echo  ' Faltan: ' . $aux . ' dias para que termine el año.';
        if($aux >= 1 and $aux <= 5){
            echo '<br>';
            echo ' Falta poco para el año nuevo';
        }else{
            echo ''; 
        }
    }
    echo '<br>';
    }
 
}
}
}   saber_dia('2015-03-13');
resultados('');
} 
