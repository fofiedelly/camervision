<?php

namespace Cmv\SiteBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ImageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('image','sonata_media_type',array(
                    'provider'=>'sonata.media.provider.image',
                    'context'=>'default',
                    'validation_groups'=>array('Default','image'),
                    'attr'=>array(
                        'class'=>'image',
                    ),
                    'cascade_validation'=>true,
                    'required'=>false,)
            );


    }

    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Cmv\SiteBundle\Entity\Image'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'cmv_sitebundle_image';
    }
}