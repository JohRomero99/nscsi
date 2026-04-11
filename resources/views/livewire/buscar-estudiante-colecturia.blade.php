<div>
    <input 
        type="text" 
        wire:model.live="buscar"
        placeholder="Buscar estudiante..."
        class="mt-1 block border-gray-300 w-full rounded-md"
    >

    @if(!empty($resultados))
        <div class="bg-white border mt-1 rounded-md shadow">
            @foreach($resultados as $est)
                <div 
                    class="p-2 hover:bg-gray-100 cursor-pointer"
                    wire:click="seleccionar({{ $est->id }})"
                >
                    {{ $est->cedula }} - {{ $est->primer_nombre }} {{ $est->segundo_nombre }} {{ $est->apellido_paterno }} {{ $est->apellido_materno }}
                </div>
            @endforeach
        </div>
    @endif
</div>
