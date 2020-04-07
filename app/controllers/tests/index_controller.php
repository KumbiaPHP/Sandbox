<?php

class IndexController extends AppController
{

    public function index()
    {
        View::select(null, null);

        var_dump(Countries::all());
    }
}