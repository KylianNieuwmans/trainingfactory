<?php
/**
 * Created by PhpStorm.
 * User: Kylian
 * Date: 5-6-2018
 * Time: 14:09
 */

namespace AppBundle\Form;


use AppBundle\Entity\Les;
use AppBundle\Entity\Persoon;
use AppBundle\Entity\Training;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LesType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('training', EntityType::class,[
                'label' => 'Training',
                'class' => Training::class,
                'choice_label' => 'beschrijving'
                ])
            ->add('tijd', TimeType::class)
            ->add('maxPersonen', IntegerType::class)
            ->add('locatie', TextType::class)
            ->add('datum', DateType::Class, [
                "format" => 'ddMMyyyy',
                "years" => range(2018, 1900, -1)
            ])
            ->add('Ok', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Les::class,
        ));
    }
}