<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\MySqlConnection;

class SupermercadoproductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table("Supermercadoproductos")->delete();

        $mercadona = DB::table("supermercados")->where("name","Mercadona")->value("id");
        $carrefour = DB::table("supermercados")->where("name","Carrefour")->value("id");
        $eci = DB::table("supermercados")->where("name","El Corte Inglés")->value("id");
        $dia = DB::table("supermercados")->where("name","Día")->value("id");
        $eroski = DB::table("supermercados")->where("name","Eroski")->value("id");
        $alcampo = DB::table("supermercados")->where("name","Alcampo")->value("id");

        // $supermercados = DB::select('select * from supermercados');
        // $productos = DB::select('select * from productos');

        // foreach ($productos as $producto) {
        //       foreach ($supermercados as $supermercado) {
        //         DB::table("supermercadoproductos")->insert([
        //                 "producto_id"=> $producto->id,
        //                 "supermercado_id"=> $supermercado->id,
        //                 "img_url" => "",
        //                 "scrab_id" => "",
        //                 "peso" => 1000,
        //                 "descripcion"=> ""
        //                                                  ]);
        //                                                 }
        //                                      }

$p10101 = DB::table("productos")->where("name","Arroz largo")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10101,
            "supermercado_id"=> $mercadona,
            "peso" => 1000,
            "scrab_id"=> "5063",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10101,
            "supermercado_id"=> $carrefour,
            "peso" => 1000,
            "scrab_id"=> "R-538408171",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10101,
            "supermercado_id"=> $eci,
            "peso" => 1000,
            "scrab_id"=> "0110118005600343",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10101,
            "supermercado_id"=> $dia,
            "peso" => 1000,
            "scrab_id"=> "5873",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p10101,
            "supermercado_id"=> $eroski,
            "peso" =>1000,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/4374161-arroz-largo-eroski-basic-paquete-1-kg/"
             ]);
        DB::table("supermercadoproductos")->insert([
        "producto_id" => $p10101,
        "supermercado_id"=> $alcampo,
        "peso" =>1000,
        "scrab_id"=> "21308"
            ]);

$p10102 = DB::table("productos")->where("name","Arroz redondo")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10102,
            "supermercado_id"=> $mercadona,
            "peso" => 1000,
            "scrab_id"=> "5044",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10102,
            "supermercado_id"=> $carrefour,
            "peso" => 1000,
            "scrab_id"=> "R-prod1022743",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10102,
            "supermercado_id"=> $eci,
            "peso" => 1000,
            "scrab_id"=> "0110118005700754",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10102,
            "supermercado_id"=> $dia,
            "peso" => 1000,
            "scrab_id"=> "151",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p10102,
            "supermercado_id"=> $eroski,
            "peso" =>1000,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/300434-arroz-extra-eroski-basic-paquete-1-kg/"
             ]);
        DB::table("supermercadoproductos")->insert([
        "producto_id" => $p10102,
        "supermercado_id"=> $alcampo,
        "peso" =>1000,
        "scrab_id"=> "18165"
            ]);

$p10201 = DB::table("productos")->where("name","Panecillo menor 100 gr")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10201,
            "supermercado_id"=> $mercadona,
            "peso" => 85,
            "scrab_id"=> "92998",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10201,
            "supermercado_id"=> $carrefour,
            "peso" => 100,
            "scrab_id"=> "R-fprod1210204",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10201,
            "supermercado_id"=> $eci,
            "peso" => 60,
            "scrab_id"=> "0110118574700250",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10201,
            "supermercado_id"=> $dia,
            "peso" => 125,
            "scrab_id"=> "169479",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p10201,
            "supermercado_id"=> $eroski,
            "peso" =>240,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/365023-panecillo-eroski-5-uds-bolsa-240-g/"
                ]);
        DB::table("supermercadoproductos")->insert([
        "producto_id" => $p10201,
        "supermercado_id"=> $alcampo,
        "peso" =>55,
        "scrab_id"=> "10701"
            ]);

$p10202 = DB::table("productos")->where("name","Panecillo integral menor 100 gr")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10202,
                "supermercado_id"=> $mercadona,
                "peso" => 80,
                "scrab_id"=> "83284",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10202,
                "supermercado_id"=> $carrefour,
                "peso" => 0,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10202,
                "supermercado_id"=> $eci,
                "peso" => 0,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10202,
                "supermercado_id"=> $dia,
                "peso" => 90,
                "scrab_id"=> "274757",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10202,
                "supermercado_id"=> $eroski,
                "peso" => 95,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/22366041-baquetina-100-integral-eroski-2-uds-190-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10202,
                "supermercado_id"=> $alcampo,
                "peso" =>60,
                "scrab_id"=> "55400"
                    ]);

$p10203 = DB::table("productos")->where("name","Pan menor 250 gr")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10203,
            "supermercado_id"=> $mercadona,
            "peso" => 80,
            "scrab_id"=> "83277",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10203,
            "supermercado_id"=> $carrefour,
            "peso" => 100,
            "scrab_id"=> "R-prod890105",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10203,
            "supermercado_id"=> $eci,
            "peso" => 90,
            "scrab_id"=> "0110118574700607",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p10203,
            "supermercado_id"=> $dia,
            "peso" => 245,
            "scrab_id"=> "38109",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p10203,
            "supermercado_id"=> $eroski,
            "peso" => 125,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16662983-panes-eroski-5-uds-bolsa-525-g/"
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p10203,
            "supermercado_id"=> $alcampo,
            "peso" =>110,
            "scrab_id"=> "55503"
                ]);

$p10204 = DB::table("productos")->where("name","Pan integral menor 250 gr")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10204,
                    "supermercado_id"=> $mercadona,
                    "peso" => 125,
                    "scrab_id"=> "83452",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10204,
                    "supermercado_id"=> $carrefour,
                    "peso" => 100,
                    "scrab_id"=> "R-837617109",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10204,
                    "supermercado_id"=> $eci,
                    "peso" => 0,
                    "scrab_id"=> NULL,
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10204,
                    "supermercado_id"=> $dia,
                    "peso" => 0,
                    "scrab_id"=> NULL,
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p10204,
                    "supermercado_id"=> $eroski,
                    "peso" => 210,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/23467301-barra-integral-de-trigo-100-eroski-210-g/"
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p10204,
                    "supermercado_id"=> $alcampo,
                    "peso" => 90,
                    "scrab_id"=> "55413"
                        ]);

$p10205 = DB::table("productos")->where("name","Pan mayor 250 gr")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10205,
                    "supermercado_id"=> $mercadona,
                    "peso" => 250,
                    "scrab_id"=> "83202.1",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10205,
                    "supermercado_id"=> $carrefour,
                    "peso" => 250,
                    "scrab_id"=> "R-607402643",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10205,
                    "supermercado_id"=> $eci,
                    "peso" => 340,
                    "scrab_id"=> "0110118574700177",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p10205,
                    "supermercado_id"=> $dia,
                    "peso" => 350,
                    "scrab_id"=> "295264",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p10205,
                    "supermercado_id"=> $eroski,
                    "peso" => 325,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16017162-barra-con-aspas-235-g/"
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p10205,
                    "supermercado_id"=> $alcampo,
                    "peso" => 250,
                    "scrab_id"=> "11848"
                        ]);

$p10206 = DB::table("productos")->where("name","Pan integral mayor 250 gr")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10206,
                        "supermercado_id"=> $mercadona,
                        "peso" => 350,
                        "scrab_id"=> "83858.1",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10206,
                        "supermercado_id"=> $carrefour,
                        "peso" => 250,
                        "scrab_id"=> "R-VC4AECOMM-550659",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10206,
                        "supermercado_id"=> $eci,
                        "peso" => 0,
                        "scrab_id"=> NULL,
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10206,
                        "supermercado_id"=> $dia,
                        "peso" => 220,
                        "scrab_id"=> "57134",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p10206,
                        "supermercado_id"=> $eroski,
                        "peso" => 380,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/23420037-hogaza-100-integral-eroski-380-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p10206,
                        "supermercado_id"=> $alcampo,
                        "peso" => 220,
                        "scrab_id"=> "52213"
                            ]);

$p10207 = DB::table("productos")->where("name","Pan redondo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10207,
                "supermercado_id"=> $mercadona,
                "peso" => 800,
                "scrab_id"=> "23086.1",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10207,
                "supermercado_id"=> $carrefour,
                "peso" => 360,
                "scrab_id"=> "R-VC4AECOMM-550664",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10207,
                "supermercado_id"=> $eci,
                "peso" => 490,
                "scrab_id"=> "0110118574700011",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10207,
                "supermercado_id"=> $dia,
                "peso" => 600,
                "scrab_id"=> "284801",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10207,
                "supermercado_id"=> $eroski,
                "peso" => 360,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13458666-pan-de-hogaza-clasico-360-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10207,
                "supermercado_id"=> $alcampo,
                "peso" => 800,
                "scrab_id"=> "69518"
                    ]);

$p10208 = DB::table("productos")->where("name","Pan para hamburguesa")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10208,
                "supermercado_id"=> $mercadona,
                "peso" => 300,
                "scrab_id"=> "13803",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10208,
                "supermercado_id"=> $carrefour,
                "peso" => 400,
                "scrab_id"=> "R-575702273",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10208,
                "supermercado_id"=> $eci,
                "peso" => 220,
                "scrab_id"=> "0110120653400554",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10208,
                "supermercado_id"=> $dia,
                "peso" => 300,
                "scrab_id"=> "182644",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10208,
                "supermercado_id"=> $eroski,
                "peso" => 300,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15700891-pan-hamburguesa-maxiburguers-eroski-4-unid-paquete-300-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10208,
                "supermercado_id"=> $alcampo,
                "peso" => 220,
                "scrab_id"=> "61726"
                    ]);

$p10209 = DB::table("productos")->where("name","Pan de molde")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10209,
                        "supermercado_id"=> $mercadona,
                        "peso" => 820,
                        "scrab_id"=> "83867",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10209,
                        "supermercado_id"=> $carrefour,
                        "peso" => 820,
                        "scrab_id"=> "R-VC4AECOMM-443145",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10209,
                        "supermercado_id"=> $eci,
                        "peso" => 820,
                        "scrab_id"=> "0110120654802287",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p10209,
                        "supermercado_id"=> $dia,
                        "peso" => 820,
                        "scrab_id"=> "77955",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p10209,
                        "supermercado_id"=> $eroski,
                        "peso" => 820,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17946732-pan-de-molde-con-corteza-eroski-basic-paquete-820-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p10209,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "11739"
                            ]);

$p10210 = DB::table("productos")->where("name","Pan para hot-dog")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10210,
                "supermercado_id"=> $mercadona,
                "peso" => 330,
                "scrab_id"=> "82332",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10210,
                "supermercado_id"=> $carrefour,
                "peso" => 330,
                "scrab_id"=> "R-606509119",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10210,
                "supermercado_id"=> $eci,
                "peso" => 330,
                "scrab_id"=> "0110120653400521",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10210,
                "supermercado_id"=> $dia,
                "peso" => 330,
                "scrab_id"=> "40381",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10210,
                "supermercado_id"=> $eroski,
                "peso" => 330,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15700917-hot-dog-eroski-6-uds-paquete-330-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10210,
                "supermercado_id"=> $alcampo,
                "peso" => 330,
                "scrab_id"=> "28518"
                    ]);

$p10211 = DB::table("productos")->where("name","Pan rallado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10211,
                "supermercado_id"=> $mercadona,
                "peso" => 750,
                "scrab_id"=> "82219",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10211,
                "supermercado_id"=> $carrefour,
                "peso" => 750,
                "scrab_id"=> "R-805763831",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10211,
                "supermercado_id"=> $eci,
                "peso" => 750,
                "scrab_id"=> "0110120668500422",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10211,
                "supermercado_id"=> $dia,
                "peso" => 750,
                "scrab_id"=> "56050",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10211,
                "supermercado_id"=> $eroski,
                "peso" => 750,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/11798063-pan-rallado-eroski-basic-paquete-750-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10211,
                "supermercado_id"=> $alcampo,
                "peso" => 750,
                "scrab_id"=> "804840"
                    ]);

$p10301 = DB::table("productos")->where("name","Espirales 3 sabores")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10301,
                "supermercado_id"=> $mercadona,
                "peso" => 500,
                "scrab_id"=> "6305",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10301,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-521005645",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10301,
                "supermercado_id"=> $eci,
                "peso" => 500,
                "scrab_id"=> "0110118003600485",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10301,
                "supermercado_id"=> $dia,
                "peso" => 500,
                "scrab_id"=> "33117",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10301,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/2685899-espirales-con-vegetales-eroski-paquete-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10301,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "23570"
                    ]);

$p10302 = DB::table("productos")->where("name","Fideo cabellin")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10302,
                "supermercado_id"=> $mercadona,
                "peso" => 500,
                "scrab_id"=> "13577",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10302,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-544101818",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10302,
                "supermercado_id"=> $eci,
                "peso" => 750,
                "scrab_id"=> "0110118003900851",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10302,
                "supermercado_id"=> $dia,
                "peso" => 500,
                "scrab_id"=> "515",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10302,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/361980-fideo-cabellin-eroski-basic-paquete-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10302,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "16536"
                    ]);

$p10303 = DB::table("productos")->where("name","Fideo entrefino")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10303,
                "supermercado_id"=> $mercadona,
                "peso" => 500,
                "scrab_id"=> "6256",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10303,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-544101820",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10303,
                "supermercado_id"=> $eci,
                "peso" => 450,
                "scrab_id"=> "0110118003900828",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10303,
                "supermercado_id"=> $dia,
                "peso" => 500,
                "scrab_id"=> "50971",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10303,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14686679-fideo-de-cabello-pastas-romero-paquete-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10303,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "44700"
                    ]);

$p10304 = DB::table("productos")->where("name","Fideo grueso")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10304,
                "supermercado_id"=> $mercadona,
                "peso" => 500,
                "scrab_id"=> "6261",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10304,
                "supermercado_id"=> $carrefour,
                "peso" => 450,
                "scrab_id"=> "R-VC4AECOMM-594198",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10304,
                "supermercado_id"=> $eci,
                "peso" => 500,
                "scrab_id"=> "0110118003900141",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10304,
                "supermercado_id"=> $dia,
                "peso" => 500,
                "scrab_id"=> "290665",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10304,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2685840-fideo-grueso-eroski-paquete-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10304,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "62498"
                    ]);

$p10305 = DB::table("productos")->where("name","Macarron")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10305,
                "supermercado_id"=> $mercadona,
                "peso" => 1000,
                "scrab_id"=> "6250",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10305,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-544501833",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10305,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118003503374",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10305,
                "supermercado_id"=> $dia,
                "peso" => 1000,
                "scrab_id"=> "50973",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10305,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/349183-macarrones-eroski-basic-paquete-1-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10305,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "27254"
                    ]);

$p10306 = DB::table("productos")->where("name","Espaguetti")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10306,
                "supermercado_id"=> $mercadona,
                "peso" => 1000,
                "scrab_id"=> "6245",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10306,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-544501835",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10306,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118003503366",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10306,
                "supermercado_id"=> $dia,
                "peso" => 1000,
                "scrab_id"=> "52208",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10306,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/70565-spaguetti-eroski-basic-paquete-1-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10306,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "28148"
                    ]);


