<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use App\Entity\PdfEntity;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;


class PdfGenerator extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        $builder
            ->add('firstName', TextType::class, ['attr' => ['minlength' => 2, 'maxlength' => 30]])
            ->add('lastName', TextType::class, ['attr' => ['minlength' => 2, 'maxlength' => 30]])
            ->add('dateBorn', DateType::class, [
                'widget' => 'single_text',
                // 'data' => new \DateTime('01/01/1990')
                ])
            ->add('placeBorn', TextType::class, ['attr' => ['minlength' => 2, 'maxlength' => 50]])
            ->add('nationality', TextType::class, ['attr' => ['minlength' => 3, 'maxlength' => 50]])
            ->add('gender',ChoiceType::class,[ // à modifier
                    'choices' => [
                        'Masculin' =>'Masculin',
                        'Féminin' =>'Féminin',],
                    'expanded'=>true,
                    'multiple'=>false,
                    'choice_label' => false,
                    'data' => 'Masculin'
                ])
            ->add('address', TextType::class, ['attr' => ['minlength' => 2, 'maxlength' => 70]])
            ->add('job', TextType::class, ['attr' => ['minlength' => 2, 'maxlength' => 50]])
            ->add('dateControl', DateType::class , [
                'widget' => 'single_text',
                'data' => new \DateTime()])
            ->add('timeControl', TimeType::class , [
                    'input'  => 'datetime',
                    'widget' => 'choice',
                    'data' => new \DateTime()])
            // ->add('dateDepartureFlight', DateType::class, [ // à remplacer par l'API
                // 'widget' => 'single_text',
                // 'data' => new \DateTime()])
            // ->add('timeDepartureFlight', TimeType::class, [ // à remplacer par l'API
                // 'input'  => 'datetime',
                // 'widget' => 'choice',
                // 'data' => new \DateTime()]) 
            ->add('idFlight', TextType::class, ['attr' => ['minlength' => 5, 'maxlength' => 6]])
            // ->add('destinationFlight', TextType::class) // à remplacer par l'API
            ->add('idPassport', TextType::class, ['attr' => ['minlength' => 5, 'maxlength' => 30]])
            ->add('dateMaxValadidy', DateType::class, [
                'widget' => 'single_text',])
            ->add('countryPassport', TextType::class, ['attr' => ['minlength' => 3, 'maxlength' => 50]])
            ->add('nameVisa', TextType::class, ['attr' => ['minlength' => 2, 'maxlength' => 50]])
            ->add('typeVisa', ChoiceType::class, [
                'choices'  => [
                    'C' => 'C',
                    'D' => 'D',]])
            ->add('idVisa', TextType::class, ['attr' => ['minlength' => 5, 'maxlength' => 30]])
            ->add('dateDelevery', DateType::class, [
                'widget' => 'single_text',
                ])
            ->add('countryVisa', TextType::class, ['attr' => ['minlength' => 3, 'maxlength' => 50]])
            ->add('dateEntry', DateType::class, [
                'widget' => 'single_text',])
            ->add('typeEntry', ChoiceType::class, [
                'choices'  => [
                    'régulière' => 'régulière',
                    'irrégulière' => 'irrégulière',]]) 
            ->add('lenghtStay', ChoiceType::class, [
                'choices'  => [
                    'Oui' => '+ de 30 jours',
                    'Non' => '- de 30 jours',]])
            ->add('penality', IntegerType::class, ['attr' => ['minlength' => 1, 'maxlength' => 7]])
            ->add('userGrade', ChoiceType::class, [
                'choices'  => [
                    'MJR - Major' => 'MJR',
                    'B/C - Brigadier-Chef' => 'B/C',
                    'BG - Brigadier' => 'BG',
                    'S/B - Sous-Brigadier' => 'S/B',]])
            ->add('userFullName', TextType::class, ['attr' => ['minlength' => 2, 'maxlength' => 50]])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => PdfEntity::class,
        ]);
    }
}