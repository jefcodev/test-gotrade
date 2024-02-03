<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class EstaController extends Controller
{
    public function create()
    {

        return view('establecimiento.create');
    }
    public function store(Request $request)
    {

        $datosEstaticos = [
            'id_provincia' => 'b4e2f21c-7df4-4b4a-a110-f8beeed5794e',
            'id_ciudad' => 'b1fd5659-18c9-498e-9935-2e33b24205ff',
            'id_zona' => '98b07509-3eea-4e74-8e74-f3f36649244f',
            'id_canal' => '4fce0b22-4990-4a20-ba91-adfe9af39215',
            'id_subcanal' => '94e3df1e-38cc-4727-9d3e-a375b4711a4a',
            'id_cadena' => '7a086f5d-e039-4c1e-b391-b8aae45b547d',
            'en_ruta' => '1',
            'cliente_proyecto_id' => '568cf8ce-a2d6-411b-85bf-d9678c2a8c4b'
        ];

        // Obtener los datos del formulario
        $datosFormulario = array_merge($request->only([
            'titulo',
            'nombre',
            'direccion_manzana',
            'direccion_calle_principal',
            'direccion_numero',
            'direccion_transversal',
            'direccion_referencia',
            'administrador',
            'telefonos_contacto',
            'email_contacto',
            'ubicacion',
        ]), $datosEstaticos);

        // URL del servicio
        $apiBaseUrl = env('API_BASE_URL');
        $urlServicio = "$apiBaseUrl/establecimientos/agregar-establecimiento" ;
        $token = session('token');

        $respuesta = Http::withHeaders([
            'Authentication' => $token,
        ])->post($urlServicio, $datosFormulario);

        if ($respuesta->successful()) {
            $respuestaServicio = $respuesta->json();
            $mensaje = $respuestaServicio['message'];
            
            
            return redirect()->route('establecimiento')->with('mensaje', $mensaje);

        } else {

            $errorRespuesta = $respuesta->json();
            $mensaje = $errorRespuesta['message'];
            
             return redirect()->route('establecimiento')->with('mensaje', $mensaje);
            //dd($errorRespuesta);

        }
    }
}
