<?php

namespace App\Services;

use DiDom\Document;
use DiDom\Query;

class GeneralService
{
    public function search()
    {
        // CSS selector
        // $document = new Document('https://www.olx.uz', true);
        // $span = $document->find('.marginleft15');
        // foreach ($span as $el){
        //     dump($el->text());
        // }

        // XPath
        // $document = new Document('https://www.olx.uz', true);
        // $span = $document->find('//*[@id="nav-conversations"]/a/span', Query::TYPE_XPATH);
        // foreach ($span as $el){
        //     dump($el->text());
        // }

        //inside an element
        //  $document = new Document('https://www.olx.uz', true);
        // $span = $document->find('//*[@id="nav-conversations"]/a/i', Query::TYPE_XPATH);
        // foreach ($span as $el){
        //     dump($el->find()->text());
        // }
        //  dump($document->find('ul')[0]->first('ul.userbox')->xpath('//li')[0]->text());
    }

    public function verify()
    {
       // $document = new Document('https://www.olx.uz', true);
       // if ($document->has('.userbox ')) {
       //     dump('work');
       //     $item = $document->find('.userbox');
       //     //dump($item);
       //     foreach ($item as $el) {
       //         dump($el->text());
       //     }
       // }

       // if( count($elements = $document->find('.userbox')) > 0){
       //     dump('success');
       // };
    }

    public function searchInElement(){
        $document = new Document('https://www.olx.uz', true);
        $subCategories = $document->find('.subcategories-list')[0]->first('ul')->xpath('//li')[1]->text();
        dump($subCategories);
    }
}
