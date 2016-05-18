<?php

/**
 * Created by PhpStorm.
 * User: developer-01
 * Date: 3/11/16
 * Time: 1:27 PM
 */
namespace AppBundle\Admin;

use AppBundle\Entity\Item;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class EnterExitAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->tab('General')
                ->with('General')
                    ->add('count', null, array('label' => 'Count'))
                    ->add('destinationStatus', 'choice',
                        array('label' => 'Destination Status',
                            'choices' => array( true => 'to', false => 'from')
                        )
                    )
                    ->add('destination', null, array('label' => 'Destination'))
                    ->add('product')
                    ->add('store')
                    ->add('market')
                ->end()
            ->end()
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('count')
            ->add('destinationStatus')
            ->add('destination')
            ->add('product')
            ->add('store')
            ->add('market')
            ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('count')
            ->addIdentifier('destinationStatus')
            ->add('destination')
            ->add('product')
            ->add('store')
            ->add('market')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )))
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('count')
            ->add('destinationStatus')
            ->add('destination')
            ->add('product')
            ->add('store')
            ->add('market')
        ;
    }
}

