<?php

namespace Kuzma17\Breadcrumbs;


use Kuzma17\Breadcrumbs\Contracts\BreadcrumbsInterface;

class Breadcrumbs implements BreadcrumbsInterface
{
    protected $items;

    public function add($title, $route)
    {
        $item = new BreadscrumbItem();
        $item->add($title, $route);
        $this->items[] = $item;
    }

    public function get(){
        return $this->items;
    }

}