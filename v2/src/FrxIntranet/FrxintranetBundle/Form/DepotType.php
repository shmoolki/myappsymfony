<?php

namespace FrxIntranet\FrxintranetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DepotType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('depotDate')
            ->add('depotNumMonth')
            ->add('depotMontant')
            ->add('depotPrime')
            ->add('depotFirstdeposit')
            ->add('depotPoucent')
            ->add('depotClient')
            ->add('depotPaye')
            ->add('depotUtil')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrxIntranet\FrxintranetBundle\Entity\Depot'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frxintranet_frxintranetbundle_depot';
    }
}
