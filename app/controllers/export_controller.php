<?php

class ExportController extends AppController
{

    public function pdf()
    {
        //Usa el tempalte 'pdf'
        View::select('index', 'pdf');
        //Modifica el nombre del archivo a descargar
        $this->fileName = 'user-list';
        //Modifica el título del documento PDF en la cabecera
        $this->title = 'User List';
        $this->data = User::all();
        $this->download = false;
    }
}
