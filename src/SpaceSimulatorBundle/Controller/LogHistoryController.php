<?php

namespace SpaceSimulatorBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class LogHistoryController extends Controller
{
    public function getLastHistoryRecordAction()
    {
        $em = $this->getDoctrine()->getManager();

        $row = $em->getRepository('SpaceSimulatorBundle:logHistory')->getLastID();

        return new JsonResponse(array('id' => $row['idMax'], 'status' => 200));
    }
}
