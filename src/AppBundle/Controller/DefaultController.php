<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use AppBundle\Entity\Morosos;

class DefaultController extends Controller
{
  /**
  * @Route("/", name="inicio")
  */
 public function inicioAction(Request $request)
 {
   $repository = $this->getDoctrine()->getRepository('AppBundle:Morosos');
   $values = $repository->findAll();
   return $this->render('default/listado.html.twig', array("morosos"=>$values));

}

/**
* @Route("/detalles/{id}", name="detalle")
*/
public function detalleAction($id)
{
  $repository = $this->getDoctrine()->getRepository('AppBundle:Morosos');
 $usuario = $repository ->find($id);
 if(!$usuario){
    return $this->render('default/error.html.twig', array("id_noEncontrado"=> $id));
 }else{
   return $this->render('default/detalle.html.twig', array("id"=>$usuario->getId(),
   "nombre"=>$usuario->getNombre(), "apellidos"=>$usuario->getApellidos(),
 "edad"=>$usuario->getEdad(), "calle"=>$usuario->getCalle(), "dinero"=>$usuario->getDinero(),
"telefono"=>$usuario->getTelefono()));
}

}

}
