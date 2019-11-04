<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
use Url;

class NewsController extends Controller
{
    public function show()
    {
        return "TODO: implement!!";
    }

    public function showByEndPoint($endPoint)
    {
        $theNews = News::findByEndPoint($endPoint);
        $pageData = $this->getPageData($theNews);

        $variables = [

            'page'      => $pageData,
            'theNews'   => $theNews
        ];

        return view('news/news' . $theNews->id, $variables);
    }

    public function getPageData($theNews)
    {
        return (object) [
            'charset'           => 'utf-8',
            'locale'            => app()->getLocale(),
            'url'               => url()->full(),
            'title'             => $theNews->title,
            'description'       => $theNews->summary,
            'keywords'          => $theNews->keywords,
            'thumbnail'         => url()->asset('images/news/' . $theNews->id . '/thumbnail.jpg'),
            'siteName'          => 'CEIE - Comissão Especial de Informática na Educação',
            'author'            => 'SBC - Sociedade Brasileira de Computação'
        ];
    }
}
