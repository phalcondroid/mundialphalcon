<?php

class OtroController extends ControllerBase
{

    public function indexAction()
    {
        $this->view->setVar("name", "otro");
        $this->view->name = "otro";
    }

    public function otroAction()
    {

    }
}
