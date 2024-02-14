<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Precios;
use App\Models\Supermercadoproducto;

class CarrefourController extends Controller
{
    //
    public function collect() 
    {

    $carefours = Supermercadoproducto::with("precios")->where("supermercado_id", 2)->get();
       
    foreach ($carefours as $carrefour)
            {

                if ((empty($carrefour->precios[0]->created_at)) or ($carrefour->precios[0]->created_at < now()->subDay()))
                {
                    if (($carrefour->scrab_id === NULL))
                    {
                        echo "Carrefour: ". $carrefour->producto_id ." Precio no actualizado (No scrab_id)<br>";
                    } else {
                        $dataString = file_get_contents_curl("https://www.carrefour.es/cloud-api/pdp-food-analytics/v1/impressions?product_id={$carrefour->scrab_id}");
                        $dataArray = json_decode($dataString, true);
                        if (isset($dataArray['impressions']))
                        {
                            $precioProducto = $dataArray['impressions']['0']['price'];
                            $atributos = [
                                "supermercadoproductos_id" => $carrefour->id,
                                "precio" => $precioProducto
                            ];
                            Precios::create($atributos);
                            echo "Carrefour ". $carrefour->producto_id ." actualizado.<br>";
                        }
                        else 
                        {
                            echo "Carrefour: ". $carrefour->producto_id ." no actualizado (Faltan datos).<br>";
                        }
        
                    }
                    
                } 
                else 
                {
                    echo "Carrefour: ". $carrefour->producto_id ." Precio no actualizado (ya actual)<br>";
                }
    
            }
    echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";

    }
}
