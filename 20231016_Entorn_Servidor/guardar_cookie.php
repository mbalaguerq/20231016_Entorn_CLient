<?php

//Verificamos si se ha enviado un formulario post

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $tarea = $_POST['tarea'];
    
    // Comprobar si la cookie ya existe
    if (isset($_COOKIE['tarea_cookie'])) {
        // Si la cookie existe, acumula el nuevo valor al valor anterior
        $valor_anterior = $_COOKIE['tarea_cookie'];
        $tarea = $valor_anterior . ', ' . $tarea;
    }
    
    // Crea o actualiza la cookie con el valor acumulado
    setcookie('tarea_cookie', $tarea, time() + 30 * 24 * 60 * 60, '/');
    
    // Redirige de vuelta a la página anterior o a donde quieras
    header("Location: index.html");
    exit;
} else {
    // Si no se envió un formulario POST, redirige directamente a la página anterior
    header("Location: index.html");
    exit;
}
?>