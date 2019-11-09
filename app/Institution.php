<?php

namespace App;


class Institution
{
    private static $institutions = [
        [
            'id' => 1,
            'name' => 'Universidade Federal Fluminense',
            'shortName' => 'UFF',
            'homePage' => 'http://www.uff.br/'
        ],
        [
            'id' => 2,
            'name' => 'Universidade Federal do Amazonas',
            'shortName' => 'UFAM',
            'homePage' => 'https://ufam.edu.br/'
        ],
        [
            'id' => 3,
            'name' => 'Universidade Tecnológica Federal do Paraná',
            'shortName' => 'UTFPR',
            'homePage' => 'http://portal.utfpr.edu.br/'
        ],
        [
            'id' => 4,
            'name' => 'Universidade Federal de Pelotas',
            'shortName' => 'UFPel',
            'homePage' => 'http://portal.ufpel.edu.br/'
        ],
        [
            'id' => 5,
            'name' => 'Universidade Federal de Uberlândia',
            'shortName' => 'UFU',
            'homePage' => 'http://www.ufu.br/'
        ],
        [
            'id' => 6,
            'name' => 'Universidade Federal do Rio Grande do Sul',
            'shortName' => 'UFRGS',
            'homePage' => 'http://www.ufrgs.br/ufrgs/inicial'
        ],
        [
            'id' => 7,
            'name' => 'Universidade Federal de Goiás',
            'shortName' => 'UFG',
            'homePage' => 'https://www.ufg.br/'
        ],
        [
            'id' => 8,
            'name' => 'Universidade do Vale do Rio dos Sinos',
            'shortName' => 'Unisinos',
            'homePage' => 'http://www.unisinos.br/'
        ],
        [
            'id' => 9,
            'name' => 'Universidade Federal de Pernambuco',
            'shortName' => 'UFPE',
            'homePage' => 'https://www.ufpe.br/'
        ],
        [
            'id' => 10,
            'name' => 'Universidade Federal do Estado do Rio de Janeiro',
            'shortName' => 'UNIRIO',
            'homePage' => 'http://www.unirio.br/'
        ],
        [
            'id' => 11,
            'name' => 'Universidade Federal do Ceará',
            'shortName' => 'UFC',
            'homePage' => 'http://www.ufc.br/'
        ],
        [
            'id' => 12,
            'name' => 'Universidade Federal de São Paulo',
            'shortName' => 'UFSP',
            'homePage' => 'https://www.unifesp.br/'
        ]
    ];

    public $id;
    public $name;
    public $shortName;
    public $homePage;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->shortName = $data['shortName'];
        $this->homePage = $data['homePage'];
    }

    private static function getData()
    {
        $data = [];

        foreach (self::$institutions as $theInstitution)
        {
            array_push($data, new Institution($theInstitution));
        }

        return $data;
    }

    public static function all()
    {
        return self::getData();
    }

    public static function find($id)
    {
        $data = self::getData();

        foreach ($data as $theInstitution)
        {
            if ($theInstitution->id == $id)
            {
                return $theInstitution;
            }
        }
    }
}
