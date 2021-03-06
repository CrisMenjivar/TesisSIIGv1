<?php

namespace MINSAL\CostosBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class UnidadesProductivasAdmin extends Admin
{
    protected $datagridValues = array(
        '_page' => 1, // Display the first page (default = 1)
        '_sort_order' => 'ASC', // Descendant ordering (default = 'ASC')
        '_sort_by' => 'codigo' // name of the ordered field (default = the model id field, if any)
    );

    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('codigo', null, array('label'=> $this->getTranslator()->trans('_codigo_')))
            ->add('nombre', null, array('label'=> $this->getTranslator()->trans('_nombre_')))
            ->add('establecimiento', null, array('label' => $this->getTranslator()->trans('_establecimiento_'),
                    'required' => true, 'expanded' => false,
                    'class' => 'CostosBundle:Estructura',
                    'query_builder' => function ($repository) {                        
                        return $repository->createQueryBuilder('e')
                                ->where('e.nivel = 1 ')
                                ->add('orderBy','e.nombre');
                    }))
        ;
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('codigo', null, array('label'=> $this->getTranslator()->trans('_codigo_')))
            ->add('nombre', null, array('label'=> $this->getTranslator()->trans('_nombre_')))
            ->add('establecimiento', null, array('label' => $this->getTranslator()->trans('_establecimiento_'),
                    'required' => true, 'expanded' => false,
                    'class' => 'CostosBundle:Estructura',
                    'query_builder' => function ($repository) {                        
                        return $repository->createQueryBuilder('e')
                                ->where('e.nivel = 1 ')
                                ->add('orderBy','e.nombre');
                    }))
        ;
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('codigo', null, array('label'=> $this->getTranslator()->trans('_codigo_')))
            ->add('nombre', null, array('label'=> $this->getTranslator()->trans('_nombre_')))
            ->add('establecimiento', null, array('label'=> $this->getTranslator()->trans('_establecimiento_')))
        ;
    }

    public function getBatchActions()
    {
        $actions = parent::getBatchActions();
        $actions['delete'] = null;
    }
}
