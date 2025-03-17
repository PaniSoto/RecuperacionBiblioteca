<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-4">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary mb-3">Volver al inicio</a>

        <h1 class="mb-4">Formulario para la creación de un préstamo</h1>
        <form action="{{ route('forHires.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="forHire_date">Fecha del préstamo:</label>
                <input type="date" class="form-control" id="forHire_date" name="forHire_date" value="{{ old('forHire_date') }}">
                @error('forHire_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="return_date">Fecha de devolución:</label>
                <input type="date" class="form-control" id="return_date" name="return_date" value="{{ old('return_date') }}" min="{{ old('forHire_date', date('Y-m-d')) }}">
                @error('return_date')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Estado:</label>
                <select class="form-control" id="status" name="status">
                    <option value="Pendiente">Pendiente</option>
                    <option value="Aprobado">Aprobado</option>
                    <option value="Rechazado">Rechazado</option>
                </select>
            </div>

            <div class="form-group">
                <label for="book_id">Título del libro:</label>
                <select class="form-control" id="book_id" name="book_id">
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="librarian_id">Nombre del bibliotecario:</label>
                <select class="form-control" id="librarian_id" name="librarian_id">
                    @foreach ($librarians as $librarian)
                        <option value="{{ $librarian->id }}">{{ $librarian->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="reader_id">Nombre del lector:</label>
                <select class="form-control" id="reader_id" name="reader_id">
                    @foreach ($readers as $reader)
                        <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Crear</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
