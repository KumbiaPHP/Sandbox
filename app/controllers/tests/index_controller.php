<?php

class IndexController extends AppController
{

    public function index()
    {
        View::select(null, null);

        echo '<pre>', var_dump(Countries::all()), '</pre>';
    }
}