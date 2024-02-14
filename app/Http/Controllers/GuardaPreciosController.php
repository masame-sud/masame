<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Precios;
use App\Models\Supermercadoproducto;

class GuardaPreciosController extends Controller
{
    public function mercadona()
    {

    $mercadonas = Supermercadoproducto::with("precios")->where("supermercado_id", 1)->get();

    foreach ($mercadonas as $mercadona)
            {

                if ((empty($mercadona->precios->last()->created_at)) or ($mercadona->precios->last()->created_at < now()->subDay()))
                {
                    if (($mercadona->scrab_id === NULL))
                    {
                        echo "Mercadona: ". $mercadona->producto_id . " Precio no actualizado (No scrab_id)<br>";
                    } else
                        {
                        $dataString = file_get_contents_curl("https://tienda.mercadona.es/api/v1_1/products/{$mercadona->scrab_id}/?lang=es&wh=mad1");
                        $dataArray = json_decode($dataString, true);
                            if (isset($dataArray["price_instructions"]))
                                {
                                $precioProducto = $dataArray['price_instructions']['unit_price'];
                                $preciokilo = $dataArray['price_instructions']['bulk_price'];
                                $atributos = [
                                    "supermercadoproductos_id" => $mercadona->id,
                                    "precio" => $precioProducto,
                                    "precio_kg" => $preciokilo
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

    public function carrefour()
    {

    $carefours = Supermercadoproducto::with("precios")->where("supermercado_id", 2)->get();

    foreach ($carefours as $carrefour)
            {

                if ((empty($carrefour->precios->last()->created_at)) or ($carrefour->precios->last()->created_at < now()->subDay()))
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
                            $precioK = ($precioProducto * $carrefour->peso)/ 1000;
                            $atributos = [
                                "supermercadoproductos_id" => $carrefour->id,
                                "precio" => $precioProducto,
                                "precio_kg" => $precioK
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

    public function eci()
    {

    $ecis = Supermercadoproducto::with("precios")->where("supermercado_id", 3)->get();

    foreach ($ecis as $eci)
            {

                if ((empty($eci->precios->last()->created_at)) or ($eci->precios->last()->created_at < now()->subDay()))
                {
                    if (($eci->scrab_id === NULL))
                    {
                        echo "ECI: ". $eci->producto_id ." Precio no actualizado (No scrab_id)<br>";
                    } else {
                        $dataString = file_get_contents_curl("https://www.elcorteingles.es/alimentacion/api/catalog/get-rr-products/?ids={$eci->scrab_id}___&mode=JSON");
                        $dataArray = json_decode($dataString, true);

                        if(isset($dataArray['products_list']['items']['0']))
                        {
                            $precioProducto = $dataArray['products_list']['items']['0']['product']['price']['seo_price'];
                            $precioKilo = $dataArray['products_list']['items']['0']['product']['price']['pum_price'];
                            $precioK = substr($precioKilo, 0, 5);
                            $precioK = str_replace(",",".", $precioK);
                            $precioK = floatval($precioK);
                            $atributos = [
                                "supermercadoproductos_id" => $eci->id,
                                "precio" => $precioProducto,
                                "precio_kg" => $precioK
                            ];
                            Precios::create($atributos);
                            echo "ECI ". $eci->producto_id ." actualizado.<br>";
                        }
                        else
                        {
                            echo "ECI: ". $eci->producto_id ." no actualizado (Faltan datos).<br>";
                        }
                            }
                }
                else
                {
                    echo "ECI: ". $eci->producto_id ." Precio no actualizado (ya actual)<br>";
                }

             }
    echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";

    }

    public function dia()
    {

    $dias = Supermercadoproducto::with("precios")->where("supermercado_id", 4)->get();

    foreach ($dias as $dia)
            {

                if ((empty($dia->precios->last()->created_at)) or ($dia->precios->last()->created_at < now()->subDay()))
                {
                    if (($dia->scrab_id === NULL))
                    {
                        echo "Dia: ".$dia->producto_id." Precio no actualizado (No scrab_id)<br>";
                    } else {
                        $dataString = file_get_contents_curl("https://www.dia.es/api/v1/pdp-insight/initial_analytics/{$dia->scrab_id}");
                        $dataArray = json_decode($dataString, true);
                        if(isset($dataArray['page_product_analytics']))
                        {
                            $precioProducto = $dataArray['page_product_analytics'][$dia->scrab_id]['price'];
                            $precioK = ($precioProducto * $dia->peso)/ 1000;
                            $atributos = [
                                "supermercadoproductos_id" => $dia->id,
                                "precio" => $precioProducto,
                                "precio_kg" => $precioK
                            ];
                            Precios::create($atributos);
                            echo "Dia ".$dia->producto_id." actualizado.<br>";
                        }
                        else
                        {
                            echo "Día: ".$dia->producto_id." no actualizado (Faltan datos).<br>";
                        }
                        }
                }
                else
                {
                    echo "Dia: ".$dia->producto_id." Precio no actualizado (ya actual)<br>";
                }

             }
    echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";

    }

    public function eroski()
    {

    $eroskis = Supermercadoproducto::with("precios")->where("supermercado_id", 5)->get();

    foreach ($eroskis as $eroski)
            {
                if ((empty($eroski->precios->last()->created_at)) or ($eroski->precios->last()->created_at < now()->subDay()))
                {
                    if (($eroski->scrab_id === NULL))
                    {
                        echo "Eroski: ".$eroski->producto_id." Precio no actualizado (No scrab_id)<br>";
                    } else {
                        $html = file_get_contents ($eroski->scrab_id);
                        if(isset($html))
                        {
                            $start = stripos($html, '<!-- Description product -->');
                            $end = stripos($html, '<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 border-0 add-product', $offset = $start);
                            $length = $end - $start;
                            $htmlSection = substr($html, $start, $length);
                            $precioStart = stripos($htmlSection, 'offer-now">') + 12;
                            $precio = substr($htmlSection, $precioStart, 4);
                            $precio = str_replace(",",".", $precio);
                            $precio = floatval($precio);
                            $precioK = ($precio * $eroski->peso)/ 1000;
                            $atributos = [
                                "supermercadoproductos_id" => $eroski->id,
                                "precio" => $precio,
                                "precio_kg" => $precioK
                            ];
                            Precios::create($atributos);
                            echo "Eroski ".$eroski->producto_id." actualizado.<br>";
                        }
                        else
                        {
                            echo "Eroski: ".$eroski->producto_id." no actualizado (Faltan datos).<br>";
                        }
                    }
                }
                else
                {
                    echo "Eroski: ".$eroski->producto_id." Precio no actualizado (ya actual)<br>";
                }
             }
    echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";
    }

    public function alcampo()
    {

    $alcampos = Supermercadoproducto::with("precios")->where("supermercado_id", 6)->get();

    foreach ($alcampos as $alcampo)
            {
                if ((empty($alcampo->precios->last()->created_at)) or ($alcampo->precios->last()->created_at < now()->subDay()))
                {
                    if (($alcampo->scrab_id === NULL))
                    {
                        echo "Alcampo: ".$alcampo->producto_id." Precio no actualizado (No scrab_id)<br>";
                    }
                    else
                     {
                        $dataString = file_get_contents("https://www.compraonline.alcampo.es/api/v4/products/bop?retailerProductId={$alcampo->scrab_id}");
                        $dataArray = json_decode($dataString, true);
                        if(isset($dataArray['entities']))
                        {
                            $id= $dataArray['result']['product'];
                            $precio = $dataArray['entities']['product'][$id]['price']['current']['amount'];
                            $preciok = $dataArray['entities']['product'][$id]['price']['unit']['current']['amount'];
                            $atributos = [
                                "supermercadoproductos_id" => $alcampo->id,
                                "precio" => $precio,
                                "precio_kg" =>$preciok
                            ];
                            Precios::create($atributos);
                            echo "Alcampo ".$alcampo->producto_id." actualizado.<br>";
                        }
                        else
                        {
                            echo "Alcampo: ".$alcampo->producto_id." Precio no actualizado (ya actual)<br>";
                        }
                    }
                } else
                {
                    echo "Alcampo:".$alcampo->producto_id." Precio no actualizado (ya actual)<br>";
                }
             }
             echo "<br> <a href='javascript:history.back()'> Volver Atrás</a>";
    }

}
