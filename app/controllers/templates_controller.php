<?php

class TemplatesController extends AppController
{
    public function index()
    {
        $this->data = User::all();
    }

    public function get($template)
    {
        View::select(null, $template);
        $this->data = User::all();
    }
}
