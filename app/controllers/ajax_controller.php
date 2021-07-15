<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class AjaxController extends AppController
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
        // show default 
    }

    public function hola()
    {
        if(Input::hasPost('name')) {
            $this->name = h(Input::post('name'));
            return;
        }
    }
}
