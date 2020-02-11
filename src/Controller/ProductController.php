<?php


declare(strict_types=1); // tipagem forte do PHP

namespace App\Controller;

class ProductController extends AbstractController
{

    public function add():void
    {
        $this->render('product/add');
    } 

    public function list():void
    {
        $this->render('product/list');
    }

}