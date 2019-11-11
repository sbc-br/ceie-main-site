<?php

namespace App;

use DateTime;
use URL;

class News
{
    private static $news = [
        [
            'id' => 2,
            'title' => 'Lançamento de Livros',
            'summary' => 'No CBIE 2018, na quarta, 31/out, 18:00, haverá o lançamento da Série de Livro de Metodologia de Pesquisa',
            'keywords' => 'Livros, Educação, Pesquisa, CBIE',
            'publicationDate' => '29/10/2018',
            'endPoint' => 'lancamento-livros-ie-2018'
        ],
        [
            'id' => 1,
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
        ]
    ];

    public $id;
    public $title;
    public $summary;
    public $publicationDate;
    public $endPoint;
    public $description;
    public $keywords;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->summary = $data['summary'];
        $this->publicationDate = DateTime::createFromFormat('d/m/Y', $data['publicationDate']);
        $this->endPoint = $data['endPoint'];
        $this->keywords = $data['keywords'];
        $this->thumbnail = URL::asset('images/news/'.$this->id.'/thumbnail.jpg');
    }

    private static function getData()
    {
        $data = [];

        foreach (self::$news as $theNews)
        {
            array_push($data, new News($theNews));
        }

        usort($data, function($a, $b){
            return $b->publicationDate->getTimestamp() - $a->publicationDate->getTimestamp();
        });

        return $data;
    }

    public static function all()
    {
        return self::getData();
    }

    public static function find($id)
    {
        $data = self::getData();

        foreach ($data as $theNews)
        {
            if ($theNews->id == $id)
            {
                return $theNews;
            }
        }
    }

    public static function findLast()
    {
        $data = self::getData();
        $data = array_slice($data, 0, 3);

        return $data;
    }

    public static function findByEndPoint($endPoint)
    {
        $data = self::getData();

        foreach ($data as $theNews)
        {
            if ($theNews->endPoint == $endPoint)
            {
                return $theNews;
            }
        }
    }
}
