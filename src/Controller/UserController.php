<?php

declare(strict_types=1); // tipagem forte do PHP

namespace App\Controller;

class UserController extends AbstractController
{

    public function add():void
    {
        $this->render('user/add');
    } 

    public function list():void
    {
        $this->render('user/list');
    }

}