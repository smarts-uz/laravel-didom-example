<?php

namespace App\Services;

use DiDom\Document;
use DiDom\Element;
use Whoops\Util\Misc;

class MiscellaneousService
{
    public static string $url = 'https://www.olx.uz/';

    public function startMisc()
    {
        $document = new Document('https://www.olx.uz/', true);
//        $document->preserveWhiteSpace();
//        $html = $document->loadHtml(MiscellaneousService::$url, true);
//        dd($document->html());
        $html = $document->find('.subcategories-list');
//        dump($html[0]->count('span'));

        $element = new Element('div');
        $element->setInnerHtml('<div class="main"></div>');
//        dump($element->matches('div.main'));

        $link = $document->find('li.fleft a');

        //dump( $link[0]->matches('a.link-relatedcategory'));

        dump($element->isElementNode());
        dump($element->isTextNode());
        dump($element->isCommentNode());


    }
}
