<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
        }
        main {
            margin-top: 20px;
        }
        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ddd;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Biblioteca</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <button class="btn btn-primary" onclick="window.location.href='ingresar_libro.php';">Ingresar un nuevo libro</button>
    </div>
    </nav>
</header>

<main>
<table>
<thead>
<tr>
<th>Título</th>
<th>Autor</th>
<th>Año</th>
</tr>
</thead>
<tbody>
    <?php
            $libros = [
                ["titulo" => "tres metros sobre el cielo", "autor" => "gaby", "año" => 2000],
                ["titulo" => "caperucita roja", "autor" => "leonidas", "año" => 2000],
                ["titulo" => "la toalla del mojado", "autor" => "servantes de asuncion", "año" => 1985],
                ["titulo" => "la hormiga martina ","autor"=>"hola pocoyo","año"=>200]
            ];

            foreach ($libros as $libro) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($libro['titulo']) . "</td>";
                echo "<td>" . htmlspecialchars($libro['autor']) . "</td>";
                echo "<td>" . htmlspecialchars($libro['año']) . "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</main>

<footer class="bg-dark text-white text-center py-3 mt-5">
    <p>Santos Silverio Mejía Mazariegos | Carnet: 202460504</p>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

