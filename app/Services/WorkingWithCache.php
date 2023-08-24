<?php

namespace App\Services;



use DiDom\Query;

class WorkingWithCache
{
    public function start(){
        $xpath    = Query::compile('h2.title');
        $xpath2 = Query::setCompiled(['h1' => '//h1']);
        $compiled = Query::getCompiled();



        var_dump($compiled);

    }
}
