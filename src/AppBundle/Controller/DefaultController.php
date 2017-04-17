<?php

namespace AppBundle\Controller;

use AppBundle\CompteRendu\CompteRendu;
use AppBundle\CompteRendu\CompteRenduSoumission;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.root_dir').'/..').DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route ("/creation", name="creation")
     */
    public function creerCompteRenduAction(Request $request)
    {
        $compteRendu = new CompteRendu();
        $form = $this->createForm(CompteRenduSoumission::class, $compteRendu);
        return $this->render('default/creation.html.twig', [
            'form' => $form->createView(),
        ]);

    }
}
