<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Biblioteca</title>
</head>

<body>

    <?php
    $libros = [
        "libro1" => [
            "titulo" => "PHP para Principiantes",
            "autor" => "Carlos Ruiz",
            "precio" => 19.99,
            "categoria" => "Desarrollo web"
        ],
        "libro2" => [
            "titulo" => "JavaScript Avanzado",
            "autor" => "Laura García",
            "precio" => 25.99,
            "categoria" => "Desarrollo web"
        ],
        "libro3" => [
            "titulo" => "Algoritmos en Python",
            "autor" => "Miguel Fernández",
            "precio" => 29.99,
            "categoria" => "Algoritmos"
        ]
    ];
    ?>


    <h2>Información de todos los libros</h2>

    <table border="1">
        <tr>
            <th>Título</th>
            <th>Autor</th>
            <th>Precio (€)</th>
            <th>Categoría</th>
        </tr>

        <?php
        foreach ($libros as $libro) {
            echo "<tr>";
            echo "<td>{$libro['titulo']}</td>";
            echo "<td>{$libro['autor']}</td>";
            echo "<td>{$libro['precio']}</td>";
            echo "<td>{$libro['categoria']}</td>";
            echo "</tr>";
        }
        ?>
    </table>


    <h2>Libros de la categoría Desarrollo Web</h2>

    <ol>
        <?php
        foreach ($libros as $libro) {
            if ($libro["categoria"] === "Desarrollo web") {
                echo "<li>{$libro['titulo']} - {$libro['autor']}</li>";
            }
        }
        ?>
    </ol>

</body>

</html>