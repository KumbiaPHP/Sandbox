<?php

use Mpdf\Output\Destination;

/**
 * Controller por defecto si no se usa el routes
 *
 */
class MpdfController extends AppController
{

    public $page_title = 'Export PDF with mPDF';
    
    public function index()
    {
        
    }

    public function pdf($destination = null)
    {
        //Usa el tempalte 'pdf'
        View::template('pdf');
        //Modifica el nombre del archivo a descargar
        $this->fileName = 'listado-de-usuarios';
        //Modifica el título del documento PDF en la cabecera
        $this->title = 'Listado de usuarios';
        $this->data = User::all();
        $this->destination = $destination == 'download' ? Destination::DOWNLOAD : Destination::INLINE;
    }
}
