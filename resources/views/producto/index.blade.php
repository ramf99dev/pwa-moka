<x-admin-layout>
    <x-search-bar ruta="producto"></x-search-bar>
    <div class="mt-3 flex flex-row flex-wrap gap-4">
        @foreach ($productos as $producto)
            <div class="w-64">
                <div class="flex w-fit flex-col rounded-lg bg-white text-center shadow">
                    <div class="aspect-square size-full h-32 self-center overflow-hidden">
                        <img src="{{ asset($producto->imagen) }}" alt="{{ $producto->nombre }}" class="rounded-t-lg">
                    </div>
                    <div class="space-y-2 p-4">
                        <div
                            class="rounded-lg bg-yellow-200 bg-opacity-50 p-1.5 text-lg font-medium uppercase tracking-wider text-yellow-800">
                            {{ $producto->nombre }}
                        </div>
                        <div class="text-base text-gray-400">
                            {{ $producto->categoria->nombre }}
                        </div>
                        <div class="text-wrap text-sm text-gray-700">
                            {{ $producto->descripcion }}
                        </div>

                        <div class="flex place-content-between">
                            <div class="text-sm font-medium text-black">
                                {{ $producto->precio }}$
                            </div>
                            <div>
                                <a class="inline-block" href="{{ route('producto.edit', $producto) }}"><img
                                        class="h-4" src="/images/nav-icons/editar.svg" alt=""></a>
                                <form class="inline-block" action="{{ route('producto.destroy', $producto) }}"
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

    <div class="mt-6">
        {{ $productos->links('vendor.pagination.simple-tailwind') }}
    </div>

</x-admin-layout>
