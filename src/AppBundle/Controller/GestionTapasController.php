<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Tapa;
use AppBundle\Form\TapaType;

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
      // Contruye el formulario
      $form = $this->createForm(TapaType::class, $tapa);
      // Recoge la informacion
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          // Rellena la entidad
          $tapa = $form->getData();

          $file= $tapa->getFoto();
          $fileName = $this->generateUniqueFileName().'.'.$file->guessExtension();
          $file->move(
            $this->getParameter('fotos_directory'),
            $fileName
          );

          $tapa->setFoto($fileName);
          $tapa->setFechaCreacion(new \DateTime());
          // Persiste los datos
          $entityManager = $this->getDoctrine()->getManager();
          $entityManager->persist($tapa);
          $entityManager->flush();

          return $this->redirectToRoute('tapa', ['id' => $tapa->getId()]);
      }
      
    
      return $this->render('gestionTapas/nuevaTapa.html.twig', ['form' => $form->createView(),]);
    }

    /**
     * @return string
     */
    private function generateUniqueFileName()
    {
        // md5() reduces the similarity of the file names generated by
        // uniqid(), which is based on timestamps
        return md5(uniqid());
    }

    
    
}
