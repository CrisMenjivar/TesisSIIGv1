<?php
namespace MINSAL\IndicadoresBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class EditorReportes extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
			->add('attachment1', 'file')	//Logo 1
			->add('titulo', 'textarea', array('attr' => array('required' => false,'placeholder' => 'Titulo del reporte', 'rows' => '4', 'cols' => '70')))
			->add('attachment2', 'file')	//Logo 2			
			->add('encabezado', 'textarea', array('attr' => array('placeholder' => 'Encabezado del reporte', 'rows' => '2', 'cols' => '70', 'maxlength'=>"90")));
						
			//->add('intro', 'textarea', array('attr' => array('placeholder' => 'Comentarios generales', 'rows' => '5', 'cols' => '120')))
			//->add('comentarios', 'textarea', array('attr' => array('placeholder' => 'Conclusiones', 'rows' => '13', 'cols' => '120')));
			//->add('pie', 'textarea', array('attr' => array('placeholder' => 'Pie de página', 'rows' => '4', 'cols' => '120')));
			/*->add('actions', 'form_actions');
			$builder->get('actions')
			->add('Generar PDF', 'submit');*/
    }

    public function getName()
    {
        return 'Reporte';
    }
}
