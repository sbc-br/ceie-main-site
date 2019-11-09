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
            'lattesId' => '6515044727348778',
            'role' => 'Coordenador',
            'year' => 2019,
            'institution_id' => 1
        ],
        [
            'id' => 2,
            'name' => 'Thais Castro',
            'lattesId' => '9337143918677200',
            'role' => 'Vice-coordenadora',
            'year' => 2019,
            'institution_id' => 2
        ],
        [
            'id' => 3,
            'name' => 'Eleandro Maschio',
            'lattesId' => '5642072550423634',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 3
        ],
        [
            'id' => 4,
            'name' => 'Tiago Primo',
            'lattesId' => '5641514282351546',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 4
        ],
        [
            'id' => 5,
            'name' => 'Carlos Roberto Lopes',
            'lattesId' => '6737493567462425',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 5
        ],
        [
            'id' => 6,
            'name' => 'Crediné de Menezes',
            'lattesId' => '5454484334693909',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 6
        ],
        [
            'id' => 7,
            'name' => 'Esdras Bispo',
            'lattesId' => '1022072289836952',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 7
        ],
        [
            'id' => 8,
            'name' => 'Fabiano Azevedo Dorça',
            'lattesId' => '3944579737930998',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 5
        ],
        [
            'id' => 9,
            'name' => 'Márcia Aparecida Fernandes',
            'lattesId' => '8946715881289701',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 5
        ],
        [
            'id' => 10,
            'name' => 'Patrícia Jaques',
            'lattesId' => '5723385125570881',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 8
        ],
        [
            'id' => 11,
            'name' => 'Patrícia Cabral Tedesco',
            'lattesId' => '7465148175791735',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 9
        ],
        [
            'id' => 12,
            'name' => 'Sean Siqueira',
            'lattesId' => '2562652838103607',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 10
        ],
        [
            'id' => 13,
            'name' => 'Alex Sandro Gomes',
            'lattesId' => '7188784344595649',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 9
        ],
        [
            'id' => 14,
            'name' => 'José Aires de Castro Filho',
            'lattesId' => '1001172700194924',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 11
        ],
        [
            'id' => 15,
            'name' => 'Thiago S. Barcelos',
            'lattesId' => '0179728954543082',
            'role' => 'Integrante do Comitê Gestor',
            'year' => 2019,
            'institution_id' => 12
        ]
    ];

    public $id;
    public $name;
    public $lattesId;
    public $role;
    public $year;
    public $institution;

    public function __construct($data)
    {
        $this->id = $data['id'];
        $this->name = $data['name'];
        $this->lattesId = $data['lattesId'];
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
