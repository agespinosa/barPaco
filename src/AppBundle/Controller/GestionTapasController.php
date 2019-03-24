<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Tapa;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

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
      $tapa = new Tapa();
      $form= $this->createFormBuilder($tapa)
                        ->add('nombre', TextType::class)
                        ->add('descripcion', TextType::class)
                        ->add('ingredientes', TextareaType::class)
                        ->getForm();;
      
    
      return $this->render('gestionTapas/nuevaTapa.html.twig', ['form' => $form->createView(),]);
    }

    
    
}
