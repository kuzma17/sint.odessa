<?php

namespace Kuzma17\Breadcrumbs;

class BreadscrumbItem
{
    public $title;
    public $url;

    public function add($title, $url){
        $this->title = $title;
        $this->url = $url;
    }
}