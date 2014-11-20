<?php
namespace Cmv\SiteBundle\Services;

use Cmv\SiteBundle\Entity\Contact;

/**
 * @author Delly Christian Fofie
 */
class ContactManager{
    private $_doctrine;
    private $_em;
    private $_mailer;

    public function __construct(\Swift_Mailer $mailer,$doctrine){
        $this->_doctrine=$doctrine;
        $this->_em=$this->_doctrine->getManager();
        $this->_mailer=$mailer;
    }
    public function envoyer(Contact $contact){
        $this->_em->persist($contact);
        $this->_em->flush();
        $this->sendMail($contact);
    }
    public function sendMail(Contact $contact){
        $mail = \Swift_Message::newInstance();

        $mail->setFrom($contact->getEmail())
            ->setTo('francis.meli@yahoo.fr')
            ->setSubject('Un message sur camervision')
            ->setBody($contact->getMessage())
            ->setContentType('text/html');

        $this->_mailer->send($mail);



    }
}