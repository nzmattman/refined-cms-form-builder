<?php

namespace RefinedDigital\FormBuilder\Module\Fields;

class FormField_Number extends FormField {

    public function render()
    {
        return <<<'blade'
{!!
    html()
        ->input('number', $field->field_name, $value)
        ->attributes($field->attributes)        
!!}    
blade;
    }

}
