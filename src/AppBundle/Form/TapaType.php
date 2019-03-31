<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use AppBundle\Entity\Categoria;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class TapaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nombre', TextType::class)
            ->add('descripcion',  CKEditorType::Class)
            ->add('ingredientes', TextareaType::class)
            ->add('categoria', EntityType::class, [
                // looks for choices from this entity
                'class' => 'AppBundle:Categoria',            
            
                // used to render a select box, check boxes or radios
                // 'multiple' => true,
                // 'expanded' => true,
            ])
            ->add('foto', FileType::class,  ['attr' => ['onchange' => 'onChange(event)']])
            ->add('top')
            ->add('save', SubmitType::class, ['label' => 'Crear Tapa']);
      
    }
}
?>