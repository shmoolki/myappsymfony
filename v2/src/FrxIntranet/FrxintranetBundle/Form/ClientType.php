<?php

namespace FrxIntranet\FrxintranetBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ClientType extends AbstractType
{
        /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('clientNum')
            ->add('clientNom')
            ->add('clientTel')
            ->add('clientMail')
            ->add('clientSolde')
            ->add('clientAdresse')
            ->add('clientVille')
            ->add('clientComment')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FrxIntranet\FrxintranetBundle\Entity\Client'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'frxintranet_frxintranetbundle_client';
    }
}