$p10307 = DB::table("productos")->where("name","Tallarin")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10307,
                "supermercado_id"=> $mercadona,
                "peso" => 500,
                "scrab_id"=> "6321",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10307,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-521005661",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10307,
                "supermercado_id"=> $eci,
                "peso" => 250,
                "scrab_id"=> "0110118845103490",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10307,
                "supermercado_id"=> $dia,
                "peso" => 500,
                "scrab_id"=> "74729",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10307,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/367409-tallarines-eroski-paquete-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10307,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "20565"
                    ]);

$p10401 = DB::table("productos")->where("name","Harina de trigo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10401,
                "supermercado_id"=> $mercadona,
                "peso" => 1000,
                "scrab_id"=> "29100",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10401,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-VC4AECOMM-253575",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10401,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118037901024",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10401,
                "supermercado_id"=> $dia,
                "peso" => 1000,
                "scrab_id"=> "505",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10401,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/362442-harina-de-trigo-eroski-basic-paquete-1-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10401,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "10164"
                    ]);

$p10402 = DB::table("productos")->where("name","Harina de maiz")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10402,
                "supermercado_id"=> $mercadona,
                "peso" => 1000,
                "scrab_id"=> "29165",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10402,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-590212127",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10402,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118038300010",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p10402,
                "supermercado_id"=> $dia,
                "peso" => 1000,
                "scrab_id"=> "161360",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10402,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2570935-harina-de-maiz-pan-paquete-1-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p10402,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "10598"
                    ]);

$p20101 = DB::table("productos")->where("name","Solomillo de ternera")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20101,
                "supermercado_id"=> $mercadona,
                "peso" => 300,
                "scrab_id"=> "2804",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20101,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-prod63772",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20101,
                "supermercado_id"=> $eci,
                "peso" => 500,
                "scrab_id"=> "0110118425000793",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20101,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20101,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14803498-solomillo-ternera-euskal-okela-enatur-al-corte-compra-minima-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20101,
                "supermercado_id"=> $alcampo,
                "peso" => 350,
                "scrab_id"=> "80047"
                    ]);

$p20102 = DB::table("productos")->where("name","Chuletón de ternera")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20102,
                "supermercado_id"=> $mercadona,
                "peso" => 550,
                "scrab_id"=> "2155",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20102,
                "supermercado_id"=> $carrefour,
                "peso" => 600,
                "scrab_id"=> "R-VC4AECOMM-133775",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20102,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118425500982",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20102,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20102,
                "supermercado_id"=> $eroski,
                "peso" => 600,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16810848-chuleta-de-ternera-euskal-okela-eroski-natur-bandeja-aprox-600-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20102,
                "supermercado_id"=> $alcampo,
                "peso" => 550,
                "scrab_id"=> "65372"
                    ]);

$p20103 = DB::table("productos")->where("name","Entrecot de ternera")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20103,
                "supermercado_id"=> $mercadona,
                "peso" => 500,
                "scrab_id"=> "3461",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20103,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-prod1070085",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20103,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118425500123",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20103,
                "supermercado_id"=> $dia,
                "peso" => 420,
                "scrab_id"=> "276321",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20103,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/10425080-entrecot-de-ternera-gallega-al-corte-compra-minima-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20103,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "80063"
                    ]);

$p20104 = DB::table("productos")->where("name","Tacos para estofado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20104,
                "supermercado_id"=> $mercadona,
                "peso" => 600,
                "scrab_id"=> "2807",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20104,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-133601",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20104,
                "supermercado_id"=> $eci,
                "peso" => 500,
                "scrab_id"=> "0110118425000819",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20104,
                "supermercado_id"=> $dia,
                "peso" => 450,
                "scrab_id"=> "276318",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20104,
                "supermercado_id"=> $eroski,
                "peso" => 600,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16810970-estofado-de-ternera-euskal-okela-eroski-natur-bandeja-aprox-600-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20104,
                "supermercado_id"=> $alcampo,
                "peso" => 450,
                "scrab_id"=> "76349"
                    ]);

$p20105 = DB::table("productos")->where("name","Filetes de ternera")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20105,
                "supermercado_id"=> $mercadona,
                "peso" => 500,
                "scrab_id"=> "2900",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20105,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-prod1070083",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20105,
                "supermercado_id"=> $eci,
                "peso" => 500,
                "scrab_id"=> "0110118425501204",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20105,
                "supermercado_id"=> $dia,
                "peso" => 400,
                "scrab_id"=> "181288",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20105,
                "supermercado_id"=> $eroski,
                "peso" => 600,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16810913-filete-de-ternera-1a-euskal-okela-eroski-natur-bandeja-aprox-600-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20105,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "78424"
                    ]);

$p20201 = DB::table("productos")->where("name","Chuletas de lomo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20201,
                "supermercado_id"=> $mercadona,
                "peso" => 480,
                "scrab_id"=> "4901",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20201,
                "supermercado_id"=> $carrefour,
                "peso" => 400,
                "scrab_id"=> "R-prod130307",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20201,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118434100287",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20201,
                "supermercado_id"=> $dia,
                "peso" => 600,
                "scrab_id"=> "290992",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20201,
                "supermercado_id"=> $eroski,
                "peso" => 450,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17771064-chuleta-de-lomo-de-cerdo-eroski-natur-duroc-4-5-und-bja-450-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20201,
                "supermercado_id"=> $alcampo,
                "peso" => 650,
                "scrab_id"=> "76512"
                    ]);

$p20202 = DB::table("productos")->where("name","Pieza de lomo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20202,
                "supermercado_id"=> $mercadona,
                "peso" => 800,
                "scrab_id"=> "4590",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20202,
                "supermercado_id"=> $carrefour,
                "peso" => 1200,
                "scrab_id"=> "R-684403414",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20202,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118430509812",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20202,
                "supermercado_id"=> $dia,
                "peso" => 850,
                "scrab_id"=> "46810",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20202,
                "supermercado_id"=> $eroski,
                "peso" => 1200,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/6833388-lomo-de-cerdo-trozo-eroski-bandeja-aprox-12-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20202,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "77640"
                    ]);

$p20203 = DB::table("productos")->where("name","Filetes cinta de lomo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20203,
                "supermercado_id"=> $mercadona,
                "peso" => 400,
                "scrab_id"=> "2714",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20203,
                "supermercado_id"=> $carrefour,
                "peso" => 145,
                "scrab_id"=> "R-VC4AECOMM-001523",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20203,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118434100030",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20203,
                "supermercado_id"=> $dia,
                "peso" => 300,
                "scrab_id"=> "166223",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20203,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/10473783-filete-de-lomo-de-cerdo-al-corte-compra-minima-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20203,
                "supermercado_id"=> $alcampo,
                "peso" => 800,
                "scrab_id"=> "70394"
                    ]);

$p20204 = DB::table("productos")->where("name","Solomillo de cerdo")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20204,
                    "supermercado_id"=> $mercadona,
                    "peso" => 500,
                    "scrab_id"=> "4570",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20204,
                    "supermercado_id"=> $carrefour,
                    "peso" => 1200,
                    "scrab_id"=> "R-VC4AECOMM-518437",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20204,
                    "supermercado_id"=> $eci,
                    "peso" => 500,
                    "scrab_id"=> "0110118434100295",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20204,
                    "supermercado_id"=> $dia,
                    "peso" => 450,
                    "scrab_id"=> "11077",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20204,
                    "supermercado_id"=> $eroski,
                    "peso" => 500,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2946119-solomillo-de-cerdo-al-vacio-eroski-sobre-aprox-500-g/"
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20204,
                    "supermercado_id"=> $alcampo,
                    "peso" => 800,
                    "scrab_id"=> "79843"
                        ]);

$p20205 = DB::table("productos")->where("name","Costillas de cerdo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20205,
                "supermercado_id"=> $mercadona,
                "peso" => 530,
                "scrab_id"=> "2811",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20205,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-001426",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20205,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118434101129",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20205,
                "supermercado_id"=> $dia,
                "peso" => 450,
                "scrab_id"=> "291164",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20205,
                "supermercado_id"=> $eroski,
                "peso" => 450,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17771502-costilla-troceada-de-cerdo-eroski-bandeja-450-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20205,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "76420"
                    ]);

$p20206 = DB::table("productos")->where("name","Filetes de jamon")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20206,
                "supermercado_id"=> $mercadona,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20206,
                "supermercado_id"=> $carrefour,
                "peso" => 400,
                "scrab_id"=> "R-prod410728",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20206,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118434100261",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20206,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20206,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/10473825-filete-de-aguja-de-cerdo-al-corte-compra-minima-500-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20206,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "76530"
                    ]);

$p20301 = DB::table("productos")->where("name","Chuletas de cordero")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20301,
            "supermercado_id"=> $mercadona,
            "peso" => 850,
            "scrab_id"=> "4366",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20301,
            "supermercado_id"=> $carrefour,
            "peso" => 600,
            "scrab_id"=> "R-VC4AECOMM-625983",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20301,
            "supermercado_id"=> $eci,
            "peso" => 1000,
            "scrab_id"=> "0110118428100111",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20301,
            "supermercado_id"=> $dia,
            "peso" => NULL,
            "scrab_id"=> NULL,
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20301,
            "supermercado_id"=> $eroski,
            "peso" => 500,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/7051352-chuletillas-de-cordero-gales-bandeja-aprox-500-g/"
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20301,
            "supermercado_id"=> $alcampo,
            "peso" => 700,
            "scrab_id"=> "75357"
                ]);

$p20302 = DB::table("productos")->where("name","Paletilla de cordero")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20302,
                "supermercado_id"=> $mercadona,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20302,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-fprod1460327",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20302,
                "supermercado_id"=> $eci,
                "peso" => 400,
                "scrab_id"=> "0110118486100029",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20302,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20302,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8746687-paletilla-de-cordero-ternasco-de-aragon-enatur-bandeja-aprox-1-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20302,
                "supermercado_id"=> $alcampo,
                "peso" => 1100,
                "scrab_id"=> "70556"
                    ]);

$p20401 = DB::table("productos")->where("name","Traseros de pollo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20401,
                "supermercado_id"=> $mercadona,
                "peso" => 800,
                "scrab_id"=> "3727",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20401,
                "supermercado_id"=> $carrefour,
                "peso" => 1500,
                "scrab_id"=> "R-827513085",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20401,
                "supermercado_id"=> $eci,
                "peso" => 1100,
                "scrab_id"=> "0110118460511522",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20401,
                "supermercado_id"=> $dia,
                "peso" => 1200,
                "scrab_id"=> "261369",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20401,
                "supermercado_id"=> $eroski,
                "peso" => 1200,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9805706-traseros-de-pollo-eroski-bandeja-al-peso-aprox-12-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20401,
                "supermercado_id"=> $alcampo,
                "peso" => 1200,
                "scrab_id"=> "81646"
                    ]);

$p20402 = DB::table("productos")->where("name","Muslo y contramuslo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20402,
                "supermercado_id"=> $mercadona,
                "peso" => 900,
                "scrab_id"=> "2777",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20402,
                "supermercado_id"=> $carrefour,
                "peso" => 1200,
                "scrab_id"=> "R-prod68072",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20402,
                "supermercado_id"=> $eci,
                "peso" => 750,
                "scrab_id"=> "0110118460511449",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20402,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20402,
                "supermercado_id"=> $eroski,
                "peso" => 1100,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/20971073-contramuslos-de-pollo-con-piel-eroski-bandeja-peso-aprox-11-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20402,
                "supermercado_id"=> $alcampo,
                "peso" => 550,
                "scrab_id"=> "82458"
                    ]);

$p20403 = DB::table("productos")->where("name","Muslitos de pollo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20403,
                "supermercado_id"=> $mercadona,
                "peso" => 920,
                "scrab_id"=> "2778",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20403,
                "supermercado_id"=> $carrefour,
                "peso" => 1200,
                "scrab_id"=> "R-830700192",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20403,
                "supermercado_id"=> $eci,
                "peso" => 750,
                "scrab_id"=> "0110118460511415",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20403,
                "supermercado_id"=> $dia,
                "peso" => 800,
                "scrab_id"=> "4211",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20403,
                "supermercado_id"=> $eroski,
                "peso" => 950,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/20971040-jamoncitos-de-pollo-eroski-6-9-uds-bandeja-peso-aprox-950-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20403,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "79813"
                    ]);

$p20404 = DB::table("productos")->where("name","Pechuga fileteada de pollo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20404,
                "supermercado_id"=> $mercadona,
                "peso" => 650,
                "scrab_id"=> "2787",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20404,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-791562919",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20404,
                "supermercado_id"=> $eci,
                "peso" => 500,
                "scrab_id"=> "0110118460511373",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20404,
                "supermercado_id"=> $dia,
                "peso" => 450,
                "scrab_id"=> "21977",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20404,
                "supermercado_id"=> $eroski,
                "peso" => 520,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9202094-pechuga-fileteada-extrafina-pollo-eroski-bandeja-al-peso-aprox-520-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20404,
                "supermercado_id"=> $alcampo,
                "peso" => 600,
                "scrab_id"=> "79510"
                    ]);

$p20405 = DB::table("productos")->where("name","Alitas de pollo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20405,
                "supermercado_id"=> $mercadona,
                "peso" => 700,
                "scrab_id"=> "2785",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20405,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-525964728",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20405,
                "supermercado_id"=> $eci,
                "peso" => 600,
                "scrab_id"=> "0110118460511480",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20405,
                "supermercado_id"=> $dia,
                "peso" => 600,
                "scrab_id"=> "261367",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20405,
                "supermercado_id"=> $eroski,
                "peso" => 600,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/22307342-alas-de-pollo-partidas-eroski-bandeja-aprox-600-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20405,
                "supermercado_id"=> $alcampo,
                "peso" => 600,
                "scrab_id"=> "42272"
                    ]);

$p20406 = DB::table("productos")->where("name","Pechuga entera de pollo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20406,
                "supermercado_id"=> $mercadona,
                "peso" => 1200,
                "scrab_id"=> "3682",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20406,
                "supermercado_id"=> $carrefour,
                "peso" => 1200,
                "scrab_id"=> "R-827513087",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20406,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118460511365",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20406,
                "supermercado_id"=> $dia,
                "peso" => 1000,
                "scrab_id"=> "261371",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20406,
                "supermercado_id"=> $eroski,
                "peso" => 1500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9805201-pechuga-enteras-de-pollo-eroski-4-7-uds-bandeja-aprox-15-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20406,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "79804"
                    ]);

$p20407 = DB::table("productos")->where("name","Pollo entero limpio")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20407,
                "supermercado_id"=> $mercadona,
                "peso" => 1900,
                "scrab_id"=> "2781",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20407,
                "supermercado_id"=> $carrefour,
                "peso" => 2000,
                "scrab_id"=> "R-791562917",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20407,
                "supermercado_id"=> $eci,
                "peso" => 1700,
                "scrab_id"=> "0110118460511332",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20407,
                "supermercado_id"=> $dia,
                "peso" => 1900,
                "scrab_id"=> "64223",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20407,
                "supermercado_id"=> $eroski,
                "peso" => 2000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9204066-pollo-limpio-eroski-pieza-al-peso-aprox-2-kg/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20407,
                "supermercado_id"=> $alcampo,
                "peso" => 1800,
                "scrab_id"=> "79835"
                    ]);

$p20408 = DB::table("productos")->where("name","Chuletas de pavo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20408,
                "supermercado_id"=> $mercadona,
                "peso" => 760,
                "scrab_id"=> "4523",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20408,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-prod920185",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20408,
                "supermercado_id"=> $eci,
                "peso" => 600,
                "scrab_id"=> "0110118461002273",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20408,
                "supermercado_id"=> $dia,
                "peso" => 550,
                "scrab_id"=> "261352",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20408,
                "supermercado_id"=> $eroski,
                "peso" => 340,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14894604-chuleta-de-contramuslos-de-pavo-eroski-bandeja-al-peso-aprox-340-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20408,
                "supermercado_id"=> $alcampo,
                "peso" => 600,
                "scrab_id"=> "60523"
                    ]);

