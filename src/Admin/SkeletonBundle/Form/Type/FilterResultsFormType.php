<?php

/*
 * Skeleton Bundle
 * This file is part of the Admin.
 *
 * (c) Victoria Lasso
 *
 */

namespace Admin\SkeletonBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FilterResultsFormType extends AbstractType {

    // Creating the filters form and the fields
    public function buildForm(FormBuilderInterface $builder, array $options) {

        $builder->add('tags', 'entity', array(
            'class' => 'Admin\TagBundle\Entity\Tag',
            'choice_label' => 'title',
            'expanded' => true,
            'multiple' => true,
            'label' => 'Tags',
            'required' => false,
                )
        );

        $builder->add('categories', 'entity', array(
            'class' => 'Admin\CategoryBundle\Entity\Category',
            'choice_label' => 'title',
            'expanded' => true,
            'multiple' => true,
            'label' => 'Categories',
            'required' => false,
                )
        );
    }

    public function getName() {
        return $this->getBlockPrefix();
    }

    // Define the name of the form to call it for rendering
    public function getBlockPrefix() {
        return 'filterresultsform';
    }
}
