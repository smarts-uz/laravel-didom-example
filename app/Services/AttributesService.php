<?php

namespace App\Services;

use DiDom\Element;

class AttributesService
{
    public function start(){
        $element = new Element('div');
        $input = new Element('input');
        $element->setAttribute('name', 'username');
//        dump($element->html());

        $element->attr('class', 'container');
//        dump($element->html());


//        dump('input: '.$input->attr('name', 'inputName'));
//        dump('input: '.$input->setAttribute('class', 'inputClass'));
//        dump('input: '.$input->setAttribute('value', 'Some text2'));
//        dump('input: '.$input->setAttribute('type', 'submit'));

//        don't work
//        $input->name = 'username';

//        dump($input->getAttribute('value'));
        $value = $input->attr('value');
//        dump($value);

//        if ($element->hasAttribute('name')) {
//            dump('has');
//        }else{
//            dump("doesn't has");
//        }

//        if (isset($element->value)) {
//            dump(true);
//        }else{
//            dump(false);
//        }

//        dump($element->attr('name'));
//        $element->removeAttribute('name');
//        $element->removeAttribute('class');
//        dump($element->html());



    }
    public function __unset($element){
        $element = new Element('div');
        $element->setAttribute('name', 'username');
        unset($element->name);
        dump($element->html());
    }
}