$p20409 = DB::table("productos")->where("name","Pechuga fileteada de pavo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20409,
                "supermercado_id"=> $mercadona,
                "peso" => 600,
                "scrab_id"=> "2794",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20409,
                "supermercado_id"=> $carrefour,
                "peso" => 600,
                "scrab_id"=> "R-prod920182",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20409,
                "supermercado_id"=> $eci,
                "peso" => 600,
                "scrab_id"=> "0110118461002315",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20409,
                "supermercado_id"=> $dia,
                "peso" => 575,
                "scrab_id"=> "261349",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20409,
                "supermercado_id"=> $eroski,
                "peso" => 550,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/5848916-filete-de-pechuga-de-pavo-eroski-bandeja-al-peso-aprox-550-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20409,
                "supermercado_id"=> $alcampo,
                "peso" => 600,
                "scrab_id"=> "77324"
                    ]);


$p20501 = DB::table("productos")->where("name","Chopped de pavo")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20501,
            "supermercado_id"=> $mercadona,
            "peso" => NULL,
            "scrab_id"=> NULL,
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20501,
            "supermercado_id"=> $carrefour,
            "peso" => 250,
            "scrab_id"=> "R-VC4AECOMM-710860",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20501,
            "supermercado_id"=> $eci,
            "peso" => NULL,
            "scrab_id"=> NULL,
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20501,
            "supermercado_id"=> $dia,
            "peso" => 200,
            "scrab_id"=> "273953",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20501,
            "supermercado_id"=> $eroski,
            "peso" => 225,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/19522713-chopped-de-pavo-elpozo-bandeja-225-g/"
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20501,
            "supermercado_id"=> $alcampo,
            "peso" => 200,
            "scrab_id"=> "32860"
                ]);

$p20502 = DB::table("productos")->where("name","Chopped pork")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20502,
            "supermercado_id"=> $mercadona,
            "peso" => 250,
            "scrab_id"=> "59333",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20502,
            "supermercado_id"=> $carrefour,
            "peso" => 250,
            "scrab_id"=> "R-VC4AECOMM-710772",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20502,
            "supermercado_id"=> $eci,
            "peso" => 1000,
            "scrab_id"=> "0110118322200025",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20502,
            "supermercado_id"=> $dia,
            "peso" => 250,
            "scrab_id"=> "273959",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20502,
            "supermercado_id"=> $eroski,
            "peso" => NULL,
            "scrab_id"=> NULL
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20502,
            "supermercado_id"=> $alcampo,
            "peso" => 170,
            "scrab_id"=> "84066"
                ]);

$p20503 = DB::table("productos")->where("name","Chopped de ternera")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20503,
            "supermercado_id"=> $mercadona,
            "peso" => NULL,
            "scrab_id"=> NULL,
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20503,
            "supermercado_id"=> $carrefour,
            "peso" => 105,
            "scrab_id"=> "R-VC4AECOMM-695381",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20503,
            "supermercado_id"=> $eci,
            "peso" => 95,
            "scrab_id"=> "0110118381300229",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20503,
            "supermercado_id"=> $dia,
            "peso" => NULL,
            "scrab_id"=> NULL,
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20503,
            "supermercado_id"=> $eroski,
            "peso" => NULL,
            "scrab_id"=> NULL
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20503,
            "supermercado_id"=> $alcampo,
            "peso" => 95,
            "scrab_id"=> "65420"
                ]);


$p20504 = DB::table("productos")->where("name","Mortadela de cerdo")->value("id");
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20504,
            "supermercado_id"=> $mercadona,
            "peso" => 250,
            "scrab_id"=> "59334",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20504,
            "supermercado_id"=> $carrefour,
            "peso" => 250,
            "scrab_id"=> "R-VC4AECOMM-710701",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20504,
            "supermercado_id"=> $eci,
            "peso" => 250,
            "scrab_id"=> "0110118394300356",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id"=> $p20504,
            "supermercado_id"=> $dia,
            "peso" => 250,
            "scrab_id"=> "273960",
            ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20504,
            "supermercado_id"=> $eroski,
            "peso" => 250,
            "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12628566-mortadela-eroski-basic-sobre-250-g/",
                ]);
        DB::table("supermercadoproductos")->insert([
            "producto_id" => $p20504,
            "supermercado_id"=> $alcampo,
            "peso" => 150,
            "scrab_id"=> "54709"
                ]);

$p20505 = DB::table("productos")->where("name","Mortadela de pavo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20505,
                "supermercado_id"=> $mercadona,
                "peso" => 150,
                "scrab_id"=> "59336",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20505,
                "supermercado_id"=> $carrefour,
                "peso" => 250,
                "scrab_id"=> "R-VC4AECOMM-710777",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20505,
                "supermercado_id"=> $eci,
                "peso" => 95,
                "scrab_id"=> "0110118394300661",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20505,
                "supermercado_id"=> $dia,
                "peso" => 200,
                "scrab_id"=> "273952",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20505,
                "supermercado_id"=> $eroski,
                "peso" => 225,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12209144-mortadela-de-pavo-elpozo-bandeja-225-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20505,
                "supermercado_id"=> $alcampo,
                "peso" => 150,
                "scrab_id"=> "675577"
                    ]);

$p20506 = DB::table("productos")->where("name","Chorizo 'Pamplona'")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20506,
                "supermercado_id"=> $mercadona,
                "peso" => 225,
                "scrab_id"=> "59166",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20506,
                "supermercado_id"=> $carrefour,
                "peso" => 250,
                "scrab_id"=> "R-VC4AECOMM-084413",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20506,
                "supermercado_id"=> $eci,
                "peso" => 225,
                "scrab_id"=> "0110118386700621",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20506,
                "supermercado_id"=> $dia,
                "peso" => 225,
                "scrab_id"=> "273982",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20506,
                "supermercado_id"=> $eroski,
                "peso" => 224,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24573677-chorizo-pamplona-extra-eroski-basic-pack-4x5625-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20506,
                "supermercado_id"=> $alcampo,
                "peso" => 200,
                "scrab_id"=> "81775"
                    ]);

$p20507 = DB::table("productos")->where("name","Salami extra")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20507,
                "supermercado_id"=> $mercadona,
                "peso" => 240,
                "scrab_id"=> "59090",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20507,
                "supermercado_id"=> $carrefour,
                "peso" => 240,
                "scrab_id"=> "R-VC4AECOMM-248782",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20507,
                "supermercado_id"=> $eci,
                "peso" => 225,
                "scrab_id"=> "0110118388300727",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p20507,
                "supermercado_id"=> $dia,
                "peso" => 200,
                "scrab_id"=> "274141",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20507,
                "supermercado_id"=> $eroski,
                "peso" => 150,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18720888-lunch-salami-sobre-150-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p20507,
                "supermercado_id"=> $alcampo,
                "peso" => 200,
                "scrab_id"=> "81773"
                    ]);

$p20508 = DB::table("productos")->where("name","Salchichón extra")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20508,
                    "supermercado_id"=> $mercadona,
                    "peso" => 180,
                    "scrab_id"=> "59130",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20508,
                    "supermercado_id"=> $carrefour,
                    "peso" => 240,
                    "scrab_id"=> "R-VC4AECOMM-248781",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20508,
                    "supermercado_id"=> $eci,
                    "peso" => 150,
                    "scrab_id"=> "0110118388300529",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20508,
                    "supermercado_id"=> $dia,
                    "peso" => 200,
                    "scrab_id"=> "274140",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20508,
                    "supermercado_id"=> $eroski,
                    "peso" => 180,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24573685-salchichon-extra-eroski-basic-pack-4x45-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20508,
                    "supermercado_id"=> $alcampo,
                    "peso" => 200,
                    "scrab_id"=> "54214"
                        ]);

$p20509 = DB::table("productos")->where("name","Lomo embuchado")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20509,
                    "supermercado_id"=> $mercadona,
                    "peso" => 125,
                    "scrab_id"=> "59075",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20509,
                    "supermercado_id"=> $carrefour,
                    "peso" => 125,
                    "scrab_id"=> "R-VC4AECOMM-709767",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20509,
                    "supermercado_id"=> $eci,
                    "peso" => 225,
                    "scrab_id"=> "0110118387200324",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20509,
                    "supermercado_id"=> $dia,
                    "peso" => 140,
                    "scrab_id"=> "274063",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20509,
                    "supermercado_id"=> $eroski,
                    "peso" => 125,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25258989-lomo-embuchado-eroski-pack-4x3125-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20509,
                    "supermercado_id"=> $alcampo,
                    "peso" => 120,
                    "scrab_id"=> "81165"
                        ]);

$p20510 = DB::table("productos")->where("name","Bacon")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20510,
                    "supermercado_id"=> $mercadona,
                    "peso" => 210,
                    "scrab_id"=> "59169",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20510,
                    "supermercado_id"=> $carrefour,
                    "peso" => 200,
                    "scrab_id"=> "R-VC4AECOMM-710687",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20510,
                    "supermercado_id"=> $eci,
                    "peso" => 150,
                    "scrab_id"=> "0110118384500031",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20510,
                    "supermercado_id"=> $dia,
                    "peso" => 200,
                    "scrab_id"=> "273749",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20510,
                    "supermercado_id"=> $eroski,
                    "peso" => 150,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16460800-bacon-ahumado-con-humo-natural-eroski-maestro-sobre-150-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20510,
                    "supermercado_id"=> $alcampo,
                    "peso" => 200,
                    "scrab_id"=> "54130"
                        ]);

$p20601 = DB::table("productos")->where("name","Tacos carne adobada 'Pinchos'")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20601,
                    "supermercado_id"=> $mercadona,
                    "peso" => 500,
                    "scrab_id"=> "3456",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20601,
                    "supermercado_id"=> $carrefour,
                    "peso" => 500,
                    "scrab_id"=> "R-VC4AECOMM-058444",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20601,
                    "supermercado_id"=> $eci,
                    "peso" => 400,
                    "scrab_id"=> "0110118433500149",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20601,
                    "supermercado_id"=> $dia,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20601,
                    "supermercado_id"=> $eroski,
                    "peso" => 360,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/22397129-pincho-de-pollo-adobado-ranchero-eroski-bandeja-360-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20601,
                    "supermercado_id"=> $alcampo,
                    "peso" => 300,
                    "scrab_id"=> "78057"
                        ]);

$p20602 = DB::table("productos")->where("name","Longaniza de cerdo")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20602,
                    "supermercado_id"=> $mercadona,
                    "peso" => 560,
                    "scrab_id"=> "6043",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20602,
                    "supermercado_id"=> $carrefour,
                    "peso" => 500,
                    "scrab_id"=> "R-VC4AECOMM-058970",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20602,
                    "supermercado_id"=> $eci,
                    "peso" => 350,
                    "scrab_id"=> "0110118450500881",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20602,
                    "supermercado_id"=> $dia,
                    "peso" => 325,
                    "scrab_id"=> "112150",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20602,
                    "supermercado_id"=> $eroski,
                    "peso" => 375,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/19718816-longaniza-fresca-de-cerdo-eroski-bandeja-375-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20602,
                    "supermercado_id"=> $alcampo,
                    "peso" => 325,
                    "scrab_id"=> "76857"
                        ]);

$p20603 = DB::table("productos")->where("name","Carne picada de cerdo")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20603,
                    "supermercado_id"=> $mercadona,
                    "peso" => 560,
                    "scrab_id"=> "2867",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20603,
                    "supermercado_id"=> $carrefour,
                    "peso" => 500,
                    "scrab_id"=> "R-VC4AECOMM-050334",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20603,
                    "supermercado_id"=> $eci,
                    "peso" => 500,
                    "scrab_id"=> "0110118481303347",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20603,
                    "supermercado_id"=> $dia,
                    "peso" => 500,
                    "scrab_id"=> "261238",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20603,
                    "supermercado_id"=> $eroski,
                    "peso" => 400,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2438125-picada-mixta-de-cerdo-vacuno-eroski-bandeja-400-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20603,
                    "supermercado_id"=> $alcampo,
                    "peso" => 500,
                    "scrab_id"=> "542619"
                        ]);

$p20604 = DB::table("productos")->where("name","Carne picada de ternera")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20604,
                    "supermercado_id"=> $mercadona,
                    "peso" => 560,
                    "scrab_id"=> "4575",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20604,
                    "supermercado_id"=> $carrefour,
                    "peso" => 500,
                    "scrab_id"=> "R-VC4AECOMM-050315",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20604,
                    "supermercado_id"=> $eci,
                    "peso" => 400,
                    "scrab_id"=> "0110118480200130",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p20604,
                    "supermercado_id"=> $dia,
                    "peso" => 500,
                    "scrab_id"=> "261239",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20604,
                    "supermercado_id"=> $eroski,
                    "peso" => 400,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2438109-picada-de-vacuno-eroski-bandeja-400-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p20604,
                    "supermercado_id"=> $alcampo,
                    "peso" => 400,
                    "scrab_id"=> "89128"
                        ]);


$p30101 = DB::table("productos")->where("name","Bacaladilla")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30101,
                "supermercado_id"=> $mercadona,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30101,
                "supermercado_id"=> $carrefour,
                "peso" => 600,
                "scrab_id"=> "R-628108250",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30101,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118256000037",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30101,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30101,
                "supermercado_id"=> $eroski,
                "peso" => NULL,
                "scrab_id"=> NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30101,
                "supermercado_id"=> $alcampo,
                "peso" => 600,
                "scrab_id"=> "73126"
                    ]);

$p30102 = DB::table("productos")->where("name","Bacalao")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30102,
                "supermercado_id"=> $mercadona,
                "peso" => 2280,
                "scrab_id"=> "81204.1",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30102,
                "supermercado_id"=> $carrefour,
                "peso" => 1500,
                "scrab_id"=> "R-531505549",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30102,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118247400205",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30102,
                "supermercado_id"=> $dia,
                "peso" => 350,
                "scrab_id"=> "89330",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30102,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/10882900-bacalao-skrei-4-6-kg-enatur-msc-granel-5-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30102,
                "supermercado_id"=> $alcampo,
                "peso" => 2500,
                "scrab_id"=> "73111"
                    ]);

$p30103 = DB::table("productos")->where("name","Boquerón")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30103,
                    "supermercado_id"=> $mercadona,
                    "peso" => 200,
                    "scrab_id"=> "81661.1",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30103,
                    "supermercado_id"=> $carrefour,
                    "peso" => 1000,
                    "scrab_id"=> "R-628108274",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30103,
                    "supermercado_id"=> $eci,
                    "peso" => 1000,
                    "scrab_id"=> "0110118246300042",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30103,
                    "supermercado_id"=> $dia,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30103,
                    "supermercado_id"=> $eroski,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30103,
                    "supermercado_id"=> $alcampo,
                    "peso" => 300,
                    "scrab_id"=> "73019"
                        ]);

$p30104 = DB::table("productos")->where("name","Rape")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30104,
                "supermercado_id"=> $mercadona,
                "peso" => 1460,
                "scrab_id"=> "81220.2",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30104,
                "supermercado_id"=> $carrefour,
                "peso" => 2500,
                "scrab_id"=> "R-530807348",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30104,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118255800031",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30104,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30104,
                "supermercado_id"=> $eroski,
                "peso" => 2500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/835744-rape-entero-y-limpio-al-peso-compra-minima-25-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30104,
                "supermercado_id"=> $alcampo,
                "peso" => 1500,
                "scrab_id"=> "73112"
                    ]);

