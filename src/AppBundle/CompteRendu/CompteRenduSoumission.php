<?php
/**
 * @author      Guillaume-Rossignol <rossignolgui@free.fr>
 * @license     Apache 2.0
 */

namespace AppBundle\CompteRendu;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;

class CompteRenduSoumission extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre')
            ->add('contenu')
            ->add('presents')
            ->add('dateReunion')
            ->add('soumettre', SubmitType::class)
        ;
    }
}
