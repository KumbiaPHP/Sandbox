<?php
class Contacto
{

    public function sendEmail($aDatos)
    {

        $config = Config::get('mail.headers');

        // Definimos correo de destino
        $correo = $config["to"];

        // Definimos el asunto
        $asunto = $config["subject"];

        // Definimos la cabecera
        $cabecera  = 'MIME-Version: 1.0' . "\r\n";
        $cabecera .= 'Content-type: text/html; charset=' . $config["charset"] . "\r\n";
        $cabecera .= "From: " . $config["from_name"] . " <" . $config["from_email"] . ">\r\n";

        // Definimos el cuerpo del mensaje
        $mensaje  = "<br>Nombre: " . $aDatos["nombre"];
        $mensaje .= "<br>Correo : " . $aDatos["email"];
        $mensaje .= "<br>Mensaje : " . nl2br($aDatos["mensaje"]);

        // Enviamos el correo
        return mail($correo, $asunto, $mensaje, $cabecera);
    }
}
