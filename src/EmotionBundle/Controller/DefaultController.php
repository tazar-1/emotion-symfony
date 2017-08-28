<?php

namespace EmotionBundle\Controller;

use EmotionBundle\Entity\Location;
use EmotionBundle\Entity\Users;
use EmotionBundle\Entity\Vehicule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use EmotionBundle\Form\VehiculeType;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function indexAction(Request $request)
    {
        if('POST' == $request->getMethod()){
            var_dump($request);
            $ville = $this->get('ville_depart');
            if(!$ville){$ville='0';}
            $date_dispo = $this->get('date_dispo');
            if(!$date_dispo){$date_dispo='0';}
            $date_fin = $this->get('date_fin_dispo');
            if(!$date_fin){$date_fin='0';}
            $nb_klm = $this->get('nb_kilometres');
            if(!$nb_klm){$nb_klm='0';}
            $this->FiltersAction($ville,$date_dispo,$date_fin,$nb_klm);
        }
        return $this->render('EmotionBundle:Default:index.html.twig');
    }

    /**
     *
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * InsertVehicul   =>    Insert Un Vehicule en Bdd (Function idem pour Users)
     * GetVehicule     =>    récupére 1 vehicule en fonction de l'id (Function idem pour Users)
     * GetAllVehicule  =>    Récupére tous les véhicule (Function idem pour Users)
     * RemoveVehicule  =>    Suprime 1 vehicule en fonction de l'id (Function idem pour Users)
     * UpdateVehicule  =>    Modifie un Vehicule en fonction de l'id (Function idem pour Users)
     * PageVehicule    =>    Affiche la page des Vehicule
     * Filters         =>    Créer une commande SQL en fonction des paramétre données
     * Presentation    =>    Affiche la page de présentation
     *
     */
    public function InsertVehiculeAction(Request $request){
        $vehicule = new Vehicule();
        $form = $this->createForm(VehiculeType::class,$vehicule);
        $form->handleRequest($request);
            if($request->getMethod() == 'POST'){
                if ($form->isSubmitted() && $form->isValid()) {
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($vehicule);
                    $em->flush();
                    return $this->redirectToRoute('home');
                }else{
                    throw new Exception('Une erreur est survenue lors de l\'envoie du formulaire');

                }
            }
        return $this->render('EmotionBundle:Form:add_vehicule.html.twig', array(
            'form' => $form->createView()));
    }

    public function getVehicule($id){
        if(!$id){
            throw new Exception('le parametre nest pas remplie');
        }
        $vehicule = $this->getDoctrine()->getRepository('EmotionBundle:Vehicule')->find($id);
        if (!$vehicule) {
            throw $this->createNotFoundException('Aucun Contrat n\'est trouvé pour lid :' . $id);
        }
        #Si Contrat trouver, je le retourne le nom
        return new Response($vehicule->getId());
    }

    public function getAllVehiculeAction(){
       $allvehicule = $this->getDoctrine()->getRepository('EmotionBundle:Vehicule')->findAll();
        return $allvehicule;
    }

    public function RemoveVehiculeAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EmotionBundle:Vehicule')->find($id);
        if (!$entity) {
            throw $this->createNotFoundException('Vehicule non trouvé.');
        }
        $em->remove($entity);
        $em->flush();
        return $this->redirect($this->generateUrl('home'));
    }

    public function UpdateVehiculeAction(Request $request, $id)
    {
        if (!$id) {
            throw $this->createNotFoundException('Aucune Vehicule trouvé');
        }
        $em = $this->getDoctrine()->getEntityManager();
        $vehicule = $em->getRepository('EmotionBundle:Vehicule')->find($id);
        if (!$vehicule) {
            throw $this->createNotFoundException('Ce Vehicule ne peut être modfié');
        }
        $form = $this->createForm(VehiculeType::class, $vehicule);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $em->flush();
            return $this->redirectToRoute('homepage');
        }
        return $this->render('EmotionBundle:Form:update_vehicule.html.twig', array(
            'form' => $form->createView(),
            'id' => $vehicule->getId(),
        ));

    }

    public function PageVehiculeAction(){
      $tabVehicule = $this->getAllVehiculeAction();
            return $this->render('EmotionBundle:Form:vehicule.html.twig', array(
                'TabVehicule' => $tabVehicule,
            ));
    }

    public function FiltersAction($param,$param2,$param3,$param4){
        if(!$param && !$param2 && !$param3 && !$param4 ){
            throw new Exception('Aucun parametres prix en comptes !');
        }
        $tabVehicule = $this->getDoctrine()->getManager()->getRepository('EmotionBundle:Vehicule')->FilterVehicule($param,$param2,$param3,$param4);
        return $this->render('EmotionBundle:Form:filters.html.twig', array(
            'TabVehicule'=> $tabVehicule ,
        ));
    }

    public function PresentationAction()
    {
        return $this->render('EmotionBundle:Default:about_us.html.twig');
    }
    /**
     * @param Request $request
     * @return \Symfony\Component\HttpFoundation\Response
     *
     * Insert Un User un Bdd
     */
    public function InsertUsersAction(Request $request){
        $users = new Users();
        $form = $this->createForm(VehiculeType::class,$users);
        $form->handleRequest($request);
        if($request->getMethod() == 'POST'){
            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($users);
                $em->flush();
                #return $this->redirectToRoute('emotion');
            }else{
                throw new Exception('Une erreur est survenue lors de l\'envoie du formulaire');
            }
        return $this->render('EmotionBundle:Form:vehicule.html.twig', array(
            'form' => $form->createView()));
    }
}

    //BATOU
    public function InsertLocationAction(Request $request){
        $Location = new Location();
        $Location->setIdVehicule(1);
        #$Location->setDateLocation('');
        #$Location->setRetourLocation('1');
        $Location->setPrixLocation('50');
        $Location->setIdUsers(1);
         $em = $this->getDoctrine()->getManager();
                $em->persist($Location);
                $em->flush();
        return $this->render('EmotionBundle:Form:add_location.html.twig');
    }

}
