<?php

namespace App\Services;


use DiDom\Document;

class QuickStart
{
    public function quick(){
        $document = new Document('http://www.olx.uz/', true);

        $element = $document->find('div.item a.link');

        foreach($element as $item) {
            dump($item->text());
        }
    }

}
