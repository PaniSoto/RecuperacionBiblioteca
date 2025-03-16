<div>
    <a href="{{ route('forHires.create') }}" class="btn btn-success">Crear préstamo</a>

    <table class="table table-striped table-bordered">

        <thead class="thead-dark">
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
                    <td class="text-center">{{ $forHire->status }}</td>
                    <td class="text-center">
                        <a class="btn btn-warning me-2" href="{{ route('forHires.show', $forHire) }}"> <i
                                class="bi bi-binoculars"></i></a>


                        <a class="btn btn-info me-2" href="{{ route('forHires.edit', $forHire) }}"><i class="bi bi-pencil-square"></i></a>

                        <a class="btn btn-danger me-2" href="{{ route('forHires.destroy', $forHire) }}"><i class="bi bi-trash"></i></a>
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
