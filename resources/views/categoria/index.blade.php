<x-admin-layout>
    <div class="flex flex-row place-items-center justify-between">
        <x-add-button ruta="categoria.create"></x-add-button>
        <form class="flex w-full flex-row place-items-center" action="{{ route('categoria.index') }}" method="GET">
            <input name="buscar" type="text" class="h-10 w-full rounded-lg border-pink-600 py-4"
                placeholder="Buscar...">
            <button
                class="relative -ml-10 inline-block size-8 cursor-pointer justify-center rounded-lg bg-gradient-to-tr from-pink-400 to-pink-300 p-2 shadow transition-colors hover:scale-110">
                <img src="/images/nav-icons/buscar.svg" alt="" class="h-full place-self-center">
            </button>
        </form>
    </div>
    <div class="mt-3 grid grid-cols-1 gap-4 text-wrap md:grid-cols-2">
        @foreach ($categorias as $categoria)
            <div>
                <div class="space-y-3 rounded-lg bg-white p-4 shadow">
                    <div class="flex items-baseline space-x-2 text-xl">
                        <div
                            class="rounded-lg bg-pink-200 bg-opacity-50 p-1.5 text-lg font-medium uppercase tracking-wider text-pink-800">
                            {{ $categoria->nombre }}
                        </div>
                    </div>
                    <div class="flex place-content-between">
                        <div>
                            <a class="inline-block" href="{{ route('categoria.edit', $categoria) }}"><img class="h-4"
                                    src="/images/nav-icons/editar.svg" alt=""></a>
                            <form class="inline-block" action="{{ route('categoria.destroy', $categoria) }}"
                                method="POST">
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
    <div class="mt-6">
        {{ $productos->links('vendor.pagination.simple-tailwind') }}
    </div>

</x-admin-layout>
