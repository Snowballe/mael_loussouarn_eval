<?php

namespace App\Form;
use App\Entity\Personnes;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Config\SecurityConfig;

return static function (SecurityConfig $security){
    $security->firewall('main')
        ->formLogin()
        ->defaultTargetPath('PersonnesController');
};

return static function (SecurityConfig $security){

    $security->firewall('main')
        ->formLogin()
        ->alwaysUseDefaultTargetPath(true);
};

