<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class MpdfController extends AppController
{

    public function index()
    {
        
    }

    public function pdf()
    {
        //Usa el tempalte 'pdf'
        View::template('pdf');
        //Modifica el nombre del archivo a descargar
        $this->fileName = 'listado-de-usuarios';
        //Modifica el título del documento PDF en la cabecera
        $this->title = 'Listado de usuarios';
        $this->data = User::all();
    }
}
