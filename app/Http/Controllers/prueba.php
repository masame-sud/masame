<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Supermercadoproducto;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

function getPage ($url)
{


    $useragent = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_2) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/44.0.2403.89 Safari/537.36';
    $timeout= 120;
    $dir            = dirname(__FILE__);
    $cookie_file    = $dir . '/cookies/' . md5($_SERVER['REMOTE_ADDR']) . '.txt';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_FAILONERROR, true);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_COOKIEFILE, $cookie_file);
    curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true );
    curl_setopt($ch, CURLOPT_ENCODING, "" );
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true );
    curl_setopt($ch, CURLOPT_AUTOREFERER, true );
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout );
    curl_setopt($ch, CURLOPT_TIMEOUT, $timeout );
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10 );
    curl_setopt($ch, CURLOPT_USERAGENT, $useragent);
    curl_setopt($ch, CURLOPT_REFERER, 'http://www.google.com/');
    $content = curl_exec($ch);
    if(curl_errno($ch))
    {
        echo 'error:' . curl_error($ch);
    }
    else
    {
        return $content;
    }
        curl_close($ch);

}

function file_get_contents_eci($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_AUTOREFERER, true);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;

};

function prueba_scrap($url)
{
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_TIMEOUT, 10);
    curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

    $response = curl_exec($curl);
    curl_close($curl);
    return $response;

}



class prueba extends Controller
{
    // function mercadonaSP
    // public function prueba ()
    // {
    //     // que capture los datos de la categoria y los convierta en json ()
    //     // para dinamizar, será necesario añadir campo con url en tabla subcategorias
    //     $data = file_get_contents_curl("https://tienda.mercadona.es/api/categories/72/");
    //     $json = json_decode($data, true);
    //     $categories = $json['categories'];

    //     // que lea el jason y busque unos determinado/s producto/s ( Bacalao ) que pertenezcan a una subcategoria de la bd

    //     //['0']['products'] coletilla q me falta por recorrer

    //     // $productos = Producto::where('subcategoria_id', 11)->get('name');
    //     $productos = DB::table('productos')
    //                         ->where('subcategoria_id', 15)
    //                         ->get();

    //     // buscamos el nombre de cada producto en el json

    //       foreach ($productos as $producto)
    //       {
    //         //producto slug debe añadirse como campo en la tabla productos
    //         $productoSlug = "leche-semidesnatada-hacendado-brick";
    //         echo " Buscamos ". $producto->name." con ". $productoSlug.' slug. <br>';

    //         foreach ($categories as $category)
    //         {

    //             foreach ($category['products'] as $subcategorias)
    //             {

    //                 $categoriaslug = $subcategorias['slug'];
    //                 $indicador = stripos ($productoSlug, $categoriaslug);
    //                 $repetido = DB::table('supermercadoproductos')
    //                     ->where('producto_id', $producto->id)
    //                     ->get();


    //                 if (isset($repetido['0']))
    //                         {
    //                             echo "Producto ". $producto->name." está ya en la base de datos.<br>";
    //                         } else
    //                         {

    //                             if ($indicador !== false){
    //                                 echo $producto->name." ESTA en ".$subcategorias['display_name'] ."<br>";

    //                                 $atributos = [
    //                                             "producto_id" => $producto->id,
    //                                             "supermercado_id" => 1,
    //                                             "img_url" => $subcategorias['thumbnail'],
    //                                             "scrab_id" => $subcategorias['id'],
    //                                             "peso" => ($subcategorias['price_instructions']['unit_size']) * 1000,
    //                                             "descripcion" => $subcategorias['display_name'],
    //                                             "link" => $subcategorias['share_url'],
    //                                         ];


    //                                 DB::table('supermercadoproductos')->insert($atributos);
    //                                 echo "Producto ". $producto->name." insertado correctamente<br>";
    //                             } else
    //                             {
    //                                 echo $producto->name." no ha sido encontrado en ".$subcategorias['display_name'] ."<br>";
    //                             }
    //             }
    //         }
    //       }
    // }


    // function carrefourSP
    // public function prueba ()
    // {
    //             // que capture los datos de la categoria y los convierta en json ()
    //     // para dinamizar, será necesario añadir campo con url en tabla subcategorias
    //     $data = file_get_contents_curl("https://www.carrefour.es/cloud-api/plp-food-papi/v1/supermercado/la-despensa/alimentacion/arroz-y-cous-cous-carrefour/F-12plZ10si/c");
    //     $json = json_decode($data, true);
    //     // del json sacamos array con los items de marca carrefour de esa subcategoria
    //     $categories = $json['results']['items'];


    //     // usamos sku_id como campo extra en tabla productos para identificar los q buscamos en ese super
    //     $productos = DB::table('productos')
    //                             ->where('subcategoria_id', 1)
    //                             ->get();


    //     // buscamos cada producto en cada elemento de json $categories
    //     foreach ($productos as $producto)
    //     {
    //         // $productos = [1977260000, 1014240000];
    //         $productoSlug = 1977260000;
    //         echo " Buscamos ". $producto->name." con ". $productoSlug.' slug. <br>';



    //         foreach ($categories as $category)
    //         {

    //             //usamos un indicador para comparar los strings/numeros
    //             $indicador = stripos ($category['sku_id'], $producto);
    //             if ($indicador === false)
    //             {
    //                 echo $category['name'] ."no es el producto ". $producto . " que estamos buscando <br>";

    //             } else
    //             {
    //                 echo $category['name'] ." es el producto ". $producto . " que estamos buscando <br>";
    //                 $atributos = [
    //                     "producto_id" => $producto->id,
    //                     "supermercado_id" => 2,
    //                     "img_url" => $category['images']['desktop'],
    //                     "scrab_id" => $category['product_id'],
    //                     "peso" => ($category['sell_pack_unit']) * 1000,
    //                     "descripcion" => $category['name'],
    //                     "link" => "https://www.carrefour.es".$category['url'],
    //                 ];
    //                 dd($atributos);
    //             }
    //         }
    //     }

    // }




        public function prueba ()
        {

            $html = file_get_contents ("https://www.elcorteingles.es/alimentacion/api/catalog/get-rr-products/?ids=0110118005600343___&mode=JSON");

            dd($html);
            $start = stripos($html, '<!-- Description product -->');
            $end = stripos($html, '<div class="col col-lg-12 col-md-12 col-sm-12 col-xs-12 border-0 add-product', $offset = $start);
            $length = $end - $start;
            $htmlSection = substr($html, $start, $length);
            $precioStart = stripos($htmlSection, 'offer-now">') + 12;
            $precio = substr($htmlSection, $precioStart, 4);
            $precio = str_replace(",",".", $precio);
            $precio = floatval($precio);
            $precioK = ($precio * 1000)/ 1000;
            echo $precioK;

        }

}

