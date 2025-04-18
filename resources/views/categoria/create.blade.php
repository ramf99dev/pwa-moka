<x-admin-layout>
    <div class="my-3 w-fit gap-4 space-y-3 place-self-center self-center rounded-lg bg-white p-4 shadow md:w-96">
        <form action="{{ route('categoria.store') }}" method="POST" class="text-pink-600">
            @csrf
            <div class="flex flex-col gap-2">
                <div class="flex flex-col gap-1">
                    <label for="nombre">Nombre</label>
                    <input type="text" name="nombre" value="{{ old('nombre') }}" required
                        class="rounded-lg border-pink-600">
                </div>
            </div>

            <div class="mt-6 flex flex-row place-content-between gap-4">
                <x-cancel-button ruta="categoria.index"></x-cancel-button>
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
