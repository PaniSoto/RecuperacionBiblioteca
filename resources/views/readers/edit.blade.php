<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Lector</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary mb-4">← Volver al inicio</a>

        <div class="card shadow-lg p-4">
            <h1 class="mb-4 text-center">Editar Lector</h1>
            <form action="{{ route('readers.update', $reader) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">Nombre del lector</label>
                    <input type="text" class="form-control" id="name" name="name"
                        value="{{ old('name', $reader->name) }}">
                    @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="address" class="form-label">Dirección del lector</label>
                    <input type="text" class="form-control" id="address" name="address"
                        value="{{ old('address', $reader->address) }}">
                    @error('address')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="phone" class="form-label">Teléfono del lector</label>
                    <input type="text" class="form-control" id="phone" name="phone"
                        value="{{ old('phone', $reader->phone) }}">
                    @error('phone')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Correo electrónico del lector</label>
                    <input type="email" class="form-control" id="email" name="email"
                        value="{{ old('email', $reader->email) }}">
                    @error('email')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Actualizar lector</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>