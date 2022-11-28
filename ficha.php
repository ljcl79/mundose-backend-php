<?php

//Obtenemos los datos enviados
//POST
$data = $_POST;

//Creamos un archivo con los datos solo para validar que llegó todo bine

$estudiante = array('nombre'=>$data['nombre'],
                    'dni' => $data['dni'],
                    'telefono' => $data['telefono'],
                    'email' => $data['email'],
                    'observaciones' =>$data['observaciones']
);

$f = fopen('datos-estudiantes.txt','a');

if ($f) {
    fwrite($f,date('d-m-Y H:i:s')."\n");
    fwrite($f,json_encode($estudiante));
    fwrite($f,"**********************\n");
}


$salida = '

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ficha del Estudiante '.$estudiante['nombre'].'</title>
</head>

<body>
    <h1>Ficha de registro de Estudiante</h1>
    <div class="mb-3">
        <span>Nombre/Apellido: <strong>'.$estudiante['nombre'].'</strong></span>
    </div>
    <div class="mb-3">
        <span>DNI: <strong>'.$estudiante['dni'].'</strong></span>
    </div>
    <div class="mb-3">
        <span>Teléfono: <strong>'.$estudiante['telefono'].'</strong></span>
    </div>
    <div class="mb-3">
        <span>Email: <strong>'.$estudiante['email'].'</strong></span>
    </div>
    <div class="mb-3">
        <p>Observaciones:</p>
        <p>'.$estudiante['observaciones'].'</p>
    </div>
</body>

</html>';

echo $salida;