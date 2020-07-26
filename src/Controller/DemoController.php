<?php

namespace App\Controller;

use App\SecondaryPort\ParameterRepositoryInterface;
use App\UseCase\SendMultipleSignalPackets;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DemoController extends AbstractController
{
    /**
     * @Route("/", name="demo")
     */
    public function index(ParameterRepositoryInterface $parameterRepository)
    {
        $parameters = $parameterRepository->getParameters();
        $results = array();
        $sendMultipleSignalPackets = new SendMultipleSignalPackets();
        foreach ($parameters as $parameter) {
            $results[] = array(
                'steps' => $parameter[0],
                'sequence' => $parameter[1],
                'result' => $sendMultipleSignalPackets($parameter[1], $parameter[0])
            );
        }

        return $this->render('demo/index.html.twig', [
            'controller_name' => 'DemoController',
            'results' => $results
        ]);
    }
}
