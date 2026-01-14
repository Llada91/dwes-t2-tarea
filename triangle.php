<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Triángulo</title>
    <style>
        body {
            font-family: monospace;
        }
    </style>
</head>
<body>

<?php
require_once "clases/TriangleGenerator.php";

echo TriangleGenerator::generateTriangle(6);
?>

</body>
</html>
