<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class apiController extends Controller
{
    public function list(){
        
    }

    public function listProducts()
    {
        $id = [0,1,2,3,4];
        $nombre = ["Papa","Plátano","Pizza","Hamburguesa","Gaseosa"];
        $precio = [100,200,300,400,500];
        $variaciones = [
            ["Criolla","Pastusa"],
            ["Verde","Amarillo"],
            ["Mexicana","Hawaiana"],
            ["Mixta","Sencilla"],
            ["Con gas","Sin gas"]
        ];
        $categoria = [
            "Mercado",
            "Comida",
            "Bebida"
        ];

        $list = [
            "Producto 1" => [
                "id" => $id[0],
                "nombre" => $nombre[0],
                "precio" => $precio[0],
                "variaciones" => $variaciones[0],
                "categoria" => $categoria[0]
            ],
            "Producto 2" => [
                "id" => $id[1],
                "nombre" => $nombre[1],
                "precio" => $precio[1],
                "variaciones" => $variaciones[1],
                "categoria" => $categoria[0]
            ],
            "Producto 3" => [
                "id" => $id[2],
                "nombre" => $nombre[2],
                "precio" => $precio[2],
                "variaciones" => $variaciones[2],
                "categoria" => $categoria[1]
            ],
            "Producto 4" => [
                "id" => $id[3],
                "nombre" => $nombre[3],
                "precio" => $precio[3],
                "variaciones" => $variaciones[3],
                "categoria" => $categoria[1]
            ],
            "Producto 5" => [
                "id" => $id[4],
                "nombre" => $nombre[4],
                "precio" => $precio[4],
                "variaciones" => $variaciones[4],
                "categoria" => $categoria[2]
            ],
        ];

        return json_encode(array(
            'status' => 200,
            'response' => array(
                $list
            )
        ));
    }

    public function product(Request $request,$ids)
    {

        $id = [0,1,2,3,4];
        $nombre = ["Papa","Plátano","Pizza","Hamburguesa","Gaseosa"];
        $precio = [100,200,300,400,500];
        $variaciones = [
            ["Criolla","Pastusa"],
            ["Verde","Amarillo"],
            ["Mexicana","Hawaiana"],
            ["Mixta","Sencilla"],
            ["Con gas","Sin gas"]
        ];
        $categoria = [
            "Mercado",
            "Comida",
            "Bebida"
        ];

        $list = [
            [
                "id" => $id[0],
                "nombre" => $nombre[0],
                "precio" => $precio[0],
                "variaciones" => $variaciones[0],
                "categoria" => $categoria[0]
            ],
            [
                "id" => $id[1],
                "nombre" => $nombre[1],
                "precio" => $precio[1],
                "variaciones" => $variaciones[1],
                "categoria" => $categoria[0]
            ],
            [
                "id" => $id[2],
                "nombre" => $nombre[2],
                "precio" => $precio[2],
                "variaciones" => $variaciones[2],
                "categoria" => $categoria[1]
            ],
            [
                "id" => $id[3],
                "nombre" => $nombre[3],
                "precio" => $precio[3],
                "variaciones" => $variaciones[3],
                "categoria" => $categoria[1]
            ],
            [
                "id" => $id[4],
                "nombre" => $nombre[4],
                "precio" => $precio[4],
                "variaciones" => $variaciones[4],
                "categoria" => $categoria[2]
            ],
        ];

        return json_encode(array(
            'status' => 200,
            'response' => array(
                $list[$ids]
            )
        ));
    }
}
