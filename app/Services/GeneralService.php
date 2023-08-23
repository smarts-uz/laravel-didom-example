<?php

namespace App\Services;

use DiDom\Document;
use DiDom\Query;
use DiDom\Element;
use DOMElement;

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
    }

    //inside an element
    //  $document = new Document('https://www.olx.uz', true);
    // $span = $document->find('//*[@id="nav-conversations"]/a/i', Query::TYPE_XPATH);
    // foreach ($span as $el){
    //     dump($el->find()->text());
    // }
    //  dump($document->find('ul')[0]->first('ul.userbox')->xpath('//li')[0]->text());
    //}

    //public function verify()
    //{
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
    // }

    //public function searchInElement()
    //{
    //    $document = new Document('https://www.olx.uz', true);
    //    $subCategories = $document->find('.subcategories-list')[0]->first('ul')->xpath('//li')[1]->text();
    //    dump($subCategories);
    //}

    public function supportedSelectors()
    {
        // $document = new Document('https://www.olx.uz', true);
        // $document = new Document('https://cinerama.uz/', true);

        //tag
        //$element = $document->find('a');
        //dump('tagName: '.$element[0]->text());

        //class
        //$element = $document->find('.item');
        //dump('className'.$element[0]->text());

        // ID,
        //  $el = $document->find('#postNewAdLink')[0];
        //dump('id'.$el->text());

        // name
        //$name = $document->find('*[name]');

        //foreach ($name as $el){
        //     dump($el->text());
        // }

        //value of an attribute
        // $val = $document->find('a[href*=*]');
        // foreach ($val as $el){
        //     dump($el->text());
        //     dump('work2');
        // }

        // text of the links with "foo" class
        //  $link = $document->find('a.link ::text');
        //  foreach ($link as $el) {
        //      dump($el);
        //      dump('link');
        //  }

        // address and title of all the fields with "bar" class
        //  $link2 = $document->find('a.bar::attr(href|title)');
        //  foreach ($link2 as $el){
        //      dump($el);
        //      dump('=================');
        //  }
    }

//    public function output()
//    {
//        $document = new Document('https://www.olx.uz/', true);
//        $html2 =$document->find('.item');
//        $html = (string) $html2[0];
//
//        dump($html);
//        dump($html2[0]);
//    }

    public function createElement()
    {
        // Creating an instance of the class
        // $element = new Element('span', 'Hello');
        // dd($element->html());

        //  $attributes = ['name' => 'main', 'class' => 'main-class', 'id' => '111'];
        //  $element2 = new Element('div', 'This is a div', $attributes);
        // dd($element2->html());

        //  $domElement = new DOMElement('span', 'Hello my friend');

        //   $element3 = new Element($domElement);
        // dd($element3->html());

        //Using the method createElement
        // $document = new Document();
        //  $attributes2 = ['class' => 'text'];
        //  $element4 = $document->createElement('p', 'This is text', $attributes2);
        // dd($element4->html());
        // dd($element4->text());
    }
}
