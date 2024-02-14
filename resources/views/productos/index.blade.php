<x-layout>

    @foreach ($productos as $producto)

    <div class="px-2 py-2  flex justify-center">
        
    <a href="/precios/{{$producto->id}}" class="bg-green-500 text-white"> {{$producto->name}} </a>
    

    </div>
    @endforeach
 
    
</x-layout>