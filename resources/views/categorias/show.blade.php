<x-layout>

    @foreach ($subcategorias as $subcategoria)

    <div class="px-2 py-2  flex justify-center">
        
    <a href="/subcategorias/{{$subcategoria->id}}" class="bg-green-500 text-white"> {{$subcategoria->name}} </a>

    </div>
    @endforeach
 
</x-layout>