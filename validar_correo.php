<?php
// validar una direccion de corrreo electronico primer filtro contenga una sola vez el caracter @ segundo filtro el dominio que sea .com, .es, .org 
// cuando haces el explode te quedas con la segunda parte despues del @ 
// y vuelves hacer el explode y te quedas con la segunda parte que es el .com, .es o .org

function validarCorreo($correo) {
    if (substr_count($correo, '@') != 1) {
        return false;
    }

    $partes = explode('@', $correo);
    $dominioCompleto = $partes[1];

    $dominioPartes = explode('.', $dominioCompleto);

    $tld = ($dominioPartes);

    return in_array($tld, ['com', 'es', 'org']);
}

$correo = "usuario@dominio.com";
if (validarCorreo($correo)) {
    echo "El correo es válido.";
} else {
    echo "El correo es inválido.";
}
?>4