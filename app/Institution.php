<?php

namespace App;


class Institution
{
    private static $institutionsData = [
        [
            'id' => 1,
            'name' => 'Universidade Federal Fluminense',
            'shortName' => 'UFF',
            'homePage' => 'http://www.uff.br'
        ],
        [
            'id' => 2,
            'name' => 'Universidade Federal do Amazonas',
            'shortName' => 'UFAM',
            'homePage' => 'https://ufam.edu.br'
        ],
        [
            'id' => 3,
            'name' => 'Universidade Tecnológica Federal do Paraná',
            'shortName' => 'UTFPR',
            'homePage' => 'http://portal.utfpr.edu.br'
        ],
        [
            'id' => 4,
            'name' => 'Universidade Federal de Pelotas',
            'shortName' => 'UFPel',
            'homePage' => 'http://portal.ufpel.edu.br'
        ],
        [
            'id' => 5,
            'name' => 'Universidade Federal de Uberlândia',
            'shortName' => 'UFU',
            'homePage' => 'http://www.ufu.br'
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
            'homePage' => 'https://www.ufg.br'
        ],
        [
            'id' => 8,
            'name' => 'Universidade do Vale do Rio dos Sinos',
            'shortName' => 'Unisinos',
            'homePage' => 'http://www.unisinos.br'
        ],
        [
            'id' => 9,
            'name' => 'Universidade Federal de Pernambuco',
            'shortName' => 'UFPE',
            'homePage' => 'https://www.ufpe.br'
        ],
        [
            'id' => 10,
            'name' => 'Universidade Federal do Estado do Rio de Janeiro',
            'shortName' => 'UNIRIO',
            'homePage' => 'http://www.unirio.br'
        ],
        [
            'id' => 11,
            'name' => 'Universidade Federal do Ceará',
            'shortName' => 'UFC',
            'homePage' => 'http://www.ufc.br'
        ],
        [
            'id' => 12,
            'name' => 'Universidade Federal de São Paulo',
            'shortName' => 'UFSP',
            'homePage' => 'https://www.unifesp.br'
        ],
        [
            'id' => 13,
            'name' => 'Universidade de São Paulo',
            'shortName' => 'USP',
            'homePage' => 'https://www5.usp.br'
        ],
        [
            'id' => 14,
            'name' => 'Universidade Federal de Rio Grande do Norte',
            'shortName' => 'UFRN',
            'homePage' => 'https://ufrn.br'
        ],
        [
            'id' => 15,
            'name' => 'Universidade do Estado de Santa Catarina',
            'shortName' => 'UDESC',
            'homePage' => 'https://www.udesc.br'
        ],
        [
            'id' => 16,
            'name' => 'Colégio Pedro II (RJ)',
            'shortName' => 'CAPII RJ',
            'homePage' => 'http://www.cp2.g12.br/index.php'
        ],
        [
            'id' => 17,
            'name' => 'Universidade Regional de Blumenau',
            'shortName' => 'FURB',
            'homePage' => 'http://www.furb.br'
        ],
        [
            'id' => 18,
            'name' => 'Universidade Federal do Maranhão',
            'shortName' => 'UFMA',
            'homePage' => 'http://www.ufma.br'
        ],
        [
            'id' => 19,
            'name' => 'Universidade Federal de Alagoas',
            'shortName' => 'UFAL',
            'homePage' => 'https://ufal.br'
        ],
        [
            'id' => 20,
            'name' => 'Universidade Federal de São Carlos',
            'shortName' => 'UFSCar',
            'homePage' => 'https://www2.ufscar.br/'
        ],
        [
            'id' => 21,
            'name' => 'Universidade Federal Rural de Pernambuco',
            'shortName' => 'UFRPE',
            'homePage' => 'http://www.ufrpe.br'
        ],
        [
            'id' => 22,
            'name' => 'Universidade de Passo Fundo',
            'shortName' => 'UPF',
            'homePage' => 'http://www.upf.br'
        ],
        [
            'id' => 23,
            'name' => 'Universidade do Vale do Itajaí',
            'shortName' => 'UNIVALI',
            'homePage' => 'http://www.univali.br'
        ],
        [
            'id' => 24,
            'name' => 'Universidade Federal do Rio de Janeiro',
            'shortName' => 'UFRJ',
            'homePage' => 'http://www.ufrj.br'
        ],
        [
            'id' => 25,
            'name' => 'Universidade de Brasília',
            'shortName' => 'UnB',
            'homePage' => 'http://www.unb.br'
        ],
        [
            'id' => 26,
            'name' => 'Durham University, Reino Unido',
            'shortName' => 'Durham University',
            'homePage' => 'https://www.dur.ac.uk'
        ]
    ];

    public $id;
    public $name;
    public $shortName;
    public $homePage;

    public function __construct($institutionData)
    {
        $this->id = $institutionData['id'];
        $this->name = $institutionData['name'];
        $this->shortName = $institutionData['shortName'];
        $this->homePage = $institutionData['homePage'];
    }

    public static function all()
    {
        $institutions = [];

        foreach (self::$institutionsData as $institutionData)
        {
            array_push($institutions, new Institution($institutionData));
        }

        return $institutions;
    }

    public static function find($id)
    {
        $institutions = self::all();

        foreach ($institutions as $institution)
        {
            if ($institution->id == $id)
            {
                return $institution;
            }
        }
    }
}
