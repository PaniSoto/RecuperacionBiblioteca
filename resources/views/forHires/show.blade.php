<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('dashboard') }}">Volver al inicio</a>

    <h1>forHire_date: {{ $forHire->forHire_date ?? 'No hay datos' }}</h1>
    <h1>return_date: {{ $forHire->return_date  ?? 'No hay datos'  }}</h1>
    <h1>status: {{ $forHire->status  ?? 'No hay datos'  }}</h1>
    <h1>book: {{ $forHire->book->title ?? 'No hay datos' }}</h1>
    <h1>librarian_id: {{ $forHire->librarian->name  ?? 'No hay datos'  }}</h1>
    <h1>reader_id: {{ $forHire->reader->name  ?? 'No hay datos'  }}</h1>
</body>
</html>