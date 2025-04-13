<x-admin-layout>
    <form action="{{ route('producto.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" value="{{ old('nombre') }}" required>

        <textarea name="descripcion" id="" required rows="5">{{ old('descripcion') }}</textarea>

        <input type="number" step="0.01" name="precio" value="{{ old('precio') }} required">

        <select name="categoria_id" required>
            @foreach ($categorias as $categoria)
                <option value="{{ $categoria->id }}">
                    {{ $categoria->nombre }}
                </option>
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