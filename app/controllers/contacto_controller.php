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

    public function __call($name, $params)
    {
        array_unshift($params, $name);
        View::select(implode('/', $params));
    }


    public function contacto() {
        if (Input::hasPost('contacto')) {
            $aDatos = Input::post('contacto');
            $respuesta = (new Contacto)->sendEmail($aDatos);
            switch ($respuesta) {
                case 1:
                    Flash::valid('Mensaje enviado correctamente');
                    break;
                case 2:
                    Flash::error('Mensaje NO enviado. Vuelva a probarlo más tarde');
                    break;
            }
        }
    }
}
