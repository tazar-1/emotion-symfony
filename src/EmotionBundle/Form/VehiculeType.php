<?php
/**
 * Created by PhpStorm.
 * User: Antoine.B
 * Date: 26/08/2017
 * Time: 01:55
 */


namespace EmotionBundle\Form;

use EmotionBundle\Entity\Vehicule;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class VehiculeType extends AbstractType
{

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options); // TODO: Change the autogenerated stub
        $builder
            ->add('marque', TextType::class,array('required' => false))
            ->add('model', TextType::class,array('required' => false))
            ->add('num_serie', TextType::class,array('required' => false))
            ->add('couleur', TextType::class,array('required' => false))
            ->add('villedepart', TextType::class,array('required' => false))
            ->add('image', TextType::class,array('required' => false))
            ->add('immatriculation', TextType::class,array('required' => false))
            ->add('nbkilometres', IntegerType::class,array('required' => false))
            ->add('prix_achat', IntegerType::class,array('required' => false))
            ->add('dateachat', DateType::class, [
                'required' => false,
                'widget' => 'single_text',
            ])
          ;

    }

}