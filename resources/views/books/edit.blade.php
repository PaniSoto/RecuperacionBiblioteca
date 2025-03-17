<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar Libro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <a href="{{ route('dashboard') }}" class="btn btn-outline-secondary mb-4">← Volver al inicio</a>

        <div class="card shadow-lg p-4">
            <h1 class="mb-4 text-center">Editar Libro</h1>
            <form action="{{ route('books.update', $book) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Título del libro</label>
                    <input type="text" class="form-control" id="title" name="title"
                        value="{{ old('title', $book->title) }}">
                    @error('title')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="author" class="form-label">Autor del libro</label>
                    <input type="text" class="form-control" id="author" name="author"
                        value="{{ old('author', $book->author) }}">
                    @error('author')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="genre" class="form-label">Género literario</label>
                    <input type="text" class="form-control" id="genre" name="genre"
                        value="{{ old('genre', $book->genre) }}">
                    @error('genre')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="published_date" class="form-label">Fecha de publicación</label>
                    <input type="date" class="form-control" id="published_date" name="published_date"
                        value="{{ old('published_date', $book->published_date) }}">
                    @error('published_date')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary w-100">Actualizar libro</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
