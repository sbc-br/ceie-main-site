<?php

namespace App;

use DateTime;
use URL;

class News
{
    private static $allNewsData = [
        [
            'id' => 1,
            'title' => 'Lançamento de Livros',
            'summary' => 'No CBIE 2018, na quarta, 31/out, 18:00, haverá o lançamento da Série de Livro de Metodologia de Pesquisa',
            'keywords' => 'Livros, Educação, Pesquisa, CBIE',
            'publicationDate' => '29/10/2018',
            'endPoint' => 'lancamento-livros-ie-2018'
        ],
        [
            'id' => 2,
            'title' => 'CBIE 2018',
            'summary' => 'O CBIE 2018 será realizado nos dias 29 de outubro a 01 de novembro de 2018, no hotel Oásis Atlântico',
            'keywords' => 'CBIE, Congresso',
            'publicationDate' => '29/10/2018',
            'endPoint' => 'cbie-2018'
        ],
        [
            'id' => 3,
            'title' => 'Homenagem',
            'summary' => 'No último dia 4 de abril, a comunidade de Informática na Educação brasileira perdeu um',
            'keywords' => 'Alexandre Direne, Homenagem',
            'publicationDate' => '28/11/2017',
            'endPoint' => 'homenagem-prof-alexandre-direne'
        ],
        [
            'id' => 4,
            'title' => 'CBIE 2019',
            'summary' => 'O CBIE 2019 será realizado nos dias 11 a 14 de novembro em Brasília e congregará palestrantes',
            'keywords' => 'CBIE 2019, Computação, Diversidade, Inclusão, Inovação',
            'publicationDate' => '11/11/2019',
            'endPoint' => 'cbie-2019'
        ]
    ];

    public $id;
    public $title;
    public $summary;
    public $publicationDate;
    public $endPoint;
    public $keywords;

    public function __construct($singleNewsData)
    {
        $this->id = $singleNewsData['id'];
        $this->title = $singleNewsData['title'];
        $this->summary = $singleNewsData['summary'];
        $this->publicationDate = DateTime::createFromFormat('d/m/Y', $singleNewsData['publicationDate']);
        $this->endPoint = $singleNewsData['endPoint'];
        $this->keywords = $singleNewsData['keywords'];
        $this->thumbnail = URL::asset('images/news/'.$this->id.'/thumbnail.jpg');
    }

    public static function all()
    {
        $allNews = [];

        foreach (self::$allNewsData as $singleNewsData)
        {
            array_push($allNews, new News($singleNewsData));
        }

        usort($allNews, function($a, $b){
            return $b->publicationDate->getTimestamp() - $a->publicationDate->getTimestamp();
        });

        return $allNews;
    }

    public static function find($id)
    {
        $allNews = self::all();

        foreach ($allNews as $singleNews)
        {
            if ($singleNews->id == $id)
            {
                return $singleNews;
            }
        }
    }

    public static function findLast($count = 3)
    {
        $allNews = self::all();
        $lastNews = array_slice($allNews, 0, $count);

        return $lastNews;
    }

    public static function findByEndPoint($endPoint)
    {
        $allNews = self::all();

        foreach ($allNews as $singleNews)
        {
            if ($singleNews->endPoint == $endPoint)
            {
                return $singleNews;
            }
        }
    }
}