$p30105 = DB::table("productos")->where("name","Gallo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30105,
                "supermercado_id"=> $mercadona,
                "peso" => 270,
                "scrab_id"=> "81592.2",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30105,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-628108246",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30105,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118255400022",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30105,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30105,
                "supermercado_id"=> $eroski,
                "peso" => NULL,
                "scrab_id"=> NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30105,
                "supermercado_id"=> $alcampo,
                "peso" => 400,
                "scrab_id"=> "72986"
                    ]);

$p30106 = DB::table("productos")->where("name","Lenguado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30106,
                "supermercado_id"=> $mercadona,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30106,
                "supermercado_id"=> $carrefour,
                "peso" => 140,
                "scrab_id"=> "R-530807372",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30106,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118255500128",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30106,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30106,
                "supermercado_id"=> $eroski,
                "peso" => NULL,
                "scrab_id"=> NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30106,
                "supermercado_id"=> $alcampo,
                "peso" => 350,
                "scrab_id"=> "32252"
                    ]);

$p30107 = DB::table("productos")->where("name","Lubina")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30107,
                "supermercado_id"=> $mercadona,
                "peso" => 370,
                "scrab_id"=> "81241.1",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30107,
                "supermercado_id"=> $carrefour,
                "peso" => 600,
                "scrab_id"=> "R-790212148",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30107,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118247300041",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30107,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30107,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9717398-lubina-de-crianza-eroski-natur-ggn-pieza-aprox-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30107,
                "supermercado_id"=> $alcampo,
                "peso" => 600,
                "scrab_id"=> "72965"
                    ]);


$p30108 = DB::table("productos")->where("name","Merluza")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30108,
                "supermercado_id"=> $mercadona,
                "peso" => 1520,
                "scrab_id"=> "82610.1",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30108,
                "supermercado_id"=> $carrefour,
                "peso" => 3000,
                "scrab_id"=> "R-628108209",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30108,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118246800066",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30108,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30108,
                "supermercado_id"=> $eroski,
                "peso" => 1500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/226175-merluza-entera-pieza-al-peso-aprox-15-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30108,
                "supermercado_id"=> $alcampo,
                "peso" => 3000,
                "scrab_id"=> "72904"
                    ]);

$p30109 = DB::table("productos")->where("name","Pescadilla")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30109,
                "supermercado_id"=> $mercadona,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30109,
                "supermercado_id"=> $carrefour,
                "peso" => 800,
                "scrab_id"=> "R-531505553",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30109,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118246800090",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30109,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30109,
                "supermercado_id"=> $eroski,
                "peso" => NULL,
                "scrab_id"=> NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30109,
                "supermercado_id"=> $alcampo,
                "peso" => 600,
                "scrab_id"=> "72928"
                    ]);

$p30110 = DB::table("productos")->where("name","Salmón")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30110,
                "supermercado_id"=> $mercadona,
                "peso" => 2650,
                "scrab_id"=> "81649.1",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30110,
                "supermercado_id"=> $carrefour,
                "peso" => 3000,
                "scrab_id"=> "R-531731258",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30110,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118247400049",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30110,
                "supermercado_id"=> $dia,
                "peso" => 365,
                "scrab_id"=> "162012",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30110,
                "supermercado_id"=> $eroski,
                "peso" => 2500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/225771-salmon-entero-y-limpio-de-crianza-al-peso-compra-minima-25-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30110,
                "supermercado_id"=> $alcampo,
                "peso" => 1300,
                "scrab_id"=> "73902"
                    ]);

$p30111 = DB::table("productos")->where("name","Sardinas")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30111,
                "supermercado_id"=> $mercadona,
                "peso" => 200,
                "scrab_id"=> "81100.2",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30111,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-628108248",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30111,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118251000149",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30111,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30111,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/225334-sardina-parrocha-al-peso-compra-minima-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30111,
                "supermercado_id"=> $alcampo,
                "peso" => 400,
                "scrab_id"=> "73025"
                    ]);

$p30112 = DB::table("productos")->where("name","Trucha")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30112,
                    "supermercado_id"=> $mercadona,
                    "peso" => 410,
                    "scrab_id"=> "81200.1",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30112,
                    "supermercado_id"=> $carrefour,
                    "peso" => 600,
                    "scrab_id"=> "R-fprod1370189",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30112,
                    "supermercado_id"=> $eci,
                    "peso" => 1000,
                    "scrab_id"=> "0110118247400056",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30112,
                    "supermercado_id"=> $dia,
                    "peso" => NULL,
                    "scrab_id"=> NULL,
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30112,
                    "supermercado_id"=> $eroski,
                    "peso" => 500,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/222836-filete-de-trucha-asalmonada-al-peso-compra-minima-500-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30112,
                    "supermercado_id"=> $alcampo,
                    "peso" => 600,
                    "scrab_id"=> "71903"
                        ]);

$p30113 = DB::table("productos")->where("name","Dorada")->value("id");
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30113,
                    "supermercado_id"=> $mercadona,
                    "peso" => 630,
                    "scrab_id"=> "81234.2",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30113,
                    "supermercado_id"=> $carrefour,
                    "peso" => 600,
                    "scrab_id"=> "R-628108203",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30113,
                    "supermercado_id"=> $eci,
                    "peso" => 1000,
                    "scrab_id"=> "0110118247300017",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id"=> $p30113,
                    "supermercado_id"=> $dia,
                    "peso" => 240,
                    "scrab_id"=> "298039",
                    ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30113,
                    "supermercado_id"=> $eroski,
                    "peso" => 500,
                    "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/9717463-dorada-de-crianza-eroski-natur-ggn-pieza-aprox-500-g/",
                        ]);
                DB::table("supermercadoproductos")->insert([
                    "producto_id" => $p30113,
                    "supermercado_id"=> $alcampo,
                    "peso" => 600,
                    "scrab_id"=> "73514"
                        ]);

$p30201 = DB::table("productos")->where("name","Atún en rodajas")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30201,
                "supermercado_id"=> $mercadona,
                "peso" => 250,
                "scrab_id"=> "24357",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30201,
                "supermercado_id"=> $carrefour,
                "peso" => 420,
                "scrab_id"=> "R-VC4AECOMM-230611",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30201,
                "supermercado_id"=> $eci,
                "peso" => 225,
                "scrab_id"=> "0110118910501073",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30201,
                "supermercado_id"=> $dia,
                "peso" => 250,
                "scrab_id"=> "288633",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30201,
                "supermercado_id"=> $eroski,
                "peso" => 225,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25251760-filetes-de-atun-msc-la-sirena-bandeja-225-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30201,
                "supermercado_id"=> $alcampo,
                "peso" => 240,
                "scrab_id"=> "893702"
                    ]);

$p30202 = DB::table("productos")->where("name","Lomos de bacalao")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30202,
                "supermercado_id"=> $mercadona,
                "peso" => 390,
                "scrab_id"=> "62050",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30202,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-451223",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30202,
                "supermercado_id"=> $eci,
                "peso" => 400,
                "scrab_id"=> "0110118910501529",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30202,
                "supermercado_id"=> $dia,
                "peso" => 400,
                "scrab_id"=> "4542",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30202,
                "supermercado_id"=> $eroski,
                "peso" => 450,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/7223613-lomos-de-bacalao-eroski-bolsa-450-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30202,
                "supermercado_id"=> $alcampo,
                "peso" => 400,
                "scrab_id"=> "33322"
                    ]);

$p30203 = DB::table("productos")->where("name","Merluza fileteada")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30203,
                "supermercado_id"=> $mercadona,
                "peso" => 600,
                "scrab_id"=> "62228",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30203,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-823818281",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30203,
                "supermercado_id"=> $eci,
                "peso" => 580,
                "scrab_id"=> "0110118937000661",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30203,
                "supermercado_id"=> $dia,
                "peso" => 400,
                "scrab_id"=> "17384",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30203,
                "supermercado_id"=> $eroski,
                "peso" => 900,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13116058-filete-de-merluza-sin-piel-eroski-basic-bolsa-900-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30203,
                "supermercado_id"=> $alcampo,
                "peso" => 400,
                "scrab_id"=> "69014"
                    ]);

$p30204 = DB::table("productos")->where("name","Cola de rape")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30204,
                "supermercado_id"=> $mercadona,
                "peso" => 500,
                "scrab_id"=> "24340",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30204,
                "supermercado_id"=> $carrefour,
                "peso" => 8000,
                "scrab_id"=> "R-fprod1320155",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30204,
                "supermercado_id"=> $eci,
                "peso" => 480,
                "scrab_id"=> "0110118910502022",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30204,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30204,
                "supermercado_id"=> $eroski,
                "peso" => 350,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17908047-cola-de-rape-eroski-bandeja-aprox-350-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30204,
                "supermercado_id"=> $alcampo,
                "peso" => 800,
                "scrab_id"=> "67560"
                    ]);

$p30205 = DB::table("productos")->where("name","Pez espada")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30205,
                "supermercado_id"=> $mercadona,
                "peso" => 200,
                "scrab_id"=> "24345",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30205,
                "supermercado_id"=> $carrefour,
                "peso" => 300,
                "scrab_id"=> "R-VC4AECOMM-696042",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30205,
                "supermercado_id"=> $eci,
                "peso" => 240,
                "scrab_id"=> "0110118910500968",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30205,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30205,
                "supermercado_id"=> $eroski,
                "peso" => NULL,
                "scrab_id"=> NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30205,
                "supermercado_id"=> $alcampo,
                "peso" => NULL,
                "scrab_id"=> NULL
                    ]);

$p30206 = DB::table("productos")->where("name","Lomos de salmón")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30206,
                "supermercado_id"=> $mercadona,
                "peso" => 250,
                "scrab_id"=> "24511",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30206,
                "supermercado_id"=> $carrefour,
                "peso" => 300,
                "scrab_id"=> "R-820613818",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30206,
                "supermercado_id"=> $eci,
                "peso" => 250,
                "scrab_id"=> "0110118910502071",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30206,
                "supermercado_id"=> $dia,
                "peso" => 250,
                "scrab_id"=> "274390",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30206,
                "supermercado_id"=> $eroski,
                "peso" => 250,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25500901-lomos-de-salmon-noruego-sin-piel-altamar-bandeja-250-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30206,
                "supermercado_id"=> $alcampo,
                "peso" => 300,
                "scrab_id"=> "563416"
                    ]);

$p30207 = DB::table("productos")->where("name","Filete de lenguado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30207,
                "supermercado_id"=> $mercadona,
                "peso" => 600,
                "scrab_id"=> "62029",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30207,
                "supermercado_id"=> $carrefour,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30207,
                "supermercado_id"=> $eci,
                "peso" => 180,
                "scrab_id"=> "0110118910501669",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30207,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30207,
                "supermercado_id"=> $eroski,
                "peso" => NULL,
                "scrab_id"=> NULL,
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30207,
                "supermercado_id"=> $alcampo,
                "peso" => 800,
                "scrab_id"=> "533907"
                    ]);

$p30208 = DB::table("productos")->where("name","Gambas peladas")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30208,
                "supermercado_id"=> $mercadona,
                "peso" => 360,
                "scrab_id"=> "24181",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30208,
                "supermercado_id"=> $carrefour,
                "peso" => 400,
                "scrab_id"=> "R-prod72159",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30208,
                "supermercado_id"=> $eci,
                "peso" => 400,
                "scrab_id"=> "0110118939400778",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30208,
                "supermercado_id"=> $dia,
                "peso" => 350,
                "scrab_id"=> "269059",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30208,
                "supermercado_id"=> $eroski,
                "peso" => 320,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17816141-gamba-pelada-mediana-eroski-basic-bolsa-320-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30208,
                "supermercado_id"=> $alcampo,
                "peso" => 700,
                "scrab_id"=> "68673"
                    ]);

$p30209 = DB::table("productos")->where("name","Mejillón sin concha")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30209,
                "supermercado_id"=> $mercadona,
                "peso" => 275,
                "scrab_id"=> "62396",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30209,
                "supermercado_id"=> $carrefour,
                "peso" => 400,
                "scrab_id"=> "R-522714764",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30209,
                "supermercado_id"=> $eci,
                "peso" => 180,
                "scrab_id"=> "0110118911001263",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30209,
                "supermercado_id"=> $dia,
                "peso" => 250,
                "scrab_id"=> "233107",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30209,
                "supermercado_id"=> $eroski,
                "peso" => 360,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12170734-carne-de-mejillon-leiro-bandeja-360-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30209,
                "supermercado_id"=> $alcampo,
                "peso" => 250,
                "scrab_id"=> "67910"
                    ]);

$p30210 = DB::table("productos")->where("name","Langostino crudo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30210,
                "supermercado_id"=> $mercadona,
                "peso" => 600,
                "scrab_id"=> "24712",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30210,
                "supermercado_id"=> $carrefour,
                "peso" => 800,
                "scrab_id"=> "R-803482471",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30210,
                "supermercado_id"=> $eci,
                "peso" => 800,
                "scrab_id"=> "0110118938902030",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30210,
                "supermercado_id"=> $dia,
                "peso" => 800,
                "scrab_id"=> "47405",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30210,
                "supermercado_id"=> $eroski,
                "peso" => 700,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16550501-langostino-crudo-3542-eroski-basic-caja-700-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30210,
                "supermercado_id"=> $alcampo,
                "peso" => 700,
                "scrab_id"=> "67732"
                    ]);

$p30211 = DB::table("productos")->where("name","Anillas de pota")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30211,
                "supermercado_id"=> $mercadona,
                "peso" => 360,
                "scrab_id"=> "24249",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30211,
                "supermercado_id"=> $carrefour,
                "peso" => 450,
                "scrab_id"=> "R-649302141",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30211,
                "supermercado_id"=> $eci,
                "peso" => 300,
                "scrab_id"=> "0110118911002279",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30211,
                "supermercado_id"=> $dia,
                "peso" => 350,
                "scrab_id"=> "286538",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30211,
                "supermercado_id"=> $eroski,
                "peso" => 425,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/11011277-anillas-de-pota-eroski-bolsa-425-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30211,
                "supermercado_id"=> $alcampo,
                "peso" => 300,
                "scrab_id"=> "60753"
                    ]);

$p30301 = DB::table("productos")->where("name","Almeja / Chirla")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30301,
                "supermercado_id"=> $mercadona,
                "peso" => 500,
                "scrab_id"=> "81443",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30301,
                "supermercado_id"=> $carrefour,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30301,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118253000105",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30301,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30301,
                "supermercado_id"=> $eroski,
                "peso" => 450,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/20166674-chirla-bolsa-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30301,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "73974"
                    ]);

$p30302 = DB::table("productos")->where("name","Pulpo cocido")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30302,
                "supermercado_id"=> $mercadona,
                "peso" => 250,
                "scrab_id"=> "87770",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30302,
                "supermercado_id"=> $carrefour,
                "peso" => 250,
                "scrab_id"=> "R-VC4AECOMM-534228",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30302,
                "supermercado_id"=> $eci,
                "peso" => 600,
                "scrab_id"=> "0110118284700012",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30302,
                "supermercado_id"=> $dia,
                "peso" => 250,
                "scrab_id"=> "269304",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30302,
                "supermercado_id"=> $eroski,
                "peso" => 200,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8492761-patas-de-pulpo-cocido-eroski-bandeja-200-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30302,
                "supermercado_id"=> $alcampo,
                "peso" => 250,
                "scrab_id"=> "644921"
                    ]);

