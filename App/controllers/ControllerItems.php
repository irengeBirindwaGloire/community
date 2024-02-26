<?php

namespace controllers;

use config\RenderView;
use models\repositories\ItemRepository;

class ControllerItems
{
    private $itemRepository;
    public function __construct()
    {
        $this->itemRepository = new ItemRepository();
    }
    public function index()
    {
        $title = "Items";
        $items = $this->itemRepository->findAll();
        RenderView::render("items/list", compact("title", "items"));
    }

    public function detail()
    {
        $title = "Détail";
        $items = $this->itemRepository->findAll();
        RenderView::render("items/detail", compact("title", "items"));
    }
}
