<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libros</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Bienvenido quieres agregar un libro </h1>
        <form method="post" class="mt-4">
            <div class="mb-3">
                <label for="titulo" class="form-label">Título del libro:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="autor" class="form-label">Autor del libro:</label>
                <input type="text" id="autor" name="autor" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="anio" class="form-label">Año de publicación:</label>
                <input type="number" id="anio" name="anio" class="form-control" required>
            </div>
            <button type="submit" name="agregar" class="btn btn-primary">Agregar Libro</button>
        </form>

        <?php
        $archivo = "libros.txt";
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["agregar"])) {
            $titulo = htmlspecialchars($_POST["titulo"]);
            $autor = htmlspecialchars($_POST["autor"]);
            $anio = htmlspecialchars($_POST["anio"]);
            $libro = $titulo . " - " . $autor . " - " . $anio . PHP_EOL;

            file_put_contents($archivo, $libro, FILE_APPEND);

            echo "<div class='alert alert-success mt-4'>Libro agregado: " . $titulo . " de " . $autor . " (Año: " . $anio . ")</div>";
        }

        if (file_exists($archivo)) {
            echo "<h2 class='mt-5'>Lista de Libros</h2>";
            echo "<table class='table table-striped table-bordered mt-3'>";
            echo "<thead class='table-dark'><tr><th>Título</th><th>Autor</th><th>Año</th></tr></thead><tbody>";

            $libros = file($archivo, FILE_IGNORE_NEW_LINES);
            foreach ($libros as $libro) {
                list($titulo, $autor, $anio) = explode(" - ", $libro);
                echo "<tr><td>" . htmlspecialchars($titulo) . "</td><td>" . htmlspecialchars($autor) . "</td><td>" . htmlspecialchars($anio) . "</td></tr>";
            }

            echo "</tbody></table>";
        }
        ?>

        <div class="mt-4">
            <button class="btn btn-secondary" onclick="window.location.href='index.php';">Volver a Inicio</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
