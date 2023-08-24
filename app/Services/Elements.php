<?php

namespace App\Services;

use DiDom\Document;
use DiDom\Element;
use function Laravel\Prompts\text;

class Elements
{
    public static string $url = 'https://www.olx.uz/';

    public function getting()
    {
       $document = new Document(Elements::$url, true);
//       $el1 = $document->find('.item');
//       dump('tag name: '.$el1[0]->tagName());

//        $link = $document->find('a.link');
//        dump('parent name: '.$link[0]->parent()->getAttribute('class'));


        $item = $document->find('ul li.fleft')[1];

//        var_dump($item->previousSibling('li')->tagName());

//        var_dump($item->nextSibling('li')->parent()->tagName());

        $document->find('div.item');
        $child = $document->first('li');
//        dump( $child->child(1)->getAttribute('href'));
        $div10 = $document->find('div.subcategories-list');

//        dump($div10[1]->firstChild());
        dump($div10[1]->children(1)[1]->html());

    }
}
