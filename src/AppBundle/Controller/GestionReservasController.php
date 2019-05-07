<?php
namespace AppBundle\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Reserva;
use AppBundle\Entity\Usuario;
use AppBundle\Form\ReservaType;
/**
 * @Route("/reservas")
 */
class GestionReservasController extends Controller
{
  /**
   * @Route("/nueva", name="nuevaReserva")
   */
  public function nuevaReservaAction(Request $request)
  {

      $reserva = new Reserva();
      
      //Construyendo el formulario
      $form = $this->createForm(ReservaType::class,$reserva);
      $form->handleRequest($request);
      if ($form->isSubmitted() && $form->isValid()) {
          $usuario=$this->getUser();
          $reserva->setUsuario($usuario);
          //Almacenamos
          $em= $this->getDoctrine()->getManager();
          $em->persist($reserva);
          $em->flush();
          return $this->redirectToRoute('reservas');
      }
      return $this->render('gestionTapas/nuevaReserva.html.twig',array('form'=>$form->createView()));
  }
  /**
   * @Route("/reservas", name="reservas")
   */
  public function reservasAction(Request $request)
  {
    $repository = $this->getDoctrine()->getRepository(Reserva::class);
    $reservas = $repository->findByUsuario($this->getUser());
    return $this->render('gestion/reservas.html.twig',array("reservas"=>$reservas));
  }
  /**
   * @Route("/borrar/{id}", name="borrarReserva")
   */
  public function borrarReservaAction(Request $request,$id=null)
  {
    if($id)
    {
      //Busqueda de la reserva
      $repository = $this->getDoctrine()->getRepository(Reserva::class);
      $reserva = $repository->findByUsuario($this->getUser());
      //Borrado
      $em= $this->getDoctrine()->getManager();
      $em->remove($reserva);
      $em->flush();
    }
    return $this->redirectToRoute('reservas');
  }
}