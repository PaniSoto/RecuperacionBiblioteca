<div class="container mt-4">
    <div class="text-end">
        <a href="{{ route('books.create') }}" class="btn btn-primary mb-3">Crear libro</a>
    </div>

    <div class="table-responsive">
        <h2 class="text-left mb-4 underline">Listado de libros</h2>
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">Título</th>
                    <th scope="col" class="text-center">Autor</th>
                    <th scope="col" class="text-center">Género literario</th>
                    <th scope="col" class="text-center">Fecha de publicación</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td class="text-center">{{ $book->title }}</td>
                        <td class="text-center">{{ $book->author }}</td>
                        <td class="text-center">{{ $book->genre }}</td>
                        <td class="text-center">{{ $book->published_date }}</td>
                        <td class="text-center">
                            <a class="btn btn-outline-secondary me-2" href="{{ route('books.show', $book) }}">
                                <i class="bi bi-binoculars"></i>
                            </a>
                            <a class="btn btn-outline-primary me-2" href="{{ route('books.edit', $book) }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btn btn-outline-danger me-2" href="{{ route('books.destroy', $book) }}">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-center">
                        {{ $books->links() }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

