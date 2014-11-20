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
use Cmv\SiteBundle\Form\ImageType;


class ArticleAdmin extends Admin{
    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->
            add('titre','text',array(
                'label'=>'entrez le titre de l\'article',
            ))
        ->add('code','text',array(
                'label'=>'entrez un cote Unique pour l\'article',
            ))
        ->add('categorie','entity',array(
                'class'=>'Cmv\SiteBundle\Entity\Categorie',
                'property'=>'nom',

            ))
        ->add('description','textarea',array(
                'label'=>' Une courte description de votre article'
            ))
        ->add('contenu','textarea',array(
            'label'=>'Contenu de votre article:',

        ))
        ->add('etat','choice',array(
                'choices'=>array(
                    true=>'Realisation terminee',
                    false=>"Realisation en cours",

                ),
                'attr'=>array(
                    'rows'=>6
                ),
                'multiple'=>false,
            ))
        ->add('codeYoutube','text',array(
                'label'=>'Entrez le code YOutúbe de votre annonce',
                'required'=>false
            ))
        ->add('image','collection',array(
                'type'=>new ImageType(),
                'allow_add'=>true,
                'allow_delete'=>true,
                'required'=>false,

            ))

        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper){
        $datagridMapper->add('titre')
            ->add('code');
    }
    protected function configureListFields(ListMapper $listMapper){
        $listMapper->add('titre')

            ->add('_action','actions',array(
                'actions'=>array(
                    'view'=>array(),
                    'edit'=>array(),
                )
            ))
        ;
    }

}
