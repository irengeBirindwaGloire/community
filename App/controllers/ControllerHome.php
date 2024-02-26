<?php

namespace controllers;

use config\RenderView;

class ControllerHome
{
    public function index()
    {
        RenderView::render("course");
    }
}
