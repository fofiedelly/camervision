<?php
/**
 * Created by PhpStorm.
 * User: fofiedelly
 * Date: 8/11/14
 * Time: 10:26 AM
 */

namespace Cmv\SiteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\Datagrid;
use Sonata\AdminBundle\Form\FormMapper;


class AccueilAdmin extends Admin{
    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->
            add('description','textarea',array(
                'label'=>'Description de la page',
            ))
            ->add('film1Titre','textarea',array(
                'label'=>'Titre du Premier film'
            ))
            ->add('film1Lien','text',array(
                    'label'=>'Le Code de la video Youtube'
            ))
            ->add('film1LienArticle','entity',array(
                'class'=>'Cmv\SiteBundle\Entity\Article',
                'property'=>'titre',
            ))

        // fin pour le premier block a l'ecran d'Accueil

            ->add('film1Description','textarea',array(
                'label'=>'Description du film 1'
            ))
            ->add('film2Titre','text',array(
                'label'=>'Titre du Premier film'
            ))
            ->add('film2Lien','text',array(
                'label'=>'Le Code de la video Youtube'
            ))
            ->add('film2Description','textarea',array(
                'label'=>'Description du film 1'
            ))
            ->add('film2LienArticle','entity',array(
                'class'=>'Cmv\SiteBundle\Entity\Article',
                'property'=>'titre'

            ))

            // fin pour le premier block a l'ecran d'Accueil

            ->add('film3Titre','text',array(
                'label'=>'Titre du Premier film'
            ))
            ->add('film3Lien','text',array(
                'label'=>'Le Code de la video Youtube'
            ))
            ->add('film3Description','textarea',array(
                'label'=>'Description du film 1'
            ))
            ->add('film3LienArticle','entity',array(
                'class'=>'Cmv\SiteBundle\Entity\Article',
                'property'=>'titre',

            ))
                ;
    }
    protected  function cconfigureDatagridFilters(DatagridMapper $datagridMapper){
        $datagridMapper->add('description');
    }
    protected  function configureListFields(ListMapper $listMapper){
        $listMapper->add('description')
            ->add('_action','actions',array(
                'actions'=>array(
                    'view'=>array(),
                    'edit'=>array(),
                )
            ));
    }

} 