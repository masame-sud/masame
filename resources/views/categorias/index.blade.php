<x-layout>

    @foreach ($categorias as $categoria)

    <div class="px-2 py-2  flex justify-center">
        
    <a href="/categorias/{{$categoria->id}}" class="bg-green-500 text-white"> {{$categoria->name}} </a>

    

    </div>
    @endforeach
 
    
</x-layout>