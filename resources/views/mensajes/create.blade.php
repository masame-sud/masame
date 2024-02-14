<x-layout>

<!-- component -->
        <div class="max-w-2xl bg-white py-10 px-5 m-auto w-full mt-10">

                <div class="text-3xl mb-6 text-center ">
                Deja tu mensaje para el mundo !
                </div>
                <form action="{{route('mensajes.store')}}" method="POST">
                    @csrf

                <div class="grid grid-cols-2 gap-4 max-w-xl m-auto">
            
                    <div class="col-span-2 lg:col-span-1">
                        <input name="nombre" type="text" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Tu nombre"/>
                    </div>
                
                    <div class="col-span-2 lg:col-span-1">
                        <input name="email" type="mail" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Tu correo"/>
                    </div>
                
                    <div class="col-span-2">
                        <textarea name="mensaje" cols="30" rows="8" class="border-solid border-gray-400 border-2 p-3 md:text-xl w-full" placeholder="Deja tu mensaje"></textarea>
                    </div>
                
                    <div class="col-span-2 text-right">
                        <button class="py-3 px-6 bg-blue-500 text-white font-bold w-full sm:w-32">
                        Enviar
                        </button>
                    </div>
            
                </div>
                </form>
            </div>
    
</x-layout> 
