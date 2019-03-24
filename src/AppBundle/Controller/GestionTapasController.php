<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Tapa;

/**
 * @Route("/gestionTapas")
 */
class GestionTapasController extends Controller
{
    /**
     * @Route("/nuevaTapa", name="nuevaTapa")
     */
    public function nuevaTapaAction(Request $request)
    {
      $repository = $this->getDoctrine()->getRepository(Tapa::class);
      $tapas= $repository->findAll();
      
    
      return $this->render('frontal/index.html.twig', array('tapas'=>$tapas));
    }
    
}
