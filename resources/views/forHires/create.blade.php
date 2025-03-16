<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crear</title>
</head>
<body>
    <a href="{{ route('dashboard') }}">Volver al inicio</a>

    <h1>Formulario para la creación de un préstamo</h1>
    <form action="{{ route('forHires.store') }}" method="POST">
        @csrf
        <label>
            Fecha del préstamo:
            <input type="date" name="forHire_date" value="{{ old('forHire_date') }}">
        </label>
        @error('forHire_date')
            <div style="color:red;">{{ $message }}</div>
            
        @enderror
        <br><br>
        <label>
            Fecha de devolución:
            <input type="date" name="return_date" value="{{ old('return_date') }}">
        </label>
        @error('return_date')
            <div style="color:red;">{{ $message }}</div>
        @enderror
        <br><br>
        <label>
            Estado:
            <select name="status">
                <option value="Pendiente">Pendiente</option>
                <option value="Aprobado">Aprobado</option>
                <option value="Rechazado">Rechazado</option>
            </select>
        </label>
        <br><br>
        <label>
            Título del libro:
            <select name="book_id">
                @foreach ($books as $book)
                    <option value="{{ $book->id }}">{{ $book->title }}</option>
                @endforeach
            </select>
        </label>
        <br><br>
        <label>
            Nombre del bibliotecario:
            <select name="librarian_id">
                @foreach ($librarians as $librarian)
                    <option value="{{ $librarian->id }}">{{ $librarian->name }}</option>
                @endforeach
            </select>
        </label>
        <br><br>
        <label>
            Nombre del lector:
            <select name="reader_id">
                @foreach ($readers as $reader)
                    <option value="{{ $reader->id }}">{{ $reader->name }}</option>
                @endforeach
            </select>
        </label>
        <button type="submit">Crear</button>
    </form>
</body>
</html>