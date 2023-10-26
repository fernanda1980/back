<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    echo "ejercicio1";
    $numeros = [2,4,6,8,10,12,14,16,18,20];
    echo "</br>";
    foreach($numeros as $j){
      print"<pre>\n";
      print ($j);
      print"<pre>\n";
    }
    echo "</br>";
    echo "ejercicio2";
    $clase = ["Pedro","Ana",34,1];
    print_r ($clase);
    echo "</br>";
    echo "ejercicio3";
    echo "</br>";
    $personales =[
      "nombre"=> "pedro",
      "apellido"=> "Torres",
      "direccion"=> "Av. Mayor 3703",
      "telefono"=> 1122334455
    ];
    echo "</br>";
    echo "ejercicio4";
    echo "</br>";
    $ciudades= ["Madrid","Barcelona","Londres","New York","Los Angeles","Chicago"];

    foreach ($ciudades as $i=>$j) {
      print"<pre>\n";
      print ("La ciudad con el indice: $i tiene el nombre: $j");
      print"<pre>\n";
    }


    echo "</br>";
    echo "ejercicio5";
    echo "</br>";

    $ciudades1=[
              "MD"=> "Madrid",
              "BCL"=> "Barcelona",
              "LD"=> "Londres",
              "NY"=> "New York",
              "LA"=> "Los Angeles",
              "CCG"=> "Chicago",

    ];
    foreach ($ciudades1 as $i => $j) {
      print"<pre>\n";
      print ("El indice: $j es:$i");
      print"<pre>\n";
    }

    ?>

  </body>
</html>
