<x-admin-layout>
    <div class="self-center gap-4 p-4 my-3 space-y-3 bg-white rounded-lg shadow w-fit md:w-96 place-self-center">
        <form action="{{ route('producto.store') }}" method="POST">
            @csrf
            <div class="flex flex-col gap-4 mt-3">
                <div class="flex flex-col gap-1">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{ old('nombre') }}" required
                        class="border-pink-600 rounded-lg">
                </div>

                <div class="flex flex-col gap-1 mt-3">
                    <label for="descripcion">Descripción</label>
                    <textarea class="border-pink-600 rounded-lg resize-none" name="descripcion" id="" required rows="5">{{ old('descripcion') }}</textarea>
                </div>

                <div class="flex flex-col gap-1 mt-3">
                    <label for="categoria">Categoria</label>
                    <select class="border-pink-600 rounded-lg" name="categoria_id" required>
                        <option value="" disabled selected>Selecciona una categoria</option>
                        @foreach ($categorias as $categoria)
                            <option value="{{ $categoria->id }}">
                                {{ $categoria->nombre }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="flex flex-col gap-1 mt-3">
                    <label for="precio">Precio</label>
                    <input class="border-pink-600 rounded-lg" type="number" step="0.01" min="0" name="precio"
                        value="{{ old('precio') }}" required>
                </div>
            </div>

            <div class="flex flex-row gap-4 mt-9 place-content-between">
                <x-cancel-button ruta="producto.index"></x-cancel-button>
                <x-save-button></x-save-button>
            </div>

            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>
                            {{ $error }}
                        </li>
                    @endforeach
                </ul>
            @endif
        </form>
    </div>

</x-admin-layout>
