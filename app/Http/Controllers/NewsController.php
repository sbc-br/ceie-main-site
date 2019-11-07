<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;
use Url;

class NewsController extends Controller
{
    public function show()
    {
        $pageData = $this->getIndexPageData();

        $variables = [

            'page'      => $pageData
        ];

        return view('news/index', $variables);
    }

    public function showByEndPoint($endPoint)
    {
        $theNews = News::findByEndPoint($endPoint);
        $pageData = $this->getNewsPageData($theNews);

        $variables = [

            'page'      => $pageData,
            'theNews'   => $theNews
        ];

        return view('news/news' . $theNews->id, $variables);
    }

    public function getIndexPageData()
    {
        return (object) [
            'charset'           => 'utf-8',
            'locale'            => app()->getLocale(),
            'url'               => url()->full(),
            'title'             => 'CEIE - Notícias',
            'description'       => 'Fique por dentro das últimas notícias da Comissão Especial de Informática na Educação',
            'keywords'          => 'CEIE, Notícias',
            'thumbnail'         => '',
            'siteName'          => 'CEIE - Comissão Especial de Informática na Educação',
            'author'            => 'SBC - Sociedade Brasileira de Computação'
        ];
    }

    public function getNewsPageData($theNews)
    {
        $data = $this->getIndexPageData();

        $data->title = $theNews->title;
        $data->description = $theNews->summary;
        $data->keywords = $theNews->keywords;
        $data->thumbnail = url()->asset('images/news/' . $theNews->id . '/thumbnail.jpg');

        return $data;
    }
}
