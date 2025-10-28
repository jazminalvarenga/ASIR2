<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
       <h3>Hazme una pregunta...</h3>
       <input type="text" name="pregunta" required>
       <?php
            $pregunta = isset($_GET["pregunta"]);
            
            $respuestas = array("Si", "no", "quizás"," claro que sí"," por supuesto que no"," no lo tengo claro", "seguro", "yo diría que sí", "ni de coña");
            $num = rand(0, count($respuestas) -1);
            echo"",$pregunta;
            echo"";
            echo $respuestas[$num];
      ?>
      


      <?php //3
    $randoms = array();
    for ($i = 1; $i < 33; $i++) {
        array_push($randoms, rand(0,100));
    }
    $el_mayor = max($randoms);

// El menor: Se usa la función min() de PHP
    $el_menor = min($randoms);

// La media (promedio): Se calcula sumando todos los elementos y dividiendo por el número de elementos.
// Suma de todos los elementos: Se usa la función array_sum() de PHP
    $suma_elementos = array_sum($randoms);

// Número de elementos
    $conteo_elementos = count($randoms);

// Cálculo de la media
    $la_media = $suma_elementos / $conteo_elementos;
    
    echo"El número mas grande es ",$el_mayor," el menor es ",$el_menor," la media de todos es ",$la_media;
    
    ?>


    <?php //4
    $arrayy = array();
    $genero = array("M","F");
    
    for ($i = 1; $i < 100; $i++) {
        array_push($arrayy, $genero[rand(0,1)]);
    }
    $cadena_completa = implode(" ", $arrayy);
    echo"De mujeres hay ",substr_count($cadena_completa,"F");
    echo"De hombres hay ",substr_count($cadena_completa,"M");
    ?>

    <?php //5
        
    ?>
<?php
function ejercicio5($cantidad) {
    $valores = [500, 200, 100, 50, 20, 10, 5, 2, 1];
    $resultado = [];
    
    // Calcular cantidad para cada valor
    foreach ($valores as $valor) {
        $cantidad_valor = intval($cantidad / $valor);
        $resultado[$valor] = $cantidad_valor;
        $cantidad -= $cantidad_valor * $valor;
    }
    
    // Mostrar resultados
    echo "<h4>Descomposición de $cantidad:</h4>";
    echo "<ul>";
    
    foreach ($resultado as $valor => $cant) {
        $tipo = ($valor >= 5) ? "billete" : "moneda";
        $plural = ($cant != 1) ? "s" : "";
        echo "<li>$cant $tipo$plural de $valor</li>";
    }
    
    echo "</ul>";
}

ejercicio5(1234);

?>

</form>

<table>
<?php



    $nombres = ["juan" => 1.46, "marcelo" => 1.56 ,"patricio" => 1.66,"jose" => 1.76,"maitena" => 1.33];
    $suma =0;
    
    echo "<th>ALUMNOS</th>";
    echo "<tr>
        <td>
        nombre
        
        </td>
        <td>
        altura
        
        </td>
        
        </tr>";
  
    foreach ($nombres as $nombre => $altura) {
        
        echo "<tr>
        <td>
        $nombre
        
        </td>
        <td>
        $altura
        
        </td>
        
        </tr>";
  
    $suma += $altura;
    }
    echo "<tr
        <td>
        $suma
        
        </td> </tr>";
    $media = $suma / 5 
   
?>
</table>
<table>
<?php 
// 7
$nombres = [  ['nombre'=>'Aitor', 'altura'=>182, 'email'=>'aitor@correo.com'],['nombre'=>'Mena', 'altura'=>162, 'email'=>'mena@correo.com'],['nombre'=>'roma', 'altura'=>192, 'email'=>'roma@correo.com']];
   
    
    echo "<th>ALUMNOS</th>";
    echo "<tr>
        <td>
        nombre
        
        </td>
        <td>
        altura
        
        </td>
        <td>
        email
        
        </td>
        
        </tr>";
  
    foreach ($nombres as $nombre => $altura,$altura => $altura,$nombre => $altura) {
        
        echo "<tr>
        <td>
        $nombre
        
        </td>
        <td>
        $altura
        
        </td>
        
        </tr>";
  
    $suma += $altura;
    }
    echo "<tr
        <td>
        $suma
        
        </td> </tr>";
    $media = $suma / 5 
   




    // 8
    $numeros = [];
for (i = 0 ; i < 6*9 ; i++) {
    $num = rand(100, 999);
    if (!in_array($num, $numeros)) {
        $numeros[] = $num;
    }
$minimo
$maximo
$matriz = [];
$indice = 0;
for ($i = 0; $i < 6; $i++) {
    for ($j = 0; $j < 9; $j++) {
        $matriz[$i][$j] = $numeros[$indice++];
        if ($matriz[$i][$j] > $maximo) {
            $maximo = $matriz[$i][$j];
            $colMax = $j;
        }
        if ($matriz[$i][$j] < $minimo) {
            $minimo = $matriz[$i][$j];
            $filaMin = $i;
        }
    }
}


echo "<table>";
for ($i = 0; $i < 6; $i++) {
    echo "<tr>";
    for ($j = 0; $j < 9; $j++) {
        $clase = "";
        if ($j == $colMax) {
            $color = "azul";
        }
        if ($i == $filaMin) {
            $color = "verde";
        }
        else {
            $color = "white";
        }
        echo "<td style="$color"'>{$matriz[$i][$j]}</td>";
    }
    echo "</tr>";
}
echo "</table>";

?>
</table>
