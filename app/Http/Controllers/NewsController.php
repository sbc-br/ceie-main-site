<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
    public function show()
    {
        $news = News::all();
        $pageData = $this->getIndexPageData();


        $variables = [

            'page'      => $pageData,
            'news'  =>  $news
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

        return view('news/news_' . $theNews->id, $variables);
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
            'author'            => 'SBC - Sociedade Brasileira de Computação',
            'welcomeMessage'    => 'Notícias'
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

    public function findAll()
    {
        $allNews = News::all();

        return response()->json($allNews);
    }

    public function find($id)
    {
        $singleNews = News::find($id);

        return response()->json($singleNews);
    }

    public function findLast($count)
    {
        $lastNews = News::findLast($count);

        return response()->json($lastNews);
    }
}
