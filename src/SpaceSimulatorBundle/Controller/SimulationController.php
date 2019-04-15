<?php

namespace SpaceSimulatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SimulationController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpaceSimulatorBundle:Simulation:index.html.twig');
    }
}
