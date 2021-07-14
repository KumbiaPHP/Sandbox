<?php

/**
 * Controller para el envio de un formulario de contacto básico
 */
class ContactoController extends AppController
{
    protected function before_filter()
    {
        // Si es AJAX enviar solo el view
        if (Input::isAjax()) {
            View::template(null);
        }
    }

    public function index()
    {
        if (Input::hasPost('contacto')) {
            $enviado = SendMail::send(Input::post('contacto'));

            if ($enviado) {
                Flash::valid('Mensaje enviado correctamente');
                return;
            }

            Flash::error('Mensaje NO enviado. Vuelva a probarlo más tarde.');
        }
    }
}
