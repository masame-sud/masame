<x-layout>

   <h2> Precio de {{$supermercadoproductos[0]->producto->name}} a fecha {{now()}}
   </h2> <br>



    @foreach ($supermercadoproductos as $supermercadoproducto)

    @if(@isset($supermercadoproducto->precios[0]->precio))

         <p>En el supermercado {{$supermercadoproducto->supermercado->name}} cuesta {{$supermercadoproducto->precios->last()->precio}} €
             la unidad de {{$supermercadoproducto->peso}} gramos
            <span class="text-amber-400">| a {{$supermercadoproducto->precios->last()->precio_kg}} Euros / Kg |</span>
        </p>
    @else
        <p>Del supermercado {{$supermercadoproducto->supermercado->name}} no hay datos de este producto</p>
    @endisset

    @endforeach

    <br> <a href='javascript:history.back()'> Volver Atrás</a>

</x-layout>
