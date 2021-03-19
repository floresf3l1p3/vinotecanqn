<?php
/*Realizar el diseño y la correspondiente implementación en PHP de un script vinotecaNqn.php del siguiente enunciado:


Dado una estructura de arreglos asociativos, donde cada posición del arreglo se corresponde con una variedad de vino (malbec, cabernet Sauvignon, Merlot) y se almacena la siguiente información: variedad, cantidad de botellas, año de producción, precio por unidad:

1-Implementar una función que reciba un arreglo con las características  mencionadas y retorne  un arreglo que por variedad de vino guarde la cantidad total de botellas y el precio promedio.
2-Implementar una función main() que cree un arreglo con las características mencionadas, invoque a la función implementada en paso (1) y visualice su resultado
3-Subir a su cuenta GitHub la resolución del Trabajo Practico de Repaso.*/
 

 $vinosViñedos = [
     "malbec" => [
         ["variedad" => "Seco" , "cantidad" => 50 , "anioProduccion" => 1995 , "precioUnidad" => 799,],
         ["variedad" => "Dulce" , "cantidad" => 100 , "anioProduccion" => 1889 , "precioUnidad" => 859 ],
         ["variedad" => "Semidulce" , "cantidad" => 215 , "anioProduccion" => 1200 , "precioUnidad" => 1989 ]
         ]
      ,
     "cabernetSauvignon" => [
         ["variedad" => "Seco", "cantidad" => 80, "aniProduccion" => 2004, "precioUnidad" => 1609],
         ["variedad" => "Dulce" , "cantidad" => 230 , "anioProduccion" => 1970 , "precioUnidad" => 321 ],
         ["variedad" => "Semidulce" , "cantidad" => 45 , "anioProduccion" => 2019 , "precioUnidad" => 180 ]
     ],
     "merlot" =>[
         ["variedad" => "Seco", "cantidad" => 12, "anioProduccion" => 1955, "precioUnidad" => 434],
         ["variedad" => "Dulce" , "cantidad" => 62 , "anioProduccion" => 1992 , "precioUnidad" => 1345],
         ["variedad" => "Semidulce" , "cantidad" => 101 , "anioProduccion" => 1995 , "precioUnidad" => 299] 
     ]];
 
 function totalVinos($vinos){
     $cantidaBotellas = 0;
     $precioTotal = 0;
     for ($i=0; $i < 1; $i++) { 
         for ($j = 0; $j < 3 ; $j++) { 
             $cantidaBotellas = $cantidaBotellas + $vinos["malbec"][$j]["cantidad"];
             $precioTotal = $precioTotal + $vinos["malbec"][$j]["precioUnidad"];
         };
         $vinoSanto["malbec"] = ["cantidad" => $cantidaBotellas , "precioPromedio" => round($precioTotal/3)];
         $cantidaBotellas = 0;
         $precioTotal = 0;
         for ($j = 0; $j < 3 ; $j++) { 
             $cantidaBotellas = $cantidaBotellas + $vinos["cabernetSauvignon"][$j]["cantidad"];
             $precioTotal = $precioTotal + $vinos["cabernetSauvignon"][$j]["precioUnidad"];
         };
         $vinoSanto["cabernerSauvignon"] = ["cantidad" => $cantidaBotellas , "precioPromedio" => round($precioTotal/3)];
         $cantidaBotellas = 0;
         $precioTotal = 0;   
         for ($j = 0; $j < 3 ; $j++) { 
             $cantidaBotellas = $cantidaBotellas + $vinos["merlot"][$j]["cantidad"];
             $precioTotal = $precioTotal + $vinos["merlot"][$j]["precioUnidad"];
         };
         $vinoSanto["merlot"] = ["cantidad" => $cantidaBotellas , "precioPromedio" => round($precioTotal/3)];
     };
     print_r($vinoSanto);
     return $vinoSanto;
 };
 
 $datosVinos = totalVinos($vinosViñedos);
 
