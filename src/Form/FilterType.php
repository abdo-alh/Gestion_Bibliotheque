<?php

namespace App\Form;

use App\Entity\Book;
use App\Entity\categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
class FilterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('categorie',EntityType::class,['class'=>categorie::class,'choice_label'=>'name'])
          //  ->add('submit',SubmitType::class,['label'=>'filtrer','attr' => ['class' => 'btn btn-danger'],])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Book::class,
           /* 'method'=>'get',
            'csrf_protection'=>false*/

        ]);
    }
}
