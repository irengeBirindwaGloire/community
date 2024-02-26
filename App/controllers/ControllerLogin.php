<?php

namespace controllers;

use config\RenderView;

class ControllerLogin
{
    public function newUser()
    {
        $title = "New";
        RenderView::render("login/create", compact("title"));
    }

    public function login()
    {
        die;
    }

    public function create()
    {
        die;
    }
}
