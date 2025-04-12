<x-admin-layout>
    <form action="{{ route('producto.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre">
        <textarea name="descripcion" id=""></textarea>
        <input type="number" step="0.01">
        <select name="categoria">
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
            @endforeach
        </select>
        <a href="{{ route('producto.index') }}">Cancelar</a>
        <button>Guardar</button>
        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error )
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        @endif
    </form>
    
</x-admin-layout>