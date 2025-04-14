<x-admin-layout>
    <div class="flex flex-row place-items-center justify-between">
        <x-add-button ruta="zona.create"></x-add-button>
        <form class="flex w-full flex-row place-items-center" action="{{ route('zona.index') }}" method="GET">
            <input name="buscar" type="text" class="h-10 w-full rounded-lg border-pink-600 py-4"
                placeholder="Buscar...">
            <button
                class="relative -ml-10 inline-block size-8 cursor-pointer justify-center rounded-lg bg-gradient-to-tr from-pink-400 to-pink-300 p-2 shadow transition-colors hover:scale-110">
                <img src="/images/nav-icons/buscar.svg" alt="" class="h-full place-self-center">
            </button>
        </form>
    </div>
    <div class="mt-3 grid grid-cols-1 gap-4 text-wrap md:grid-cols-2">
        @foreach ($zonas as $zona)
            <div>
                <div class="space-y-3 rounded-lg bg-white p-4 shadow">
                    <div class="flex items-baseline space-x-2 text-xl">
                        <div
                            class="rounded-lg bg-pink-200 bg-opacity-50 p-1.5 text-lg font-medium uppercase tracking-wider text-pink-800">
                            {{ $zona->nombre }}
                        </div>
                    </div>
                    <div class="flex place-content-between">
                        <div class="text-sm font-medium text-black">
                            {{ $zona->numero_personas }} personas
                        </div>
                        <div>
                            <a class="inline-block" href="{{ route('zona.edit', $zona) }}"><img class="h-4"
                                    src="/images/nav-icons/editar.svg" alt=""></a>
                            <form class="inline-block" action="{{ route('zona.destroy', $zona) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button>
                                    <img class="h-4" src="/images/nav-icons/borrar.svg" alt="">
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

</x-admin-layout>