$p30303 = DB::table("productos")->where("name","Calamar entero")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30303,
                "supermercado_id"=> $mercadona,
                "peso" => 300,
                "scrab_id"=> "87191",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30303,
                "supermercado_id"=> $carrefour,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30303,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118257700031",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30303,
                "supermercado_id"=> $dia,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30303,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/225466-calamar-fresco-30-250-al-peso-compra-minima-500-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30303,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "73708"
                    ]);

$p30304 = DB::table("productos")->where("name","Mejillones")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30304,
                "supermercado_id"=> $mercadona,
                "peso" => 1000,
                "scrab_id"=> "81467",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30304,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-522714049",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30304,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118253200101",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30304,
                "supermercado_id"=> $dia,
                "peso" => 1000,
                "scrab_id"=> "81922",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30304,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13748652-mejillon-especial-30-40-bolsa-1-kg/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30304,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "73625"
                    ]);

$p30305 = DB::table("productos")->where("name","Langostinos cocidos")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30305,
                "supermercado_id"=> $mercadona,
                "peso" => 150,
                "scrab_id"=> "83490",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30305,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-530102403",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30305,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118254400049",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30305,
                "supermercado_id"=> $dia,
                "peso" => 400,
                "scrab_id"=> "117788",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30305,
                "supermercado_id"=> $eroski,
                "peso" => 450,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16478299-langostino-cocido-calibre-3040-eroski-bandeja-450-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30305,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "74490"
                    ]);

$p30401 = DB::table("productos")->where("name","Atún en aceite girasol")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30401,
                "supermercado_id"=> $mercadona,
                "peso" => 360,
                "scrab_id"=> "18055",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30401,
                "supermercado_id"=> $carrefour,
                "peso" => 312,
                "scrab_id"=> "R-prod460682",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30401,
                "supermercado_id"=> $eci,
                "peso" => 336,
                "scrab_id"=> "0110118013200847",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30401,
                "supermercado_id"=> $dia,
                "peso" => 312,
                "scrab_id"=> "262430",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30401,
                "supermercado_id"=> $eroski,
                "peso" => 111,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/900808-atun-claro-en-aceite-vegetal-eroski-lata-111-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30401,
                "supermercado_id"=> $alcampo,
                "peso" => 312,
                "scrab_id"=> "26028"
                    ]);

$p30402 = DB::table("productos")->where("name","Mejillones en escabeche")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30402,
                "supermercado_id"=> $mercadona,
                "peso" => 350,
                "scrab_id"=> "18615",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30402,
                "supermercado_id"=> $carrefour,
                "peso" => 129,
                "scrab_id"=> "R-618405050",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30402,
                "supermercado_id"=> $eci,
                "peso" => 129,
                "scrab_id"=> "0110118015101456",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30402,
                "supermercado_id"=> $dia,
                "peso" => 129,
                "scrab_id"=> "50597",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30402,
                "supermercado_id"=> $eroski,
                "peso" => 240,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14882971-mejillon-en-escabeche-eroski-pack-3x80-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30402,
                "supermercado_id"=> $alcampo,
                "peso" => 147,
                "scrab_id"=> "22597"
                    ]);

$p30403 = DB::table("productos")->where("name","Anchoas en aceite girasol")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30403,
                "supermercado_id"=> $mercadona,
                "peso" => 87,
                "scrab_id"=> "18407",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30403,
                "supermercado_id"=> $carrefour,
                "peso" => 23,
                "scrab_id"=> "R-766002207",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30403,
                "supermercado_id"=> $eci,
                "peso" => 29,
                "scrab_id"=> "0110118010801308",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30403,
                "supermercado_id"=> $dia,
                "peso" => 75,
                "scrab_id"=> "293673",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30403,
                "supermercado_id"=> $eroski,
                "peso" => 69,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25522384-filetes-de-anchoa-en-aceite-de-girasol-eroski-basic-pack-3x23-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30403,
                "supermercado_id"=> $alcampo,
                "peso" => 129,
                "scrab_id"=> "71313"
                    ]);

$p30404 = DB::table("productos")->where("name","Sardinillas en aceite girasol")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30404,
                "supermercado_id"=> $mercadona,
                "peso" =>  130,
                "scrab_id"=> "18213",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30404,
                "supermercado_id"=> $carrefour,
                "peso" => 130,
                "scrab_id"=> "R-prod590535",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30404,
                "supermercado_id"=> $eci,
                "peso" => 85,
                "scrab_id"=> "0110118004700532",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30404,
                "supermercado_id"=> $dia,
                "peso" => 124,
                "scrab_id"=> "129042",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30404,
                "supermercado_id"=> $eroski,
                "peso" => 180,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25514498-sardinilla-en-aceite-de-oliva-baja-en-sal-eroski-pack-2x90-g/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30404,
                "supermercado_id"=> $alcampo,
                "peso" => 65,
                "scrab_id"=> "59661"
                    ]);

$p30405 = DB::table("productos")->where("name","Bonito del norte en Aceite Oliva")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30405,
                "supermercado_id"=> $mercadona,
                "peso" =>  146,
                "scrab_id"=> "18116",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30405,
                "supermercado_id"=> $carrefour,
                "peso" => 156,
                "scrab_id"=> "R-prod630003",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30405,
                "supermercado_id"=> $eci,
                "peso" => 73,
                "scrab_id"=> "0110118012701381",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p30405,
                "supermercado_id"=> $dia,
                "peso" => 73,
                "scrab_id"=> "29395",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30405,
                "supermercado_id"=> $eroski,
                "peso" => 260,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/1391739-bonito-del-norte-en-aceite-de-oliva-eroski-frasco-400-g-/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p30405,
                "supermercado_id"=> $alcampo,
                "peso" => 73,
                "scrab_id"=> "23149"
                    ]);

$p40101 = DB::table("productos")->where("name","Leche entera")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40101,
                "supermercado_id"=> $mercadona,
                "peso" =>  1000,
                "scrab_id"=> "10380",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40101,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-VC4AECOMM-705739",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40101,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110120616500219",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40101,
                "supermercado_id"=> $dia,
                "peso" =>  1000,
                "scrab_id"=> "608",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40101,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18672295-leche-entera-del-pais-vasco-eroski-brik-1-litro/",
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40101,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "53540"
                    ]);

$p40102 = DB::table("productos")->where("name","Leche semidesnatada")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40102,
                "supermercado_id"=> $mercadona,
                "peso" =>  1000,
                "scrab_id"=> "10382",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40102,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-VC4AECOMM-705737",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40102,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110120616600191",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40102,
                "supermercado_id"=> $dia,
                "peso" =>  1000,
                "scrab_id"=> "504",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40102,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18672311-leche-semidesnatada-del-pais-vasco-eroski-brik-1-litro/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40102,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "53549"
                    ]);

$p40103 = DB::table("productos")->where("name","Leche desnatada")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40103,
                "supermercado_id"=> $mercadona,
                "peso" =>  1000,
                "scrab_id"=> "10384",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40103,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-VC4AECOMM-705740",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40103,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110120616700173",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40103,
                "supermercado_id"=> $dia,
                "peso" =>  1000,
                "scrab_id"=> "607",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40103,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18672337-leche-desnatada-del-pais-vasco-eroski-brik-1-litro/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40103,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "53542"
                    ]);

$p40201 = DB::table("productos")->where("name","Arroz con leche")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40201,
                "supermercado_id"=> $mercadona,
                "peso" =>  520,
                "scrab_id"=> "68354",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40201,
                "supermercado_id"=> $carrefour,
                "peso" => 460,
                "scrab_id"=> "R-VC4AECOMM-440130",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40201,
                "supermercado_id"=> $eci,
                "peso" => 520,
                "scrab_id"=> "0110118823700515",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40201,
                "supermercado_id"=> $dia,
                "peso" =>  520,
                "scrab_id"=> "85630",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40201,
                "supermercado_id"=> $eroski,
                "peso" => 520,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/23606841-arroz-con-leche-eroski-pack-4x130-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40201,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "90478"
                    ]);

$p40202 = DB::table("productos")->where("name","Flan de huevo")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40202,
                "supermercado_id"=> $mercadona,
                "peso" =>  400,
                "scrab_id"=> "68149",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40202,
                "supermercado_id"=> $carrefour,
                "peso" => 400,
                "scrab_id"=> "R-521029829",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40202,
                "supermercado_id"=> $eci,
                "peso" => 400,
                "scrab_id"=> "0110118820801076",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40202,
                "supermercado_id"=> $dia,
                "peso" =>  400,
                "scrab_id"=> "3387",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40202,
                "supermercado_id"=> $eroski,
                "peso" => 480,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/20118360-flan-de-huevo-eroski-pack-4x100-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40202,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "52919"
                    ]);

$p40203 = DB::table("productos")->where("name","Flan de vainilla")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40203,
                "supermercado_id"=> $mercadona,
                "peso" =>  600,
                "scrab_id"=> "68106",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40203,
                "supermercado_id"=> $carrefour,
                "peso" => 600,
                "scrab_id"=> "R-VC4AECOMM-350960",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40203,
                "supermercado_id"=> $eci,
                "peso" => 400,
                "scrab_id"=> "0110118820801084",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40203,
                "supermercado_id"=> $dia,
                "peso" =>  600,
                "scrab_id"=> "105814",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40203,
                "supermercado_id"=> $eroski,
                "peso" => 600,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13228671-flan-de-vainilla-eroski-basic-pack-6x100-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40203,
                "supermercado_id"=> $alcampo,
                "peso" => 600,
                "scrab_id"=> "90995"
                    ]);

$p40204 = DB::table("productos")->where("name","Natillas")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40204,
                "supermercado_id"=> $mercadona,
                "peso" =>  500,
                "scrab_id"=> "68266",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40204,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-832342825",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40204,
                "supermercado_id"=> $eci,
                "peso" => 500,
                "scrab_id"=> "0110118820701953",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40204,
                "supermercado_id"=> $dia,
                "peso" =>  500,
                "scrab_id"=> "113550",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40204,
                "supermercado_id"=> $eroski,
                "peso" => 480,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17416157-natillas-de-vainilla-eroski-pack-4x120-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40204,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "91535"
                    ]);

$p40205 = DB::table("productos")->where("name","Yogur bebible fresa y plátano")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40205,
                "supermercado_id"=> $mercadona,
                "peso" =>  1000,
                "scrab_id"=> "20613",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40205,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-prod300427",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40205,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118820503169",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40205,
                "supermercado_id"=> $dia,
                "peso" =>  1000,
                "scrab_id"=> "254923",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40205,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/21812524-yogur-liquido-de-fresa-platano-eroski-botella-1-litro/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40205,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "50449"
                    ]);

$p40206 = DB::table("productos")->where("name","Yogur natural")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40206,
                "supermercado_id"=> $mercadona,
                "peso" =>  750,
                "scrab_id"=> "22313",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40206,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-737854",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40206,
                "supermercado_id"=> $eci,
                "peso" => 480,
                "scrab_id"=> "0110118820101303",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40206,
                "supermercado_id"=> $dia,
                "peso" =>  1000,
                "scrab_id"=> "272536",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40206,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24593691-yogur-natural-pais-vasco-eroski-pack-4x125-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40206,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "51414"
                    ]);

$p40207 = DB::table("productos")->where("name","Yogur sabores")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40207,
                "supermercado_id"=> $mercadona,
                "peso" =>  500,
                "scrab_id"=> "20040",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40207,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-372922",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40207,
                "supermercado_id"=> $eci,
                "peso" => 480,
                "scrab_id"=> "0110118820200246",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40207,
                "supermercado_id"=> $dia,
                "peso" =>  500,
                "scrab_id"=> "5114",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40207,
                "supermercado_id"=> $eroski,
                "peso" => 500,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24593725-yogur-sabor-fresa-pais-vasco-eroski-pack-4x125-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40207,
                "supermercado_id"=> $alcampo,
                "peso" => 500,
                "scrab_id"=> "51420"
                    ]);

$p40208 = DB::table("productos")->where("name","Nata montada (spray)")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40208,
                "supermercado_id"=> $mercadona,
                "peso" =>  250,
                "scrab_id"=> "86818",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40208,
                "supermercado_id"=> $carrefour,
                "peso" => 250,
                "scrab_id"=> "R-787879747",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40208,
                "supermercado_id"=> $eci,
                "peso" => 250,
                "scrab_id"=> "0110120616300230",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40208,
                "supermercado_id"=> $dia,
                "peso" =>  250,
                "scrab_id"=> "63568",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40208,
                "supermercado_id"=> $eroski,
                "peso" => 250,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18023218-nata-eroski-spray-250-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40208,
                "supermercado_id"=> $alcampo,
                "peso" => 250,
                "scrab_id"=> "50471"
                    ]);

$p40301 = DB::table("productos")->where("name","Queso fresco")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40301,
                "supermercado_id"=> $mercadona,
                "peso" =>  250,
                "scrab_id"=> "51191",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40301,
                "supermercado_id"=> $carrefour,
                "peso" => 250,
                "scrab_id"=> "R-618303487",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40301,
                "supermercado_id"=> $eci,
                "peso" => 250,
                "scrab_id"=> "0110118382100867",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40301,
                "supermercado_id"=> $dia,
                "peso" =>  250,
                "scrab_id"=> "115196",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40301,
                "supermercado_id"=> $eroski,
                "peso" => 250,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/6704118-queso-fresco-de-burgos-eroski-tarrina-250-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40301,
                "supermercado_id"=> $alcampo,
                "peso" => 250,
                "scrab_id"=> "51026"
                    ]);

$p40302 = DB::table("productos")->where("name","Queso curado de oveja")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40302,
                "supermercado_id"=> $mercadona,
                "peso" =>  380,
                "scrab_id"=> "50970",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40302,
                "supermercado_id"=> $carrefour,
                "peso" => 250,
                "scrab_id"=> "R-VC4AECOMM-104885",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40302,
                "supermercado_id"=> $eci,
                "peso" => 300,
                "scrab_id"=> "0110118389400419",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40302,
                "supermercado_id"=> $dia,
                "peso" =>  250,
                "scrab_id"=> "290782",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40302,
                "supermercado_id"=> $eroski,
                "peso" => 330,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16457632-queso-curado-de-oveja-eroski-cuna-330-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40302,
                "supermercado_id"=> $alcampo,
                "peso" => 300,
                "scrab_id"=> "97673"
                    ]);

$p40303 = DB::table("productos")->where("name","Queso semicurado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40303,
                "supermercado_id"=> $mercadona,
                "peso" =>  420,
                "scrab_id"=> "50943",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40303,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-VC4AECOMM-675133",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40303,
                "supermercado_id"=> $eci,
                "peso" => 250,
                "scrab_id"=> "0110118389600257",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40303,
                "supermercado_id"=> $dia,
                "peso" =>  300,
                "scrab_id"=> "263378",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40303,
                "supermercado_id"=> $eroski,
                "peso" => 375,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12765947-queso-semicurado-eroski-basic-cuna-375-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40303,
                "supermercado_id"=> $alcampo,
                "peso" => 300,
                "scrab_id"=> "97812"
                    ]);

