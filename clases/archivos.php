<?php
class Archivos
{
    //serialize
    static function SerializeObject($ruta, $objeto)
    {
        $ar = fopen("./" . $ruta, "a");
        fwrite($ar, serialize($objeto) . PHP_EOL);
        fclose($ar);
    }

    //unserialize
    static function DeserializeObject($ruta)
    {
        $list = array();
        $ar = fopen("./" . $ruta, "r");


        while (!feof($ar)) 
        {
            $objeto = unserialize(fgets($ar));
            if ($objeto != null) 
            {
                array_push($list, $objeto);
            }
        }
        fclose($ar);
        return $list;
    }

    //guardar en JSON
    static function SaveJson($ruta, $objeto)
    {
        $array = Archivos::TraerJson($ruta);
        if (isset($array)) 
        {
            $ar = fopen("./" . $ruta, "w");
            array_push($array, $objeto);
            fwrite($ar, json_encode($array));
            fclose($ar);
        }
        else 
        {
            $array2 = array();
            $ar = fopen("./" . $ruta, "w");
            array_push($array2, $objeto);
            fwrite($ar, json_encode($array2));
            fclose($ar);
        }
       
    }

    //lee en JSON
    static function LoadJson($ruta)
    {
        if (file_exists($ruta)) 
        {
            $ar = fopen("./" . $ruta, "r");
            $list = json_decode(fgets($ar));
            fclose($ar);
            return $list;
        }
        else
        {
            echo "El archivo no existe";
        }
    }
    //subir fotos
    static function SaveImagen($origen, $destino)
    {
        $random = rand(1000, 10000);
        $ext = ".png";
        $destinoEnd = $destino . $random;
        $subido = move_uploaded_file($origen, $destinoEnd);
    }
}
?>