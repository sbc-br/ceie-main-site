<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
use App\Portal;

class HomeController extends Controller
{
    public function show()
    {
        $lastNews = News::findLast(6);
        $ceiePortal = Portal::findByNameIgnoreCase('ceie');
        $rbiePortal = Portal::findByNameIgnoreCase('rbie');
        $pageData = $this->getPageData();

        $variables = [

            'page'  =>  $pageData,
            'news'  =>  $lastNews,
            'newsFixBorder' => [4],
            'ceiePortal' =>  $ceiePortal,
            'rbiePortal' =>  $rbiePortal
        ];

        return view('home', $variables);
    }

    public function getPageData()
    {
        return (object) [
            'charset'           => 'utf-8',
            'locale'            => app()->getLocale(),
            'url'               => url()->full(),
            'title'             => 'CEIE - Comissão Especial de Informática na Educação',
            'description'       => 'Portal de publicações da CEIE: fique por dentro das últimas notícias na área de informática na educação',
            'keywords'          => 'Informática, Educação, Computação',
            'thumbnail'         => url()->asset('images/thumbnail.jpg'),
            'siteName'          => 'CEIE - Comissão Especial de Informática na Educação',
            'author'            => 'SBC - Sociedade Brasileira de Computação',
            'welcomeMessage'    => 'Seja bem-vindo(a) ao portal da CEIE!'
        ];
    }
}
