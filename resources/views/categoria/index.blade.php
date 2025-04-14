<x-admin-layout>
    <x-add-button ruta="categoria.create"></x-add-button>
    <div class="mt-3 grid grid-cols-1 gap-4 text-wrap md:grid-cols-2">
        @foreach ($categorias as $categoria)
            <div>
                <div class="space-y-3 rounded-lg bg-white p-4 shadow">
                    <div class="flex place-content-between items-baseline space-x-2 text-xl">
                        <div
                            class="rounded-lg bg-pink-200 bg-opacity-50 p-1.5 text-lg font-medium uppercase tracking-wider text-pink-800">
                            {{ $categoria->nombre }}
                        </div>
                        <div class="flex place-content-end">
                            <div>
                                <a class="inline-block" href="{{ route('categoria.edit', $categoria) }}"><img
                                        class="h-4" src="/images/nav-icons/editar.svg" alt=""></a>
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
            </div>
        @endforeach
    </div>

</x-admin-layout>
