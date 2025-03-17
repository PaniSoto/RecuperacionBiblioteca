<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Libro</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Volver al inicio</a>

        <h1 class="mb-4">Detalles del Libro</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Título del Libro:</h5>
                <p class="card-text">{{ $book->title ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Autor del Libro:</h5>
                <p class="card-text">{{ $book->author ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Género literario:</h5>
                <p class="card-text">{{ $book->genre ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3 mb-5">
            <div class="card-body">
                <h5 class="card-title">Fecha de publicación:</h5>
                <p class="card-text">{{ $book->published_date ?? 'No hay datos' }}</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
