<?php

namespace Cmv\SiteBundle\Controller;

use Cmv\SiteBundle\Entity\Contact;
use Cmv\SiteBundle\Form\ContactType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ContactController extends Controller
{

    public function contactAction()
    {
        $mot1='Nos';
        $mot2='Contacts';
        $description='Avez-vous besoin d\'une information? Contactez-nous soit avec nos
         numeros de telephones ou remplissez tout simplement notre formulaire de contact
         ';
        $contact = new Contact();
        $em=$this->getDoctrine()->getManager();
        $form=$this->createForm(new ContactType($em),$contact);
        return $this->render('CmvSiteBundle:Contact:contact.html.twig',array(
            'mot1'=>$mot1,
            'mot2'=>$mot2,
            'description'=>$description,
            'form'=>$form->createView()
        ));

    }

}
