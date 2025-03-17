<div class="container mt-4">
    <div class="text-end">
        <a href="{{ route('forHires.create') }}" class="btn btn-primary mb-3">Crear préstamo</a>
    </div>

    <div class="table-responsive">
        <table class="table table-hover table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col" class="text-center">Fecha Préstamo</th>
                    <th scope="col" class="text-center">Fecha Devolución</th>
                    <th scope="col" class="text-center">Estado</th>
                    <th scope="col" class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($forHires as $forHire)
                    <tr>
                        <td class="text-center">{{ $forHire->forHire_date }}</td>
                        <td class="text-center">{{ $forHire->return_date }}</td>
                        <td class="text-center">
                            @if ($forHire->status == 'Aprobado')
                                <span class="badge bg-success">{{ $forHire->status }}</span>
                            @elseif ($forHire->status == 'Pendiente')
                                <span class="badge bg-warning">{{ $forHire->status }}</span>
                            @elseif ($forHire->status == 'Rechazado')
                                <span class="badge bg-danger">{{ $forHire->status }}</span>
                            @endif
                        </td>
                        <td class="text-center">
                            <a class="btn btn-outline-secondary me-2" href="{{ route('forHires.show', $forHire) }}">
                                <i class="bi bi-binoculars"></i>
                            </a>
                            <a class="btn btn-outline-primary me-2" href="{{ route('forHires.edit', $forHire) }}">
                                <i class="bi bi-pencil-square"></i>
                            </a>
                            <a class="btn btn-outline-danger me-2" href="{{ route('forHires.destroy', $forHire) }}">
                                <i class="bi bi-trash"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="4" class="text-center">
                        {{ $forHires->links() }}
                    </td>
                </tr>
            </tfoot>
        </table>
    </div>
</div>
