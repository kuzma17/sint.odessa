<?php

namespace Kuzma17\Breadcrumbs\Contracts;


interface BreadcrumbsInterface
{
    public function add($title, $route);

    public function get();

}