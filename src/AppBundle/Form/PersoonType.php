<?php
/**
 * Created by PhpStorm.
 * User: Kylian
 * Date: 4-6-2018
 * Time: 12:18
 */

namespace AppBundle\Form;

use AppBundle\Entity\Persoon;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class PersoonType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('voornaam', TextType::class)
            ->add('tussenvoegsel', TextType::class)
            ->add('achternaam', TextType::class)
            ->add('adres', TextType::class)
            ->add('woonplaats', TextType::class)
            ->add('startdatum', DateType::Class, [
                "format" => 'ddMMyyyy',
                "years" => range(2018, 1900, -1)
            ])
            ->add('geboortedatum', DateType::Class, [
                "format" => 'ddMMyyyy',
                "years" => range(2018, 1900, -1)
            ])
            ->add('username', TextType::class)
            ->add('password', RepeatedType::class, array(
                'type' => PasswordType::class,
                'first_options'  => array('label' => 'Wachtwoord'),
                'second_options' => array('label' => 'Herhaal Wachtwoord'),
            ))
            ->add('Ok', SubmitType::class);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => Persoon::class,
        ));
    }
}