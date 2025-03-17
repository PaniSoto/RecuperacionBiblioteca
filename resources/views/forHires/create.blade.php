<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear Préstamo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary mb-4">← Volver al inicio</a>

        <div class="card shadow-lg p-4">
            <h1 class="mb-4 text-center">Formulario para la creación de un préstamo</h1>
            <form action="{{ route('forHires.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="forHire_date" class="form-label">Fecha del préstamo</label>
                    <input type="date" class="form-control" id="forHire_date" name="forHire_date" value="{{ old('forHire_date') }}">
                    @error('forHire_date')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="return_date" class="form-label">Fecha de devolución</label>
                    <input type="date" class="form-control" id="return_date" name="return_date" value="{{ old('return_date') }}" min="{{ old('forHire_date', date('Y-m-d')) }}">
                    @error('return_date')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Estado</label>
                    <select class="form-select" id="status" name="status">
                        <option value="Pendiente">Pendiente</option>
                        <option value="Aprobado">Aprobado</option>
                        <option value="Rechazado">Rechazado</option>
                    </select>
                </div>

                <div class="mb-3">
                    <label for="book_id" class="form-label">Título del libro</label>
                    <select class="form-select" id="book_id" name="book_id">
                        @foreach ($books as $book)
                            <option value="{{ $book->id }}">{{ $book->title }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="librarian_id" class="form-label">Nombre del bibliotecario</label>
                    <select class="form-select" id="librarian_id" name="librarian_id">
                        @foreach ($librarians as $librarian)
                            <option value="{{ $librarian->id }}">{{ $librarian->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mb-3">
                    <label for="reader_id" class="form-label">Nombre del lector</label>
                    <select class="form-select" id="reader_id" name="reader_id">
                        @foreach ($readers as $reader)
                            <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit" class="btn btn-primary w-100">Crear Préstamo</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
