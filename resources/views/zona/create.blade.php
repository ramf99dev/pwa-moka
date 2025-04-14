<x-admin-layout>
    <div class="my-3 w-fit gap-4 space-y-3 place-self-center self-center rounded-lg bg-white p-4 shadow md:w-96">
        <form action="{{ route('zona.store') }}" method="POST">
            @csrf
            <div class="mt-3 flex flex-col gap-4">
                <div class="flex flex-col gap-1">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{ old('nombre') }}" required
                        class="rounded-lg border-pink-600">
                </div>

                <div class="mt-3 flex flex-col gap-1">
                    <label for="numero_personas">Numero de Personas</label>
                    <input class="rounded-lg border-pink-600" type="number" step="1" min="0"
                        name="numero_personas" value="{{ old('numero_personas') }}" required>
                </div>
            </div>

            <div class="mt-9 flex flex-row place-content-between gap-4">
                <x-cancel-button ruta="zona.index"></x-cancel-button>
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
