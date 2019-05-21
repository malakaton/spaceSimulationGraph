<?php

namespace SpaceSimulatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

class SimulationController extends Controller
{
    public function indexAction()
    {
        return $this->render('SpaceSimulatorBundle:Simulation:index.html.twig');
    }

    public function sendSimulationAction(Request $request) {
        $simulatorService = $this->container->get('simulator_service');

        return new JsonResponse(array(
            'result' => $simulatorService->addSimulationRequest($request->get('simulator')),
            'status' => 200
        ));
    }
}
