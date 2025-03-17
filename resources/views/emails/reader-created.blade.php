<x-mail::message>
    <h1>Lector Creado</h1>
    <p>Nombre: {{ $reader->name }}</p>
    <p>Dirección: {{ $reader->address }}</p>
    <p>Teléfono: {{ $reader->phone }}</p>
    <p>Correo electrónico: {{ $reader->email }}</p>
</x-mail::message>
