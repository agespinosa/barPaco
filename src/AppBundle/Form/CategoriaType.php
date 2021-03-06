<?php
namespace AppBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Ivory\CKEditorBundle\Form\Type\CKEditorType;
use Symfony\Component\Form\Extension\Core\Type\FileType;

class CategoriaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nombre', TextType::class)
            ->add('descripcion',  CKEditorType::Class)
            ->add('foto', FileType::class,  ['attr' => ['onchange' => 'onChange(event)']])
            ->add('save', SubmitType::class, ['label' => 'Crear Categoria']);
      
    }
}
?>