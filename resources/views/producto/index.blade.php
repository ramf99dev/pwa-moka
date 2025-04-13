<x-admin-layout>
    <x-add-button ruta="producto.create"></x-add-button>
    <div class="grid grid-cols-1 gap-4 mt-3 md:grid-cols-2 text-wrap">
        @foreach ($productos as $producto)
            <x-show-card :contexto="$producto" titulo="producto"></x-show-card>
        @endforeach
    </div>
    
</x-admin-layout>
