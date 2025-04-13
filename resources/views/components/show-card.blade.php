<div>
    <div class="p-4 space-y-3 bg-white rounded-lg shadow ">
        <div class="flex items-baseline space-x-2 text-xl">
            <div class="p-1.5 text-lg font-medium uppercase tracking-wider text-pink-800 bg-pink-200 rounded-lg bg-opacity-50">
                {{ $contexto->nombre }}
            </div>
            <div class="text-base text-gray-400">
                {{ $contexto->categoria->nombre }}
            </div>
        </div>
        
        <div class="text-sm text-gray-700 text-wrap">
            {{ $contexto->descripcion }}
        </div>
        <div class="flex place-content-between">
            <div class="text-sm font-medium text-black">
                {{ $contexto->precio }}$
            </div>
            <div>
                <a class="inline-block" href="{{ route($titulo.".edit", $contexto) }}"><img class="h-4" src="/images/nav-icons/editar.svg" alt=""></a>
                <form class="inline-block" action="{{ route($titulo.".destroy", $contexto) }}" method="POST">
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