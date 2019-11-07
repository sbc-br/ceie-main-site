<?php

namespace App;

use DateTime;
use URL;

class Staff
{
    private static $staff = [
        [
            'id' => 1,
            'name' => 'Sérgio Crespo',
            'role' => 'Coordenador',
            'year' => 2019,
            'short_institution_name' => 'UFF'
        ],
        [
            'id' => 2,
            'name' => 'Thais Castro',
            'role' => 'Vice-coordenadora',
            'year' => 2019,
            'short_institution_name' => 'UFAM'
        ],
        [
            'id' => 3,
            'name' => 'Eleandro Maschio',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UTFPR'
        ],
        [
            'id' => 4,
            'name' => 'Tiago Primo',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UFPel'
        ],
        [
            'id' => 5,
            'name' => 'Carlos Roberto Lopes',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UFU'
        ],
        [
            'id' => 6,
            'name' => 'Crediné de Menezes',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UFRGS'
        ],
        [
            'id' => 7,
            'name' => 'Esdras Bispo',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UFG'
        ],
        [
            'id' => 8,
            'name' => 'Fabiano Azevedo Dorça',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UFU'
        ],
        [
            'id' => 9,
            'name' => 'Márcia Aparecida Fernandes',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UFU'
        ],
        [
            'id' => 10,
            'name' => 'Patrícia Jaques',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'Unisinos'
        ],
        [
            'id' => 11,
            'name' => 'Patrícia Cabral Tedesco',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UFPE'
        ],
        [
            'id' => 12,
            'name' => 'Sean Siqueira',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UNIRIO'
        ],
        [
            'id' => 13,
            'name' => 'Alex Sandro Gomes',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UFPE'
        ],
        [
            'id' => 14,
            'name' => 'José Aires de Castro Filho',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UFC'
        ],
        [
            'id' => 15,
            'name' => 'Thiago S. Barcelos',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'short_institution_name' => 'UFSP'
        ]
    ];

    public $id;
    public $name;
    public $role;
    public $year;
    public $short_institution_name;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->role = $data['role'];
        $this->year = $data['year'];
        $this->short_institution_name = $data['short_institution_name'];
        $this->thumbnail = URL::asset('images/staff/staff_'.$this->id.'.jpg');
    }

    private static function getData()
    {
        $data = [];

        foreach (self::$staff as $theStaff)
        {
            array_push($data, new Staff($theStaff));
        }

        // usort($data, function($a, $b){
        //     return $b->publicationDate->getTimestamp() - $a->publicationDate->getTimestamp();
        // });

        return $data;
    }

    public static function all()
    {
        return self::getData();
    }

    public static function find($id)
    {
        $data = self::getData();

        foreach ($data as $theStaff)
        {
            if ($theStaff->id == $id)
            {
                return $theStaff;
            }
        }
    }

    public static function findByYear($year)
    {
        $data = self::getData();
        $newData = [];

        foreach ($data as $theStaff)
        {
            if ($theStaff->year == $year)
            {
                array_push($newData, $theStaff);
            }
        }

        return $newData;
    }

    public static function findCurrent()
    {
        return self::findByYear(2019);
    }
}