$p40304 = DB::table("productos")->where("name","Queso Mozarella rayado")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40304,
                "supermercado_id"=> $mercadona,
                "peso" =>  200,
                "scrab_id"=> "51110",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40304,
                "supermercado_id"=> $carrefour,
                "peso" => 200,
                "scrab_id"=> "R-521030768",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40304,
                "supermercado_id"=> $eci,
                "peso" => 200,
                "scrab_id"=> "0110118395400411",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40304,
                "supermercado_id"=> $dia,
                "peso" =>  200,
                "scrab_id"=> "13096",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40304,
                "supermercado_id"=> $eroski,
                "peso" => 200,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/24928525-queso-rallado-mozzarella-para-pizza-eroski-bolsa-200-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40304,
                "supermercado_id"=> $alcampo,
                "peso" => 200,
                "scrab_id"=> "51679"
                    ]);

$p40401 = DB::table("productos")->where("name","Huevos M")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40401,
                "supermercado_id"=> $mercadona,
                "peso" =>  12,
                "scrab_id"=> "31505",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40401,
                "supermercado_id"=> $carrefour,
                "peso" => NULL,
                "scrab_id"=> NULL,
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40401,
                "supermercado_id"=> $eci,
                "peso" => 12,
                "scrab_id"=> "0110118840000139",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40401,
                "supermercado_id"=> $dia,
                "peso" =>  12,
                "scrab_id"=> "14636",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40401,
                "supermercado_id"=> $eroski,
                "peso" => 12,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17080961-huevo-fresco-m-pais-vasco-eroski-carton-12-uds/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40401,
                "supermercado_id"=> $alcampo,
                "peso" => 12,
                "scrab_id"=> "804418"
                    ]);

$p40402 = DB::table("productos")->where("name","Huevos L")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40402,
                "supermercado_id"=> $mercadona,
                "peso" =>  12,
                "scrab_id"=> "31504",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40402,
                "supermercado_id"=> $carrefour,
                "peso" => 12,
                "scrab_id"=> "R-VC4AECOMM-307927",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40402,
                "supermercado_id"=> $eci,
                "peso" => 12,
                "scrab_id"=> "0110118840000154",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40402,
                "supermercado_id"=> $dia,
                "peso" =>  12,
                "scrab_id"=> "14635",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40402,
                "supermercado_id"=> $eroski,
                "peso" => 12,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17081308-huevo-fresco-l-pais-vasco-eroski-carton-12-uds/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40402,
                "supermercado_id"=> $alcampo,
                "peso" => 12,
                "scrab_id"=> "804318"
                    ]);

$p40403 = DB::table("productos")->where("name","Huevos XL")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40403,
                "supermercado_id"=> $mercadona,
                "peso" =>  12,
                "scrab_id"=> "31592",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40403,
                "supermercado_id"=> $carrefour,
                "peso" => 6,
                "scrab_id"=> "R-VC4AECOMM-497262",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40403,
                "supermercado_id"=> $eci,
                "peso" => 10,
                "scrab_id"=> "0110118840000147",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p40403,
                "supermercado_id"=> $dia,
                "peso" =>  6,
                "scrab_id"=> "216464",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40403,
                "supermercado_id"=> $eroski,
                "peso" => 12,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25540287-huevo-fresco-xl-eroski-carton-12-uds/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p40403,
                "supermercado_id"=> $alcampo,
                "peso" => 12,
                "scrab_id"=> "765110"
                    ]);

$p50101 = DB::table("productos")->where("name","Girasol")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50101,
                "supermercado_id"=> $mercadona,
                "peso" =>  1000,
                "scrab_id"=> "4040",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50101,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-521009768",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50101,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118046000099",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50101,
                "supermercado_id"=> $dia,
                "peso" =>  1000,
                "scrab_id"=> "101",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50101,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/377150-aceite-de-girasol-eroski-botella-1-litro/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50101,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "19818"
                    ]);

$p50102 = DB::table("productos")->where("name","Oliva intenso")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50102,
                "supermercado_id"=> $mercadona,
                "peso" =>  1000,
                "scrab_id"=> "4640",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50102,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-526600670",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50102,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118044900084",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50102,
                "supermercado_id"=> $dia,
                "peso" =>  1000,
                "scrab_id"=> "105",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50102,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/377044-aceite-de-oliva-1-eroski-botella-1-litro/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50102,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "19830"
                    ]);

$p50103 = DB::table("productos")->where("name","Oliva virgen")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50103,
                "supermercado_id"=> $mercadona,
                "peso" =>  1000,
                "scrab_id"=> "4749",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50103,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-639802050",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50103,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118045600048",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50103,
                "supermercado_id"=> $dia,
                "peso" =>  1000,
                "scrab_id"=> "216284",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50103,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/21028121-aceite-de-oliva-virgen-guillen-botella-1-litro/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50103,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "220473"
                    ]);

$p50104 = DB::table("productos")->where("name","Oliva Virgen Extra")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50104,
                "supermercado_id"=> $mercadona,
                "peso" =>  1000,
                "scrab_id"=> "4740",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50104,
                "supermercado_id"=> $carrefour,
                "peso" => 1000,
                "scrab_id"=> "R-520660335",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50104,
                "supermercado_id"=> $eci,
                "peso" => 1000,
                "scrab_id"=> "0110118045800101",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50104,
                "supermercado_id"=> $dia,
                "peso" =>  1000,
                "scrab_id"=> "112529",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50104,
                "supermercado_id"=> $eroski,
                "peso" => 1000,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/371658-aceite-de-oliva-virgen-extra-eroski-botella-1-litro/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50104,
                "supermercado_id"=> $alcampo,
                "peso" => 1000,
                "scrab_id"=> "29834"
                    ]);

$p50201 = DB::table("productos")->where("name","Mantequilla")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50201,
                "supermercado_id"=> $mercadona,
                "peso" =>  250,
                "scrab_id"=> "20716",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50201,
                "supermercado_id"=> $carrefour,
                "peso" => 250,
                "scrab_id"=> "R-fprod1350157",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50201,
                "supermercado_id"=> $eci,
                "peso" => 250,
                "scrab_id"=> "0110118815101979",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50201,
                "supermercado_id"=> $dia,
                "peso" =>  250,
                "scrab_id"=> "268201",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50201,
                "supermercado_id"=> $eroski,
                "peso" => 250,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15636475-mantequilla-eroski-pastilla-250-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50201,
                "supermercado_id"=> $alcampo,
                "peso" => 250,
                "scrab_id"=> "66096"
                    ]);

$p50202 = DB::table("productos")->where("name","Margarina")->value("id");
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50202,
                "supermercado_id"=> $mercadona,
                "peso" =>  500,
                "scrab_id"=> "20846",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50202,
                "supermercado_id"=> $carrefour,
                "peso" => 500,
                "scrab_id"=> "R-prod830327",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50202,
                "supermercado_id"=> $eci,
                "peso" => 225,
                "scrab_id"=> "0110118815200862",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id"=> $p50202,
                "supermercado_id"=> $dia,
                "peso" =>  500,
                "scrab_id"=> "55575",
                ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50202,
                "supermercado_id"=> $eroski,
                "peso" => 225,
                "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25925900-margarina-vegetal-sin-palma-tulipan-tarrina-225-g/"
                    ]);
            DB::table("supermercadoproductos")->insert([
                "producto_id" => $p50202,
                "supermercado_id"=> $alcampo,
                "peso" => 225,
                "scrab_id"=> "718111"
                    ]);

$p60101 = DB::table("productos")->where("name","Limones")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60101,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1000,
                        "scrab_id"=> "3236",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60101,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-VC4AECOMM-627255",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60101,
                        "supermercado_id"=> $eci,
                        "peso" => 750,
                        "scrab_id"=> "0110118156703144",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60101,
                        "supermercado_id"=> $dia,
                        "peso" =>  750,
                        "scrab_id"=> "11463",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60101,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/10935534-limon-malla-1-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60101,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "57781"
                            ]);

$p60102 = DB::table("productos")->where("name","Naranjas (zumo)")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60102,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  3000,
                        "scrab_id"=> "3277",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60102,
                        "supermercado_id"=> $carrefour,
                        "peso" => 2000,
                        "scrab_id"=> "R-VC4AECOMM-689364",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60102,
                        "supermercado_id"=> $eci,
                        "peso" => 3000,
                        "scrab_id"=> "0110118156700439",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60102,
                        "supermercado_id"=> $dia,
                        "peso" =>  4000,
                        "scrab_id"=> "13627",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60102,
                        "supermercado_id"=> $eroski,
                        "peso" => 3000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/23760622-naranja-malla-3-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60102,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1500,
                        "scrab_id"=> "54650"
                            ]);

$p60103 = DB::table("productos")->where("name","Mandarinas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60103,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1500,
                        "scrab_id"=> "30501",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60103,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1500,
                        "scrab_id"=> "R-575401793",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60103,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118156702344",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60103,
                        "supermercado_id"=> $dia,
                        "peso" =>  1000,
                        "scrab_id"=> "11464",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60103,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/6155-mandarina-malla-1-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60103,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1100,
                        "scrab_id"=> "57509"
                            ]);

$p60201 = DB::table("productos")->where("name","Bananas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60201,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  180,
                        "scrab_id"=> "3824",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60201,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-529921745",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60201,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118109700015",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60201,
                        "supermercado_id"=> $dia,
                        "peso" =>  500,
                        "scrab_id"=> "42070",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60201,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14382832-banana-al-peso-compra-minima-1-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60201,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "59772"
                            ]);

$p60202 = DB::table("productos")->where("name","Plátano canario")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60202,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  160,
                        "scrab_id"=> "3819",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60202,
                        "supermercado_id"=> $carrefour,
                        "peso" => 600,
                        "scrab_id"=> "R-prod73608",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60202,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118109600041",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60202,
                        "supermercado_id"=> $dia,
                        "peso" =>  1200,
                        "scrab_id"=> "11468",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60202,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12069175-platano-de-canarias-igp-al-peso-compra-minima-1-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60202,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "96150"
                            ]);

$p60301 = DB::table("productos")->where("name","Golden")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60301,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  200,
                        "scrab_id"=> "3028",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60301,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-VC4AECOMM-235331",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60301,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118105800025",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60301,
                        "supermercado_id"=> $dia,
                        "peso" =>  1000,
                        "scrab_id"=> "171233",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60301,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/11155-manzana-golden-al-peso-compra-minima-1-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60301,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "74694"
                            ]);

$p60302 = DB::table("productos")->where("name","Roja")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60302,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  190,
                        "scrab_id"=> "8177",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60302,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-550003481",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60302,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118101900126",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60302,
                        "supermercado_id"=> $dia,
                        "peso" =>  1000,
                        "scrab_id"=> "11466",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60302,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/23628084-manzana-roja-ecologica-eroski-natur-bio-al-peso-compra-minima-1-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60302,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "56763"
                            ]);

$p60401 = DB::table("productos")->where("name","Conferencia")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60401,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  170,
                        "scrab_id"=> "3119",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60401,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-600709236",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60401,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118106100037",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60401,
                        "supermercado_id"=> $dia,
                        "peso" =>  1000,
                        "scrab_id"=> "64505",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60401,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17533-pera-conferencia-cubeta-1-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60401,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "75965"
                            ]);

$p60402 = DB::table("productos")->where("name","Ercolina")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60402,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  80,
                        "scrab_id"=> "3170",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60402,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-581701543",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60402,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118106100045",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60402,
                        "supermercado_id"=> $dia,
                        "peso" =>  500,
                        "scrab_id"=> "278651",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60402,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16337-pera-blanquilla-al-peso-compra-minima-1-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60402,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "75952"
                            ]);

$p60501 = DB::table("productos")->where("name","Aguacate")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60501,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  550,
                        "scrab_id"=> "3858",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60501,
                        "supermercado_id"=> $carrefour,
                        "peso" => 500,
                        "scrab_id"=> "R-854100334",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60501,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118156300057",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60501,
                        "supermercado_id"=> $dia,
                        "peso" =>  450,
                        "scrab_id"=> "220373",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60501,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/18374611-aguacate-maduro-al-peso-compra-minima-500-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60501,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "55624"
                            ]);

$p60502 = DB::table("productos")->where("name","Ciruela")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60502,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  NULL,
                        "scrab_id"=> NULL,
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60502,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-833311198",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60502,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118105400032",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60502,
                        "supermercado_id"=> $dia,
                        "peso" =>  NULL,
                        "scrab_id"=> NULL,
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60502,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8384653-ciruela-roja-al-peso-compra-minima-500-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60502,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "76023"
                            ]);

$p60601 = DB::table("productos")->where("name","Manzanilla")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60601,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  225,
                        "scrab_id"=> "33114",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60601,
                        "supermercado_id"=> $carrefour,
                        "peso" => 225,
                        "scrab_id"=> "R-VC4AECOMM-488053",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60601,
                        "supermercado_id"=> $eci,
                        "peso" => 210,
                        "scrab_id"=> "0110118040400683",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60601,
                        "supermercado_id"=> $dia,
                        "peso" =>  225,
                        "scrab_id"=> "116850",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60601,
                        "supermercado_id"=> $eroski,
                        "peso" => 225,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15179559-aceitunas-verdes-sin-hueso-eroski-basic-pack-3x75-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60601,
                        "supermercado_id"=> $alcampo,
                        "peso" => 75,
                        "scrab_id"=> "27163"
                            ]);

$p60602 = DB::table("productos")->where("name","Negra")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60602,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  150,
                        "scrab_id"=> "33249",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60602,
                        "supermercado_id"=> $carrefour,
                        "peso" => 150,
                        "scrab_id"=> "R-VC4AECOMM-488032",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60602,
                        "supermercado_id"=> $eci,
                        "peso" => 150,
                        "scrab_id"=> "0110118040900096",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60602,
                        "supermercado_id"=> $dia,
                        "peso" =>  150,
                        "scrab_id"=> "142058",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60602,
                        "supermercado_id"=> $eroski,
                        "peso" => 150,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/4291845-aceitunas-negras-sin-hueso-eroski-lata-150-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60602,
                        "supermercado_id"=> $alcampo,
                        "peso" => 150,
                        "scrab_id"=> "27116"
                            ]);

$p60603 = DB::table("productos")->where("name","Rellena anchoa")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60603,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  150,
                        "scrab_id"=> "22911",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60603,
                        "supermercado_id"=> $carrefour,
                        "peso" => 150,
                        "scrab_id"=> "R-VC4AECOMM-441966",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60603,
                        "supermercado_id"=> $eci,
                        "peso" => 130,
                        "scrab_id"=> "0110118040600399",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60603,
                        "supermercado_id"=> $dia,
                        "peso" =>  150,
                        "scrab_id"=> "273264",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60603,
                        "supermercado_id"=> $eroski,
                        "peso" => 150,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16514028-aceitunas-rellenas-de-anchoa-eroski-basic-lata-150-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60603,
                        "supermercado_id"=> $alcampo,
                        "peso" => 150,
                        "scrab_id"=> "27115"
                            ]);

$p60701 = DB::table("productos")->where("name","Fresas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60701,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  500,
                        "scrab_id"=> "3715",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60701,
                        "supermercado_id"=> $carrefour,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60701,
                        "supermercado_id"=> $eci,
                        "peso" => 400,
                        "scrab_id"=> "0110118155600184",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60701,
                        "supermercado_id"=> $dia,
                        "peso" =>  500,
                        "scrab_id"=> "12254",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60701,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17640137-fresa-bandeja-500-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60701,
                        "supermercado_id"=> $alcampo,
                        "peso" => 500,
                        "scrab_id"=> "72888"
                            ]);

