<a href="{{ route($ruta) }}">
    <li x-data class="overflow-hidden flex items-center px-2 mx-1 md:mx-3 py-2 my-1.5 font-medium transition-colors rounded-md cursor-pointer {{ $active ? 'bg-gradient-to-tr from-pink-400 to-pink-300 text-pink-800' : 'hover:bg-pink-100 text-gray-600' }}">
        @if ($active)
            <img src="{{ $img . "-selected.svg" }}" alt="" class="h-6">
        @else
            <img src="{{ $img . ".svg" }}" alt="" class="h-6">
        @endif
        
        <span class="overflow-hidden transition-all" :class="{'ml-3 w52':expanded, 'w-0':!expanded}">{{ $titulo }}</span>
    </li>
</a>

