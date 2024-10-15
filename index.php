<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Ruta al archivo .exe
$ruta_exe = 'test2.bat';

// Ejecutar el archivo .exe
exec($ruta_exe, $output, $return_var);

// Verificar si la ejecución fue exitosa
if ($return_var == 0) {
    echo "Ejecutando......";
} else {
    echo "Hubo un error al ejecutar";
}
?>    

</body>
</html>
