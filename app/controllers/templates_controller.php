<?php

class TemplatesController extends AppController
{
    public function index()
    {
    }

    public function get($template)
    {
        View::select(null, $template);
        $this->data = User::all();
    }
}
