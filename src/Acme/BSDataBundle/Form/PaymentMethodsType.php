<?php

namespace Acme\BSDataBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\Form\Tests\FormBuilderInterface;

class PaymentMethodsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id',null,array('label'=>'ID','read_only'=>true))
            ->add('Name',null,array('label'=>'Zahlungsart','read_only'=>true))
            ->add('Debitor',null,array('label'=>'Debitorkonto'))
            ->add('BankAccount',null,array('label'=>'Sachkonto'))
            ->add('payment',null,array('label'=>'Zahlungs Buchung','required'  => false,))
            ->add('invoice',null,array('label'=>'Rechungs Buchung','required'  => false,))
        ;
    }

    public function getName()
    {
        return 'acme_bsdatabundle_paymentmethodstype';
    }
}
