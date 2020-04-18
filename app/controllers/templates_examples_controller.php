<?php

class TemplatesExamplesController extends AppController
{

    public function info($view)
    {
        View::response($view);
    }

    public function pdf()
    {
        //Usa el tempalte 'pdf'
        View::template('pdf/mpdf');
        //Modifica el nombre del archivo a descargar
        $this->fileName = 'user-list';
        //Modifica el título del documento PDF en la cabecera
        $this->title = 'User List';
        $this->data = User::all();
        $this->download = false;
    }
}
