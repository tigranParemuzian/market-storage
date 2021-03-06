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

class CompanyAdmin extends Admin
{
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper

            ->tab('General')
                ->with('General')
                    ->add('name', null, array('label' => 'Name'))
                    ->add('address', null, array('label' => 'Address'))
                    ->add('phone')
                    ->add('hvhh')
                    ->add('regNumber')
                    ->add('directorName')
                    ->add('directorLastName')
                ->end()
            ->end()
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label' => 'Name'))
            ->add('address', null, array('label' => 'Address'))
            ->add('phone')
            ->add('hvhh')
            ->add('regNumber')
            ->add('directorName')
            ->add('directorLastName')
            ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('name')
            ->addIdentifier('address')
            ->addIdentifier('phone')
            ->addIdentifier('hvhh')
            ->addIdentifier('regNumber')
            ->addIdentifier('directorName')
            ->addIdentifier('directorLastName')
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
            ->add('name', null, array('label' => 'Name'))
            ->add('address', null, array('label' => 'Address'))
            ->add('phone')
            ->add('hvhh')
            ->add('regNumber')
            ->add('directorName')
            ->add('directorLastName')
        ;
    }
}

