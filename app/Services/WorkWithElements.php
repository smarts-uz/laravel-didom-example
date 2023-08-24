<?php

namespace App\Services;

use DiDom\Document;
use DiDom\Element;

class WorkWithElements
{
    public function start()
    {
//        Comparing elements
        $element  = new Element('span', 'hello');
        $element2 = new Element('span', 'hello');

// bool(true)
//        var_dump($element2->is($element2));

// bool(false)
//        var_dump($element->is($element2));

//        Appending child elements
        $list = new Element('ul');
//        dump($list->html());
        $item = new Element('li', 'Item 1');
//        dump('item: '.$item->html());
        $list->appendChild($item);

        $items = [
            new Element('li', 'Item 2'),
            new Element('li', 'Item 3'),
        ];

        $list->appendChild($items);
        dump($list->html());

//        Adding a child element = Appending child elements

        $list2 = new Element('ul');
//        dump($list2->html());
        $item2 = new Element('li', 'Item 11');
        $items2 = [
            new Element('li', 'Item 22'),
            new Element('li', 'Item 33'),
        ];

       $list2->appendChild($item2);
        $list2->appendChild($items2);
        dump($list2->html());
    }
}
