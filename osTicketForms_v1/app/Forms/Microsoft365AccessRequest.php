<?php

namespace App\Forms;

use Kris\LaravelFormBuilder\Form;

class Microsoft365AccessRequest extends Form
{
    public function buildForm()
    {
        $this
            ->add('pesel', 'text', [
                'attr' => ['class' => 'form-control field-input'],
                'label' => 'Podaj numer PESEL'
            ])
            ->add('phoneNumber', 'text', [
                'attr' => ['class' => 'form-control field-input'],
                'label' => 'Podaj numer telefonu'
            ])
            ->add('m365login ', 'text', [
                'attr' => ['class' => 'form-control field-input'],
                'label' => 'Podaj login (ciągs przed @)'
            ])
            ->add('submit', 'submit', ['label' => 'Wyślji zgłoszenie'])
            ->add('clear', 'reset', ['label' => 'Wyczyść formularz']);


    }
}
