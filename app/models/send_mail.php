<?php
class SendMail
{

    public static function send($data, $type = 'default')
    {

        $config = Config::get("mail.$type");

        // Enviamos el correo
        return mail(
            $config['to'],      // Correo de destino
            $config['subject'], // Asunto
            self::body(
                $data['nombre'],
                $data['email'],
                $data['mensaje']
            ),
            $config['headers']  // Cabezeras
        );
    }

    protected static function body($name, $email, $message)
    {
        // Definimos el cuerpo del mensaje
        $message = nl2br(h($message));
        $message = wordwrap($message, 70, "\r\n");
        return "Nombre: $name <hr>Correo : $email <hr>Mensaje : <br>$message";
    }
}
