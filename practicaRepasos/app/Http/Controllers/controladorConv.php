<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class controladorConv extends Controller
{

    public function convertir(Request $peticion)
    {
        $cantidad = $peticion->input('cantidad');
        $conversion = $peticion->input('conversion');
        $resultado = '';
    
        switch ($conversion) {
            case 'mb-a-gb':
                $resultado = $cantidad . ' MB son ' . ($cantidad / 1024) . ' GB';
                break;
            case 'gb-a-mb':
                $resultado = $cantidad . ' GB son ' . ($cantidad * 1024) . ' MB';
                break;
            case 'gb-a-tb':
                $resultado = $cantidad . ' GB son ' . ($cantidad / 1024) . ' TB';
                break;
            case 'tb-a-gb':
                $resultado = $cantidad . ' TB son ' . ($cantidad * 1024) . ' GB';
                break;
            default:
                $resultado = 'Conversión no válida';
                break;
        }
    
        return $resultado;
    }

}
