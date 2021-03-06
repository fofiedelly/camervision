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


class CategorieParentAdmin extends Admin{
    protected function configureFormFields(FormMapper $formMapper){
        $formMapper->
            add('nom','text',array(
                'label'=>'Entrez le nom de la categorie'

            ))
            ->add('code','text',array(
                'label'=>'Entrez une code unique sans espaces,sans caracteres speciaux!',
            ))
            ->add('description','textarea',array(
                'label'=>'Entrez une description de la categorie',

            ))

        ;
    }
    protected function configureDatagridFilters(DatagridMapper $datagridMapper){
        $datagridMapper->add('nom');
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