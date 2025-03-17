<div class="container mt-4">
    <div class="text-end">
        <a href="{{ route('readers.create') }}" class="btn btn-primary mb-3">Crear lector</a>
    </div>

    <div class="table-responsive">
        <h2 class="text-left mb-4 underline">Listado de lectores</h2>
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">Nombre</th>
                    <th scope="col" class="text-center">Dirección</th>
                    <th scope="col" class="text-center">Teléfono</th>
                    <th scope="col" class="text-center">Correo electrónico</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($readers as $reader)
                    <tr>
                        <td class="text-center">{{ $reader->name }}</td>
                        <td class="text-center">{{ $reader->address }}</td>
                        <td class="text-center">{{ $reader->phone }}</td>
                        <td class="text-center">{{ $reader->email }}</td>
                        <td class="text-center">
                            <a class="btn btn-outline-secondary me-2" href="{{ route('readers.show', $reader) }}">
                                <i class="bi bi-binoculars"></i>
                            </a>
                            <a class="btn btn-outline-primary me-2" href="{{ route('readers.edit', $reader) }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btn btn-outline-danger me-2" href="{{ route('readers.destroy', $reader) }}">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-center">
                        {{ $readers->links() }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>

