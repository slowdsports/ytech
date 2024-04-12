<?php
error_reporting(E_ALL);
ini_set('display_errors', '1');
include ('inc/config.php');

if (!isset($_GET['p'])) {
    header('Location: ?p=home');
} else {
    // Querys
    include ('inc/querys.php');
    // Header
    include ('inc/header.php');
    // Escapar caracteres peligrosos
    $paginaSolicitada = basename($_GET['p']);
    // Ruta al directorio de páginas
    $rutaDirectorio = __DIR__ . '/view/';
    // Verificar
    if (file_exists($rutaDirectorio . $paginaSolicitada . ".php")) {
        // Si existe, cárgala
        include ($rutaDirectorio . $paginaSolicitada . ".php");
    } else {
        // Si no existe, 404.php
        include ("view/404.php");
    }
    include ('inc/footer.php');
}