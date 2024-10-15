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
