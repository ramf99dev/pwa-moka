<x-admin-layout>
    <a href="{{ route('producto.create') }}">Crear</a>
    <table class="table-auto">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Categoria</th>
                <th>Precio</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto )
                <tr>
                    <td>
                        {{ $producto->nombre }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ $producto->categoria }}
                    </td>
                </tr>
                <tr>
                    <td>
                        {{ $producto->precio }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-admin-layout>