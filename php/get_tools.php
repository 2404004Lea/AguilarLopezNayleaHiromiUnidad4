<?php
ob_start();

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');
header('Cache-Control: no-store, no-cache, must-revalidate, max-age=0');
header('Pragma: no-cache');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(200);
    exit;
}

$host     = "sql105.infinityfree.com";
$user     = "if0_41452502";
$password = "MMY9eFJq0ZzQs";
$db       = "if0_41452502_smartmachings";

$conexion = new mysqli($host, $user, $password, $db);

if ($conexion->connect_error) {
    ob_end_clean();
    http_response_code(500);
    echo json_encode(['error' => 'Conexion fallida: ' . $conexion->connect_error]);
    exit;
}

$conexion->set_charset('utf8mb4');

$resultado = $conexion->query(
    "SELECT `id`, `nombre`, `categoria`, `descripcion`, `model_path`, `color`, `destacado`
     FROM `herramientas` WHERE 1"
);

if (!$resultado) {
    ob_end_clean();
    http_response_code(500);
    echo json_encode(['error' => 'Query fallida: ' . $conexion->error]);
    exit;
}

$herramientas = [];
while ($fila = $resultado->fetch_assoc()) {
    $herramientas[] = $fila;
}

$conexion->close();
ob_end_clean();
echo json_encode($herramientas, JSON_UNESCAPED_UNICODE);
?>