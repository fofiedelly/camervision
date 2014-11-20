<?php

namespace Cmv\SiteBundle\Controller;

use Cmv\SiteBundle\Entity\Contact;
use Cmv\SiteBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\BrowserKit\Request;

class ContactController extends Controller
{

    public function contactAction()
    {
        $request = $this->get('request');
        $mot1='Nos';
        $mot2='Contacts';
        $description='Avez-vous besoin d\'une information? Contactez-nous soit avec nos
         numeros de telephones ou remplissez tout simplement notre formulaire de contact
         ';
        $contact = new Contact();
        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm(new ContactType($em),$contact);

        //traintement du formulaire
        $form->handleRequest($request);

        if($form->isValid()){
            $this->get('cmv_site.contact.manager')->envoyer($contact);

            $this->get('session')->getFlashBag()->add('contact_ok','Votre demande de contact a ete envoyee');
            return $this->redirect($this->generateUrl('cmv_site_contact'));
        }
        return $this->render('CmvSiteBundle:Contact:contact.html.twig',array(
            'mot1'=>$mot1,
            'mot2'=>$mot2,
            'description'=>$description,
            'form'=>$form->createView()
        ));

    }

}
