<?php

use Kumbia\ActiveRecord\Db;

/**
 * Test db connections
 *
 */
class TestController extends AppController
{

    public function before_filter()
    {
        //include_once dirname(APP_PATH).'/vendor/kumbia/activerecord/Db.php';
        Db::get('default')->query('
                CREATE TABLE IF NOT EXISTS test
                 (
                    id int PRIMARY KEY NOT NULL,
                    nombre VARCHAR(50) NOT NULL,
                    email VARCHAR(100) NOT NULL,
                    activo SMALLINT(1) DEFAULT (1)
                );'
        );
    }

    public function index()
    {

    }
}
