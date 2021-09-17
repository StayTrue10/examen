<?php

namespace App\Traits;

trait APITrait {
    public static function consultar($url, $param = '', $end = '') {
        try {
            $client = new \GuzzleHttp\Client();
            $peticion = $client->get($url.$param.$end);
            $respuesta = $peticion->getBody();
            $contenido = $respuesta->getContents();
            $resultado = json_decode($contenido, TRUE);
            return $resultado;
        }
        catch (Exception $e) {
            report($e);
        }
    }
}