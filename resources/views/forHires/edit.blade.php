<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editar los préstamos</title>
</head>
<body>
    <a href="{{ route('dashboard') }}">Volver al inicio</a>

        <form action="{{ route('forHires.update', $forHire) }}" method="POST">
            @csrf
            @method('PUT')
            <label>
                request_date:
                <input type="date" name="forHire_date" value="{{ old('forHire_date', $forHire->forHire_date) }}">
            </label>
            @error('forHire_date')
                <div style="color:red;">{{ $message }}</div>
            @enderror
           
            <br><br>
            <label>
                delivery_date:
                <input type="date" name="return_date" value="{{ old('return_date', $forHire->return_date) }}">
            </label>
            @error('return_date')
                <div style="color:red;">{{ $message }}</div>
            @enderror
            <br><br>
            <label>
                estado:
                <select name="status">
                    <option value="Pendiente" {{ $forHire->status == 'Pendiente' ? 'selected' : '' }}>Pendiente</option>
                    <option value="Aprobado" {{ $forHire->status == 'Aprobado' ? 'selected' : '' }}>Aprobado</option>
                    <option value="Rechazado" {{ $forHire->status == 'Rechazado' ? 'selected' : '' }}>Rechazado</option>
                </select>
            </label>
            <br><br>
            <label>
                book_id:
                <select name="book_id">
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}" {{ $forHire->book_id == $book->id ? 'selected' : '' }}>{{ $book->title }}</option>
                    @endforeach
                </select>
            </label>
            <br><br>
            <label>
                librarian_id:
                <select name="librarian_id">
                    @foreach ($librarians as $librarian)
                        <option value="{{ $librarian->id }}" {{ $forHire->librarian_id == $librarian->id ? 'selected' : '' }}>{{ $librarian->name }}</option>
                    @endforeach
                </select>
            </label>
            <br><br>
            <label>
                reader_id:
                <select name="reader_id">
                    @foreach ($readers as $reader)
                        <option value="{{ $reader->id }}" {{ $forHire->reader_id == $reader->id ? 'selected' : '' }}>{{ $reader->name }}</option>
                    @endforeach
                </select>
            </label>
            <button type="submit">Actualizar préstimos</button>
        </form>
</body>
</html>