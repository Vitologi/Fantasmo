<?php

// src/Fantasmo/ApiBundle/Controller/DemoController.php

namespace Fantasmo\ApiBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;

class DemoController extends FOSRestController
{
    public function getDemosAction()
    {
        $data = array("hello" => "world");
        $view = $this->view($data);
        return $this->handleView($view);
    }
}