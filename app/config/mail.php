<?php

/**
 * KumbiaPHP Web Framework
 * Variables para envio de correo
 */
return [
    'default' => [
        /**
         * to: cuenta(s) de correo a donde se enviará los datos del formulario
         * con 2 ejemplos de usar env
         * 
         * Ex: 
         * user@example.com
         * user@example.com, anotheruser@example.com
         * User <user@example.com>
         * User <user@example.com>, Another User <anotheruser@example.com>
         */
        'to'   => getenv('APP_MAIL_TO') ?: 'example@example.com',
        //'to'   => $_ENV['APP_MAIL_TO'] ?? 'example@example.com',
        //'to'   => Model::method(), // devueltos desde un Modelo o clase
        /**
         * subject: Asunto del correo
         */
        'subject' => 'Formulario de la web',
        /**
         * Cabezeras html para el mail
         */
        'headers' => [
            'MIME-Version' => '1.0',
            'Content-Type' => 'text/html; charset=' . APP_CHARSET, // o directamente UTF-8
            /**
             * From: Nombre y email del emisor del correo
             * ex: 
             */
            'From'         => "Web <emisor@example.com>",
            //'Reply-To'   => 'webmaster@example.com',
            //'Cc'         => 'birthdayarchive@example.com',
            //'Bcc'        => 'birthdaycheck@example.com',
            //'X-Mailer'   => 'PHP/' . phpversion()
        ],
    ],
];
