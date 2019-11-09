<?php

namespace App;

use URL;
use App\Institution;

class Staff
{
    private static $staff = [
        [
            'id' => 1,
            'name' => 'Sérgio Crespo',
            'role' => 'Coordenador',
            'year' => 2019,
            'institution_id' => 1
        ],
        [
            'id' => 2,
            'name' => 'Thais Castro',
            'role' => 'Vice-coordenadora',
            'year' => 2019,
            'institution_id' => 2
        ],
        [
            'id' => 3,
            'name' => 'Eleandro Maschio',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 3
        ],
        [
            'id' => 4,
            'name' => 'Tiago Primo',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 4
        ],
        [
            'id' => 5,
            'name' => 'Carlos Roberto Lopes',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 5
        ],
        [
            'id' => 6,
            'name' => 'Crediné de Menezes',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 6
        ],
        [
            'id' => 7,
            'name' => 'Esdras Bispo',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 7
        ],
        [
            'id' => 8,
            'name' => 'Fabiano Azevedo Dorça',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 5
        ],
        [
            'id' => 9,
            'name' => 'Márcia Aparecida Fernandes',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 5
        ],
        [
            'id' => 10,
            'name' => 'Patrícia Jaques',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 8
        ],
        [
            'id' => 11,
            'name' => 'Patrícia Cabral Tedesco',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 9
        ],
        [
            'id' => 12,
            'name' => 'Sean Siqueira',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 10
        ],
        [
            'id' => 13,
            'name' => 'Alex Sandro Gomes',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 9
        ],
        [
            'id' => 14,
            'name' => 'José Aires de Castro Filho',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 11
        ],
        [
            'id' => 15,
            'name' => 'Thiago S. Barcelos',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 12
        ]
    ];

    public $id;
    public $name;
    public $role;
    public $year;
    public $institution;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->role = $data['role'];
        $this->year = $data['year'];
        $this->institution = Institution::find($data['institution_id']);
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
