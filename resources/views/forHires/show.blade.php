<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Préstamo</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Volver al inicio</a>

        <h1 class="mb-4">Detalles del Préstamo</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Fecha del Préstamo:</h5>
                <p class="card-text">{{ $forHire->forHire_date ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Fecha de Devolución:</h5>
                <p class="card-text">{{ $forHire->return_date ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Estado:</h5>
                <p class="card-text">{{ $forHire->status ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Título del Libro:</h5>
                <p class="card-text">{{ $forHire->book->title ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Nombre del Bibliotecario:</h5>
                <p class="card-text">{{ $forHire->librarian->name ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3 mb-5">
            <div class="card-body">
                <h5 class="card-title">Nombre del Lector:</h5>
                <p class="card-text">{{ $forHire->reader->name ?? 'No hay datos' }}</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
