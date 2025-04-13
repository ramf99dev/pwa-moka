<div x-data="{ expanded: true }" x-init="expanded = true">
    <aside class="w-48 h-screen" :class="{'w-48': expanded, 'w-25': !expanded}">
        <nav class="flex flex-col h-full bg-white border-r shadow-sm">
            <div class="flex items-center justify-between p-4 pb-2">
                <img src="/images/mokalogopink.png" alt="" class="overflow-hidden transition-all" :class="{'w-32': expanded, 'w-0': !expanded}">
                <button @click="expanded = !expanded" class="p-1.5 rounded-lg bg-gray-50 hover:bg-gray-100" x-show="expanded">
            
                    <img src="/images/nav-icons/arrow-left.svg" alt="" class="h-6">
                </button>
                <button @click="expanded = !expanded" class="p-1.5 rounded-lg bg-gray-50 hover:bg-gray-100" x-show="!expanded">
            
                    <img src="/images/nav-icons/arrow-right.svg" alt="" class="h-6">
                </button>
                
            </div>
            <ul x-bind:Iexpanded="expanded">
                <x-nav-item titulo="Productos" ruta="producto.index" img="/images/nav-icons/productos"></x-nav-item>
                <x-nav-item titulo="Categorias" ruta="categoria.index" img="/images/nav-icons/categorias"></x-nav-item>
                <x-nav-item titulo="Usuarios" ruta="categoria.index" img="/images/nav-icons/usuarios"></x-nav-item>
                <x-nav-item titulo="Reservas" ruta="categoria.index" img="/images/nav-icons/reservas"></x-nav-item>
                <x-nav-item titulo="Ordenes" ruta="categoria.index" img="/images/nav-icons/ordenes"></x-nav-item>
                <x-nav-item titulo="Zonas" ruta="categoria.index" img="/images/nav-icons/zonas"></x-nav-item>
                <x-nav-item titulo="Estadisticas" ruta="categoria.index" img="/images/nav-icons/estadisticas"></x-nav-item>
            </ul>
        </nav>
    </aside>
</div>
