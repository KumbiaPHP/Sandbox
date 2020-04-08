<?php
/**
 * @see Controller nuevo controller
 */
require_once CORE_PATH . 'kumbia/controller.php';

/**
 * Controlador principal que heredan los controladores
 *
 * Todas las controladores heredan de esta clase en un nivel superior
 * por lo tanto los metodos aqui definidos estan disponibles para
 * cualquier controlador.
 *
 * @category Kumbia
 * @package Controller
 */
class AppController extends Controller
{

    // default page title
    public $page_title = 'KumbiaPHP Sandbox with examples';

    public $menu = 'index'; //para seleccionar el menu
    
    final protected function initialize()
    {

    }

    final protected function finalize()
    {
        $this->page_title .= ' - KumbiaPHP'; // Add suffix to the title
    }

}