$p60702 = DB::table("productos")->where("name","Uva blanca")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60702,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  500,
                        "scrab_id"=> "3313",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60702,
                        "supermercado_id"=> $carrefour,
                        "peso" => 500,
                        "scrab_id"=> "R-fprod1460464",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60702,
                        "supermercado_id"=> $eci,
                        "peso" => 500,
                        "scrab_id"=> "0110118158400806",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60702,
                        "supermercado_id"=> $dia,
                        "peso" =>  500,
                        "scrab_id"=> "2672",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60702,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17778762-uva-blanca-sin-semilla-cubeta-500-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60702,
                        "supermercado_id"=> $alcampo,
                        "peso" => 500,
                        "scrab_id"=> "429318"
                            ]);

$p60801 = DB::table("productos")->where("name","Kiwi")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60801,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1000,
                        "scrab_id"=> "3832",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60801,
                        "supermercado_id"=> $carrefour,
                        "peso" => 500,
                        "scrab_id"=> "R-805905242",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60801,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118109300063",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60801,
                        "supermercado_id"=> $dia,
                        "peso" =>  700,
                        "scrab_id"=> "270541",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60801,
                        "supermercado_id"=> $eroski,
                        "peso" => 900,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/20317509-kiwi-euskal-baserri-cubeta-900-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60801,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "75101"
                            ]);

$p60802 = DB::table("productos")->where("name","Mango")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60802,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  500,
                        "scrab_id"=> "3050",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60802,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-VC4AECOMM-430552",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60802,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118105000303",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60802,
                        "supermercado_id"=> $dia,
                        "peso" =>  750,
                        "scrab_id"=> "166057",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60802,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8426736-mango-extra-pieza-al-peso-aprox-500-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60802,
                        "supermercado_id"=> $alcampo,
                        "peso" => 800,
                        "scrab_id"=> "55042"
                            ]);

$p60803 = DB::table("productos")->where("name","Melon")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60803,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  3300,
                        "scrab_id"=> "3506",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60803,
                        "supermercado_id"=> $carrefour,
                        "peso" => 4000,
                        "scrab_id"=> "R-521032186",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60803,
                        "supermercado_id"=> $eci,
                        "peso" => 3500,
                        "scrab_id"=> "0110118106000096",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60803,
                        "supermercado_id"=> $dia,
                        "peso" =>  2000,
                        "scrab_id"=> "28887",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60803,
                        "supermercado_id"=> $eroski,
                        "peso" => 2500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16046518-melon-el-abuelo-pieza-al-peso-aprox-25-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60803,
                        "supermercado_id"=> $alcampo,
                        "peso" => 3000,
                        "scrab_id"=> "57511"
                            ]);

$p60804 = DB::table("productos")->where("name","Piña")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60804,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1930,
                        "scrab_id"=> "3076",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60804,
                        "supermercado_id"=> $carrefour,
                        "peso" => 2500,
                        "scrab_id"=> "R-521032201",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60804,
                        "supermercado_id"=> $eci,
                        "peso" => 1800,
                        "scrab_id"=> "0110118109500019",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60804,
                        "supermercado_id"=> $dia,
                        "peso" =>  2000,
                        "scrab_id"=> "190710",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60804,
                        "supermercado_id"=> $eroski,
                        "peso" => 1500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/5848726-pina-de-centro-america-pieza-al-peso-apox-15-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60804,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1800,
                        "scrab_id"=> "59024"
                            ]);

$p60901 = DB::table("productos")->where("name","Almendras crudas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60901,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  200,
                        "scrab_id"=> "23575",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60901,
                        "supermercado_id"=> $carrefour,
                        "peso" => 200,
                        "scrab_id"=> "R-VC4AECOMM-104328",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60901,
                        "supermercado_id"=> $eci,
                        "peso" => 150,
                        "scrab_id"=> "0110118144100080",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60901,
                        "supermercado_id"=> $dia,
                        "peso" =>  125,
                        "scrab_id"=> "253837",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60901,
                        "supermercado_id"=> $eroski,
                        "peso" => 200,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12194650-almendras-crudas-repeladas-eroski-tarrina-185-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60901,
                        "supermercado_id"=> $alcampo,
                        "peso" => 150,
                        "scrab_id"=> "521841"
                            ]);

$p60902 = DB::table("productos")->where("name","Avellanas tostadas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60902,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  200,
                        "scrab_id"=> "34025",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60902,
                        "supermercado_id"=> $carrefour,
                        "peso" => 225,
                        "scrab_id"=> "R-prod1070735",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60902,
                        "supermercado_id"=> $eci,
                        "peso" => 150,
                        "scrab_id"=> "0110118003200054",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60902,
                        "supermercado_id"=> $dia,
                        "peso" =>  200,
                        "scrab_id"=> "125616",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60902,
                        "supermercado_id"=> $eroski,
                        "peso" => 150,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12194775-avellanas-tostadas-eroski-tarrina-150-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60902,
                        "supermercado_id"=> $alcampo,
                        "peso" => 175,
                        "scrab_id"=> "521924"
                            ]);

$p60903 = DB::table("productos")->where("name","Cacahuetes fritos")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60903,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  250,
                        "scrab_id"=> "34820",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60903,
                        "supermercado_id"=> $carrefour,
                        "peso" => 200,
                        "scrab_id"=> "R-VC4AECOMM-513752",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60903,
                        "supermercado_id"=> $eci,
                        "peso" => 150,
                        "scrab_id"=> "0110118003000165",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60903,
                        "supermercado_id"=> $dia,
                        "peso" =>  250,
                        "scrab_id"=> "23066",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60903,
                        "supermercado_id"=> $eroski,
                        "peso" => 160,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/25285016-cacahuete-tostado-sin-sal-eroski-bolsa-160-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60903,
                        "supermercado_id"=> $alcampo,
                        "peso" => 500,
                        "scrab_id"=> "522700"
                            ]);

$p60904 = DB::table("productos")->where("name","Pistachos tostados")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60904,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  250,
                        "scrab_id"=> "86202",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60904,
                        "supermercado_id"=> $carrefour,
                        "peso" => 200,
                        "scrab_id"=> "R-625334196",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60904,
                        "supermercado_id"=> $eci,
                        "peso" => 175,
                        "scrab_id"=> "0110118003400167",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60904,
                        "supermercado_id"=> $dia,
                        "peso" =>  250,
                        "scrab_id"=> "271642",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60904,
                        "supermercado_id"=> $eroski,
                        "peso" => 175,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/21834460-pistacho-tostado-sin-sal-eroski-bolsa-175-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60904,
                        "supermercado_id"=> $alcampo,
                        "peso" => 250,
                        "scrab_id"=> "524521"
                            ]);

$p60905 = DB::table("productos")->where("name","Nueces peladas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60905,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  200,
                        "scrab_id"=> "34024",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60905,
                        "supermercado_id"=> $carrefour,
                        "peso" => 200,
                        "scrab_id"=> "R-521003605",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60905,
                        "supermercado_id"=> $eci,
                        "peso" => 150,
                        "scrab_id"=> "0110118004100071",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p60905,
                        "supermercado_id"=> $dia,
                        "peso" =>  200,
                        "scrab_id"=> "214775",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60905,
                        "supermercado_id"=> $eroski,
                        "peso" => 175,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/4171013-nuez-mondada-eroski-bolsa-175-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p60905,
                        "supermercado_id"=> $alcampo,
                        "peso" => 200,
                        "scrab_id"=> "523877"
                            ]);

$p70101 = DB::table("productos")->where("name","Acelgas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70101,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  800,
                        "scrab_id"=> "69698",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70101,
                        "supermercado_id"=> $carrefour,
                        "peso" => 800,
                        "scrab_id"=> "R-521032289",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70101,
                        "supermercado_id"=> $eci,
                        "peso" => 750,
                        "scrab_id"=> "0110118166800674",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70101,
                        "supermercado_id"=> $dia,
                        "peso" =>  750,
                        "scrab_id"=> "215330",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70101,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14298350-acelga-euskal-baserri-manojo-500-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70101,
                        "supermercado_id"=> $alcampo,
                        "peso" => 750,
                        "scrab_id"=> "56014"
                            ]);

$p70102 = DB::table("productos")->where("name","Ajos")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70102,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  400,
                        "scrab_id"=> "69298",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70102,
                        "supermercado_id"=> $carrefour,
                        "peso" => 500,
                        "scrab_id"=> "R-VC4AECOMM-076258",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70102,
                        "supermercado_id"=> $eci,
                        "peso" => 500,
                        "scrab_id"=> "0110118176102806",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70102,
                        "supermercado_id"=> $dia,
                        "peso" =>  400,
                        "scrab_id"=> "171596",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70102,
                        "supermercado_id"=> $eroski,
                        "peso" => 400,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15380470-ajo-blanco-malla-400-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70102,
                        "supermercado_id"=> $alcampo,
                        "peso" => 500,
                        "scrab_id"=> "57097"
                            ]);

$p70103 = DB::table("productos")->where("name","Apio")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70103,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  660,
                        "scrab_id"=> "69275",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70103,
                        "supermercado_id"=> $carrefour,
                        "peso" => 500,
                        "scrab_id"=> "R-521032335",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70103,
                        "supermercado_id"=> $eci,
                        "peso" => 600,
                        "scrab_id"=> "0110118166800666",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70103,
                        "supermercado_id"=> $dia,
                        "peso" =>  500,
                        "scrab_id"=> "21242",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70103,
                        "supermercado_id"=> $eroski,
                        "peso" => 600,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/13340575-apio-verde-local-pieza-al-peso-aprox-600-g/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70103,
                        "supermercado_id"=> $alcampo,
                        "peso" => 300,
                        "scrab_id"=> "56118"
                            ]);

$p70104 = DB::table("productos")->where("name","Cebolla tubo")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70104,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1000,
                        "scrab_id"=> "69089",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70104,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-521032276",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70104,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118176100768",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70104,
                        "supermercado_id"=> $dia,
                        "peso" =>  750,
                        "scrab_id"=> "191535",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70104,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/1934785-cebolla-blanca-buti-malla-1-kg/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70104,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "50139"
                            ]);

$p70105 = DB::table("productos")->where("name","Puerro")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70105,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  900,
                        "scrab_id"=> "69411",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70105,
                        "supermercado_id"=> $carrefour,
                        "peso" => 500,
                        "scrab_id"=> "R-prod223075",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70105,
                        "supermercado_id"=> $eci,
                        "peso" => 400,
                        "scrab_id"=> "0110118176102889",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70105,
                        "supermercado_id"=> $dia,
                        "peso" =>  500,
                        "scrab_id"=> "17230",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70105,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/6300933-puerro-euskal-baserri-manojo/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70105,
                        "supermercado_id"=> $alcampo,
                        "peso" => 420,
                        "scrab_id"=> "57265"
                            ]);

$p70106 = DB::table("productos")->where("name","Lechuga iceberg")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70106,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1,
                        "scrab_id"=> "68130",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70106,
                        "supermercado_id"=> $carrefour,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70106,
                        "supermercado_id"=> $eci,
                        "peso" => 1,
                        "scrab_id"=> "0110118165302359",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70106,
                        "supermercado_id"=> $dia,
                        "peso" =>  1,
                        "scrab_id"=> "11462",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70106,
                        "supermercado_id"=> $eroski,
                        "peso" => 1,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/71126-lechuga-iceberg-unidad/"
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70106,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1,
                        "scrab_id"=> "53037"
                            ]);

$p70107 = DB::table("productos")->where("name","Col lombarda")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70107,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1830,
                        "scrab_id"=> "69251",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70107,
                        "supermercado_id"=> $carrefour,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70107,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118120700069",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70107,
                        "supermercado_id"=> $dia,
                        "peso" =>  2000,
                        "scrab_id"=> "50666",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70107,
                        "supermercado_id"=> $eroski,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70107,
                        "supermercado_id"=> $alcampo,
                        "peso" => 2000,
                        "scrab_id"=> "55727"
                            ]);

$p70108 = DB::table("productos")->where("name","Zanahorias")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70108,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1000,
                        "scrab_id"=> "69586",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70108,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-fprod1410012",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70108,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118176400028",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70108,
                        "supermercado_id"=> $dia,
                        "peso" =>  1000,
                        "scrab_id"=> "11421",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70108,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/4501508-zanahoria-bolsa-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70108,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "73734"
                            ]);

$p70201 = DB::table("productos")->where("name","Tomate ensalada")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70201,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  250,
                        "scrab_id"=> "69937",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70201,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-530067024",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70201,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118107600050",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70201,
                        "supermercado_id"=> $dia,
                        "peso" =>  500,
                        "scrab_id"=> "110",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70201,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/14342687-tomate-de-ensalada-euskal-baserri-al-peso-compra-minima-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70201,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "57466"
                            ]);

$p70202 = DB::table("productos")->where("name","Calabacin")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70202,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  390,
                        "scrab_id"=> "69338",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70202,
                        "supermercado_id"=> $carrefour,
                        "peso" => NULL,
                        "scrab_id"=> NULL,
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70202,
                        "supermercado_id"=> $eci,
                        "peso" => 250,
                        "scrab_id"=> "0110118109000010",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70202,
                        "supermercado_id"=> $dia,
                        "peso" =>  475,
                        "scrab_id"=> "93",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70202,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/90712-calabacin-verde-al-peso-compra-minima-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70202,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "55376"
                            ]);

$p70203 = DB::table("productos")->where("name","Calabaza")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70203,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1440,
                        "scrab_id"=> "3388",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70203,
                        "supermercado_id"=> $carrefour,
                        "peso" => 2000,
                        "scrab_id"=> "R-VC4AECOMM-462664",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70203,
                        "supermercado_id"=> $eci,
                        "peso" => 800,
                        "scrab_id"=> "0110118165600869",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70203,
                        "supermercado_id"=> $dia,
                        "peso" =>  1600,
                        "scrab_id"=> "75926",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70203,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8523615-calabaza-cacahuete-pieza-al-peso-aprox-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70203,
                        "supermercado_id"=> $alcampo,
                        "peso" => 2500,
                        "scrab_id"=> "56119"
                            ]);

$p70204 = DB::table("productos")->where("name","Pepino")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70204,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  180,
                        "scrab_id"=> "69584",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70204,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-VC4AECOMM-451456",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70204,
                        "supermercado_id"=> $eci,
                        "peso" => 250,
                        "scrab_id"=> "0110118109100018",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70204,
                        "supermercado_id"=> $dia,
                        "peso" =>  1000,
                        "scrab_id"=> "272355",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70204,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/12862041-pepino-blanco-al-peso-compra-minima-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70204,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "75876"
                            ]);

$p70205 = DB::table("productos")->where("name","Pimiento verde freir")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70205,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  120,
                        "scrab_id"=> "69320",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70205,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-536001616",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70205,
                        "supermercado_id"=> $eci,
                        "peso" => 100,
                        "scrab_id"=> "0110118107400063",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70205,
                        "supermercado_id"=> $dia,
                        "peso" =>  400,
                        "scrab_id"=> "116",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70205,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/1867-pimiento-verde-italiano-al-peso-compra-minima-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70205,
                        "supermercado_id"=> $alcampo,
                        "peso" => 500,
                        "scrab_id"=> "55210"
                            ]);

