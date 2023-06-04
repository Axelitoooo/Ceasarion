<?php

// src/Form/PersonnaliteType.php

namespace App\Form;

use App\Entity\Personnalite;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\String\Slugger\SluggerInterface;

class PersonnaliteType extends AbstractType
{
    public function __construct(private readonly SluggerInterface $slugger)
    {
    }

    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', null, [
                'attr' => ['autofocus' => true],
                'label' => 'Name',
            ])
            ->add('description', TextareaType::class, [
                'attr' => ['rows' => 5],
                'label' => 'Description',
            ])
            ->add('dateNaissance', DateType::class, [
                'widget' => 'single_text',
                'label' => 'Date of Birth',
            ])
            ->add('dateMort', DateType::class, [
                'widget' => 'single_text',
                'required' => false,
                'label' => 'Date of Death',
            ])
            ->add('imageURL', null, [
                'label' => 'Image URL',
            ])
            ->addEventListener(FormEvents::SUBMIT, function (FormEvent $event) {
                /** @var Personnalite */
                $personnalite = $event->getData();
                if (null === $personnalite->getSlug() && null !== $personnalite->getName()) {
                    $personnalite->setSlug($this->slugger->slug($personnalite->getName())->lower());
                }
            });
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Personnalite::class,
        ]);
    }
}
