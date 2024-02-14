<?php

namespace App\Http\Controllers;

use App\Models\Precios;
use App\Models\Supermercadoproducto;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class MercadonaController extends Controller
{
    //
    public function collect() 
    {

    $mercadonas = Supermercadoproducto::with("precios")->where("supermercado_id", 1)->get();
       
    foreach ($mercadonas as $mercadona)
            {

                if ((empty($mercadona->precios[0]->created_at)) or ($mercadona->precios[0]->created_at < now()->subDay()))
                {
                    if (($mercadona->scrab_id === NULL))
                    {
                        echo "Mercadona: ". $mercadona->producto_id . " Precio no actualizado (No scrab_id)<br>";
                    } else 
                        {
                        $dataString = file_get_contents_curl("https://tienda.mercadona.es/api/v1_1/products/{$mercadona->scrab_id}/");
                        $dataArray = json_decode($dataString, true);
                            if (isset($dataArray["price_instructions"]))
                                {
                                $precioProducto = $dataArray['price_instructions']['unit_price'];
                                $atributos = [
                                    "supermercadoproductos_id" => $mercadona->id,
                                    "precio" => $precioProducto
                                ];
                                Precios::create($atributos);
                                echo "Mercadona ". $mercadona->producto_id . " actualizado.<br>";
                                }
                            else 
                            {
                                echo "Mercadona: ". $mercadona->producto_id . " no actualizado (Faltan datos).<br>";
                            }
                        }
                }
                else 
                {
                    echo "Mercadona: ". $mercadona->producto_id . " Precio no actualizado (ya actual)<br>";
                }
    
            }
    echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";

    }
        



}