$p70301 = DB::table("productos")->where("name","Champiñones")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70301,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  430,
                        "scrab_id"=> "69672",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70301,
                        "supermercado_id"=> $carrefour,
                        "peso" => 600,
                        "scrab_id"=> "R-fprod1220135",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70301,
                        "supermercado_id"=> $eci,
                        "peso" => 450,
                        "scrab_id"=> "0110118165800816",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70301,
                        "supermercado_id"=> $dia,
                        "peso" =>  430,
                        "scrab_id"=> "273421",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70301,
                        "supermercado_id"=> $eroski,
                        "peso" => 300,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17823097-champinon-blanco-bandeja-300-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70301,
                        "supermercado_id"=> $alcampo,
                        "peso" => 250,
                        "scrab_id"=> "54981"
                            ]);

$p70302 = DB::table("productos")->where("name","Setas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70302,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  250,
                        "scrab_id"=> "69653",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70302,
                        "supermercado_id"=> $carrefour,
                        "peso" => 250,
                        "scrab_id"=> "R-fprod1220121",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70302,
                        "supermercado_id"=> $eci,
                        "peso" => 200,
                        "scrab_id"=> "0110118165801657",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70302,
                        "supermercado_id"=> $dia,
                        "peso" =>  200,
                        "scrab_id"=> "13337",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70302,
                        "supermercado_id"=> $eroski,
                        "peso" => 200,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17823121-seta-ostra-bandeja-200-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70302,
                        "supermercado_id"=> $alcampo,
                        "peso" => 150,
                        "scrab_id"=> "780316"
                            ]);

$p70401 = DB::table("productos")->where("name","Alubia blanca")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70401,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1000,
                        "scrab_id"=> "5124",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70401,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-740822685",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70401,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118006301610",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70401,
                        "supermercado_id"=> $dia,
                        "peso" =>  1000,
                        "scrab_id"=> "154",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70401,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/300210-alubia-blanca-larga-eroski-paquete-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70401,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "11796"
                            ]);

$p70402 = DB::table("productos")->where("name","Garbanzos")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70402,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1000,
                        "scrab_id"=> "5214",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70402,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-536500289",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70402,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118008200844",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70402,
                        "supermercado_id"=> $dia,
                        "peso" =>  1000,
                        "scrab_id"=> "155",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70402,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/300293-garbanzo-extra-eroski-basic-paquete-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70402,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "11790"
                            ]);

$p70403 = DB::table("productos")->where("name","Lentejas")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70403,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1000,
                        "scrab_id"=> "5325",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70403,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-536500291",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70403,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110118007701198",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70403,
                        "supermercado_id"=> $dia,
                        "peso" =>  1000,
                        "scrab_id"=> "291145",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70403,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/309575-lenteja-eroski-basic-paquete-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70403,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "11793"
                            ]);

$p70501 = DB::table("productos")->where("name","Alcachofa troceada")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70501,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  240,
                        "scrab_id"=> "16039",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70501,
                        "supermercado_id"=> $carrefour,
                        "peso" => 240,
                        "scrab_id"=> "R-521016439",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70501,
                        "supermercado_id"=> $eci,
                        "peso" => 240,
                        "scrab_id"=> "0110118021800737",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70501,
                        "supermercado_id"=> $dia,
                        "peso" =>  240,
                        "scrab_id"=> "276527",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70501,
                        "supermercado_id"=> $eroski,
                        "peso" => 175,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/15927635-alcachofa-1012-frutos-eroski-frasco-175-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70501,
                        "supermercado_id"=> $alcampo,
                        "peso" => 165,
                        "scrab_id"=> "882438"
                            ]);

$p70502 = DB::table("productos")->where("name","Alubias en bote")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70502,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  400,
                        "scrab_id"=> "26019",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70502,
                        "supermercado_id"=> $carrefour,
                        "peso" => 400,
                        "scrab_id"=> "R-521005493",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70502,
                        "supermercado_id"=> $eci,
                        "peso" => 400,
                        "scrab_id"=> "0110118007300652",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70502,
                        "supermercado_id"=> $dia,
                        "peso" =>  400,
                        "scrab_id"=> "1233",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70502,
                        "supermercado_id"=> $eroski,
                        "peso" => 400,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/336164-alubia-blanca-cocida-eroski-basic-frasco-400-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70502,
                        "supermercado_id"=> $alcampo,
                        "peso" => 400,
                        "scrab_id"=> "24457"
                            ]);

$p70503 = DB::table("productos")->where("name","Champiñon laminado")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70503,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  180,
                        "scrab_id"=> "16618",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70503,
                        "supermercado_id"=> $carrefour,
                        "peso" => 230,
                        "scrab_id"=> "R-521005928",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70503,
                        "supermercado_id"=> $eci,
                        "peso" => 185,
                        "scrab_id"=> "0110118022300786",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70503,
                        "supermercado_id"=> $dia,
                        "peso" =>  185,
                        "scrab_id"=> "1666",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70503,
                        "supermercado_id"=> $eroski,
                        "peso" => 185,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2723237-champinon-laminado-eroski-basic-lata-185-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70503,
                        "supermercado_id"=> $alcampo,
                        "peso" => 185,
                        "scrab_id"=> "27573"
                            ]);

$p70504 = DB::table("productos")->where("name","Esparragos")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70504,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  205,
                        "scrab_id"=> "18562",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70504,
                        "supermercado_id"=> $carrefour,
                        "peso" => 325,
                        "scrab_id"=> "R-fprod1460151",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70504,
                        "supermercado_id"=> $eci,
                        "peso" => 110,
                        "scrab_id"=> "0110118023703053",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70504,
                        "supermercado_id"=> $dia,
                        "peso" =>  205,
                        "scrab_id"=> "4118",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70504,
                        "supermercado_id"=> $eroski,
                        "peso" => 110,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/5965801-esparrago-corto-grueso-eroski-frasco-110-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70504,
                        "supermercado_id"=> $alcampo,
                        "peso" => 250,
                        "scrab_id"=> "238088"
                            ]);

$p70505 = DB::table("productos")->where("name","Garbanzo cocido")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70505,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  400,
                        "scrab_id"=> "26029",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70505,
                        "supermercado_id"=> $carrefour,
                        "peso" => 400,
                        "scrab_id"=> "R-521005495",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70505,
                        "supermercado_id"=> $eci,
                        "peso" => 400,
                        "scrab_id"=> "0110118007000799",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70505,
                        "supermercado_id"=> $dia,
                        "peso" =>  400,
                        "scrab_id"=> "1232",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70505,
                        "supermercado_id"=> $eroski,
                        "peso" => 400,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/336750-garbanzos-cocidos-eroski-basic-frasco-400-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70505,
                        "supermercado_id"=> $alcampo,
                        "peso" => 400,
                        "scrab_id"=> "24455"
                            ]);

$p70506 = DB::table("productos")->where("name","Guisantes frescos")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70506,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  250,
                        "scrab_id"=> "16416",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70506,
                        "supermercado_id"=> $carrefour,
                        "peso" => 250,
                        "scrab_id"=> "R-758904356",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70506,
                        "supermercado_id"=> $eci,
                        "peso" => 250,
                        "scrab_id"=> "0110118024200463",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70506,
                        "supermercado_id"=> $dia,
                        "peso" =>  265,
                        "scrab_id"=> "265948",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70506,
                        "supermercado_id"=> $eroski,
                        "peso" => 280,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/17820515-guisante-muy-fino-eroski-basic-lata-280-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70506,
                        "supermercado_id"=> $alcampo,
                        "peso" => 250,
                        "scrab_id"=> "25760"
                            ]);

$p70507 = DB::table("productos")->where("name","Judía verde troceada")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70507,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  360,
                        "scrab_id"=> "16313",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70507,
                        "supermercado_id"=> $carrefour,
                        "peso" => 360,
                        "scrab_id"=> "R-521005920",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70507,
                        "supermercado_id"=> $eci,
                        "peso" => 360,
                        "scrab_id"=> "0110118042100364",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70507,
                        "supermercado_id"=> $dia,
                        "peso" =>  360,
                        "scrab_id"=> "13049",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70507,
                        "supermercado_id"=> $eroski,
                        "peso" => 350,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2811933-judia-verde-troceada-calidad-i-eroski-frasco-350-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70507,
                        "supermercado_id"=> $alcampo,
                        "peso" => 360,
                        "scrab_id"=> "22383"
                            ]);

$p70508 = DB::table("productos")->where("name","Maiz dulce")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70508,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  420,
                        "scrab_id"=> "16712",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70508,
                        "supermercado_id"=> $carrefour,
                        "peso" => 420,
                        "scrab_id"=> "R-VC4AECOMM-553244",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70508,
                        "supermercado_id"=> $eci,
                        "peso" => 285,
                        "scrab_id"=> "0110118049700042",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70508,
                        "supermercado_id"=> $dia,
                        "peso" =>  285,
                        "scrab_id"=> "1250",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70508,
                        "supermercado_id"=> $eroski,
                        "peso" => 285,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/870683-maiz-dulce-eroski-basic-lata-285-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70508,
                        "supermercado_id"=> $alcampo,
                        "peso" => 285,
                        "scrab_id"=> "28187"
                            ]);

$p70509 = DB::table("productos")->where("name","Tomate entero pelado")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70509,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  240,
                        "scrab_id"=> "16042",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70509,
                        "supermercado_id"=> $carrefour,
                        "peso" => 480,
                        "scrab_id"=> "R-VC4AECOMM-132074",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70509,
                        "supermercado_id"=> $eci,
                        "peso" => 480,
                        "scrab_id"=> "0110118027500737",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70509,
                        "supermercado_id"=> $dia,
                        "peso" =>  480,
                        "scrab_id"=> "5616",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70509,
                        "supermercado_id"=> $eroski,
                        "peso" => 390,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/316026-tomate-natural-entero-pelado-eroski-lata-390-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70509,
                        "supermercado_id"=> $alcampo,
                        "peso" => 480,
                        "scrab_id"=> "10066"
                            ]);

$p70510 = DB::table("productos")->where("name","Tomate triturado")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70510,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  400,
                        "scrab_id"=> "16044",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70510,
                        "supermercado_id"=> $carrefour,
                        "peso" => 390,
                        "scrab_id"=> "R-fprod1190604",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70510,
                        "supermercado_id"=> $eci,
                        "peso" => 400,
                        "scrab_id"=> "0110118027500729",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70510,
                        "supermercado_id"=> $dia,
                        "peso" =>  390,
                        "scrab_id"=> "326",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70510,
                        "supermercado_id"=> $eroski,
                        "peso" => 400,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/307892-tomate-triturado-eroski-basic-lata-400-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70510,
                        "supermercado_id"=> $alcampo,
                        "peso" => 400,
                        "scrab_id"=> "10090"
                            ]);

$p70511 = DB::table("productos")->where("name","Tomate frito tarro")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70511,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  560,
                        "scrab_id"=> "17108",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70511,
                        "supermercado_id"=> $carrefour,
                        "peso" => 550,
                        "scrab_id"=> "R-600805291",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70511,
                        "supermercado_id"=> $eci,
                        "peso" => 550,
                        "scrab_id"=> "0110118043502089",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70511,
                        "supermercado_id"=> $dia,
                        "peso" =>  550,
                        "scrab_id"=> "10677",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70511,
                        "supermercado_id"=> $eroski,
                        "peso" => 550,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/316216-tomate-frito-eroski-frasco-550-g-/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70511,
                        "supermercado_id"=> $alcampo,
                        "peso" => 560,
                        "scrab_id"=> "26530"
                            ]);

$p70512 = DB::table("productos")->where("name","Zanahoria rallada")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70512,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  250,
                        "scrab_id"=> "16752",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70512,
                        "supermercado_id"=> $carrefour,
                        "peso" => 150,
                        "scrab_id"=> "R-529916711",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70512,
                        "supermercado_id"=> $eci,
                        "peso" => 250,
                        "scrab_id"=> "0110118025601016",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70512,
                        "supermercado_id"=> $dia,
                        "peso" =>  180,
                        "scrab_id"=> "16543",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70512,
                        "supermercado_id"=> $eroski,
                        "peso" => 180,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/16041030-zanahoria-rallada-leyenda-frasco-180-g-/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70512,
                        "supermercado_id"=> $alcampo,
                        "peso" => 150,
                        "scrab_id"=> "58285"
                            ]);

$p70601 = DB::table("productos")->where("name","Patatas freir malla")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70601,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  3000,
                        "scrab_id"=> "69166",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70601,
                        "supermercado_id"=> $carrefour,
                        "peso" => 3000,
                        "scrab_id"=> "R-600709206",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70601,
                        "supermercado_id"=> $eci,
                        "peso" => 3000,
                        "scrab_id"=> "0110118176302935",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p70601,
                        "supermercado_id"=> $dia,
                        "peso" =>  2000,
                        "scrab_id"=> "248458",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70601,
                        "supermercado_id"=> $eroski,
                        "peso" => 3000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/19678283-patata-eusko-label-eroski-natur-malla-3-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p70601,
                        "supermercado_id"=> $alcampo,
                        "peso" => 3000,
                        "scrab_id"=> "57727"
                            ]);

$p80101 = DB::table("productos")->where("name","Azucar blanco")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80101,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  1000,
                        "scrab_id"=> "19897",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80101,
                        "supermercado_id"=> $carrefour,
                        "peso" => 1000,
                        "scrab_id"=> "R-VC4AECOMM-463155",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80101,
                        "supermercado_id"=> $eci,
                        "peso" => 1000,
                        "scrab_id"=> "0110120930500044",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80101,
                        "supermercado_id"=> $dia,
                        "peso" =>  1000,
                        "scrab_id"=> "81798",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80101,
                        "supermercado_id"=> $eroski,
                        "peso" => 1000,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/2453884-azucar-blanco-azucarera-paquete-1-kg/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80101,
                        "supermercado_id"=> $alcampo,
                        "peso" => 1000,
                        "scrab_id"=> "197879"
                            ]);

$p80201 = DB::table("productos")->where("name","Miel de flores")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80201,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  500,
                        "scrab_id"=> "15430",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80201,
                        "supermercado_id"=> $carrefour,
                        "peso" => 500,
                        "scrab_id"=> "R-521003512",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80201,
                        "supermercado_id"=> $eci,
                        "peso" => 500,
                        "scrab_id"=> "0110120640201511",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80201,
                        "supermercado_id"=> $dia,
                        "peso" =>  500,
                        "scrab_id"=> "133109",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80201,
                        "supermercado_id"=> $eroski,
                        "peso" => 500,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/6300669-miel-de-panal-cero-goteo-eroski-dosificador-500-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80201,
                        "supermercado_id"=> $alcampo,
                        "peso" => 500,
                        "scrab_id"=> "15136"
                            ]);

$p80301 = DB::table("productos")->where("name","Cafe molido Natural")->value("id");
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80301,
                        "supermercado_id"=> $mercadona,
                        "peso" =>  500,
                        "scrab_id"=> "11178",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80301,
                        "supermercado_id"=> $carrefour,
                        "peso" => 500,
                        "scrab_id"=> "R-fprod1280764",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80301,
                        "supermercado_id"=> $eci,
                        "peso" => 250,
                        "scrab_id"=> "0110120603901941",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id"=> $p80301,
                        "supermercado_id"=> $dia,
                        "peso" =>  500,
                        "scrab_id"=> "218159",
                        ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80301,
                        "supermercado_id"=> $eroski,
                        "peso" => 250,
                        "scrab_id"=> "https://supermercado.eroski.es/es/productdetail/8484214-cafe-molido-natural-eroski-basic-paquete-250-g/",
                            ]);
                    DB::table("supermercadoproductos")->insert([
                        "producto_id" => $p80301,
                        "supermercado_id"=> $alcampo,
                        "peso" => 250,
                        "scrab_id"=> "567673"
                            ]);
    }
}
