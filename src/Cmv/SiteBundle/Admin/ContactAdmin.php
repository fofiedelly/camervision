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


class ContactAdmin extends Admin{
    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->
            add('nom','text',array(
                'label'=>'Entrez le nom de la categorie'

            ))
            ->add('email','text',array(
                'label'=>'Entrez une code unique sans espaces,sans caracteres speciaux!',
            ))
            ->add('telephone','textarea',array(
                'label'=>'Entrez une description de la categorie',

            ))
            ->add('categorieParent','entity',array(
                'class'=>'Cmv\SiteBundle\Entity\CategorieParent',
                'property'=>'nom',
                'multiple'=>'false',

            ))

        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper){
        $datagridMapper->add('nom')
        ->add('email')

        ;
    }
    protected function configureListFields(ListMapper $listMapper){
        $listMapper->add('nom')
            ->add('_action','actions',array(
                'actions'=>array(
                    'view'=>array(),
                    'edit'=>array(),
                )
            ));
    }

}