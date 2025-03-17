<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalles del Lector</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Volver al inicio</a>

        <h1 class="mb-4">Detalles del Lector</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nombre del Lector:</h5>
                <p class="card-text">{{ $reader->name ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Teléfono del Lector:</h5>
                <p class="card-text">{{ $reader->phone ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">Dirección del Lector:</h5>
                <p class="card-text">{{ $reader->address ?? 'No hay datos' }}</p>
            </div>
        </div>

        <div class="card mt-3 mb-5">
            <div class="card-body">
                <h5 class="card-title">Correo electrónico del Lector:</h5>
                <p class="card-text">{{ $reader->email ?? 'No hay datos' }}</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>