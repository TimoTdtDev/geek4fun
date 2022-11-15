<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Accueil',
        ];

        return view('/common/header.php')
            .view('/pages/home/index.php', $data)
            .view('/common/footer.php');
    }
}
