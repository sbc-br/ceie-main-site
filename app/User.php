<?php

namespace App;

use App\Institution;
use URL;

class User
{
    private static $usersData = [
        [
            'id' => 1,
            'name' => 'Sérgio Crespo',
            'lattesId' => '6515044727348778',
            'institution_id' => 1
        ],
        [
            'id' => 2,
            'name' => 'Thais Castro',
            'lattesId' => '9337143918677200',
            'institution_id' => 2,
        ],
        [
            'id' => 3,
            'name' => 'Eleandro Maschio',
            'lattesId' => '5642072550423634',
            'institution_id' => 3
        ],
        [
            'id' => 4,
            'name' => 'Tiago Primo',
            'lattesId' => '5641514282351546',
            'institution_id' => 4
        ],
        [
            'id' => 5,
            'name' => 'Carlos Roberto Lopes',
            'lattesId' => '6737493567462425',
            'institution_id' => 5
        ],
        [
            'id' => 6,
            'name' => 'Crediné de Menezes',
            'lattesId' => '5454484334693909',
            'institution_id' => 6
        ],
        [
            'id' => 7,
            'name' => 'Esdras Bispo Jr',
            'lattesId' => '1022072289836952',
            'institution_id' => 7
        ],
        [
            'id' => 8,
            'name' => 'Fabiano Azevedo Dorça',
            'lattesId' => '3944579737930998',
            'institution_id' => 5
        ],
        [
            'id' => 9,
            'name' => 'Márcia Aparecida Fernandes',
            'lattesId' => '8946715881289701',
            'institution_id' => 5
        ],
        [
            'id' => 10,
            'name' => 'Patrícia Jaques',
            'lattesId' => '5723385125570881',
            'institution_id' => 8
        ],
        [
            'id' => 11,
            'name' => 'Patrícia Tedesco',
            'lattesId' => '7465148175791735',
            'institution_id' => 9
        ],
        [
            'id' => 12,
            'name' => 'Sean Siqueira',
            'lattesId' => '2562652838103607',
            'institution_id' => 10
        ],
        [
            'id' => 13,
            'name' => 'Alex Sandro Gomes',
            'lattesId' => '7188784344595649',
            'institution_id' => 9
        ],
        [
            'id' => 14,
            'name' => 'José Aires',
            'lattesId' => '1001172700194924',
            'institution_id' => 11,
        ],
        [
            'id' => 15,
            'name' => 'Thiago Barcelos',
            'lattesId' => '0179728954543082',
            'institution_id' => 13
        ],
        [
            'id' => 16,
            'name' => 'Bruno Gadelha',
            'lattesId' => '4987487225451219',
            'institution_id' => 2
        ],
        [
            'id' => 17,
            'name' => 'Dennys Leite Maia',
            'lattesId' => '4047293288281493',
            'institution_id' => 14
        ],
        [
            'id' => 18,
            'name' => 'Isabela Gasparini',
            'lattesId' => '3262681213088048',
            'institution_id' => 15
        ],
        [
            'id' => 19,
            'name' => 'Jorge Fernando',
            'lattesId' => '2411771287138620',
            'institution_id' => 16
        ],
        [
            'id' => 20,
            'name' => 'Mauricio Capobianco',
            'lattesId' => '2487859882670844',
            'institution_id' => 17
        ],
        [
            'id' => 21,
            'name' => 'Rafael Dias Araújo',
            'lattesId' => '3067137114142725',
            'institution_id' => 5
        ],
        [
            'id' => 22,
            'name' => 'Isabel Nunes',
            'lattesId' => '2087785677186785',
            'institution_id' => 14
        ],
        [
            'id' => 23,
            'name' => 'Luis Rivero',
            'lattesId' => '8534667641706692',
            'institution_id' => 18
        ],
        [
            'id' => 24,
            'name' => 'Patrícia Silva',
            'lattesId' => '9261035835015495',
            'institution_id' => 7
        ],
        [
            'id' => 25,
            'name' => 'Diego Dermeval',
            'lattesId' => '7400572752663161',
            'institution_id' => 19
        ],
        [
            'id' => 26,
            'name' => 'Luciana Zaina',
            'lattesId' => '0192085115595443',
            'institution_id' => 20
        ],
        [
            'id' => 27,
            'name' => 'Taciana Pontual Falcão',
            'lattesId' => '5706959249737319',
            'institution_id' => 21
        ]
    ];

    public $id;
    public $name;
    public $lattesId;
    public $institution;

    public function __construct($userData)
    {
        $this->id = $userData['id'];
        $this->name = $userData['name'];
        $this->lattesId = $userData['lattesId'];
        $this->institution = Institution::find($userData['institution_id']);
        $this->thumbnail = $this->buildThumbnail();
    }

    private function buildThumbnail()
    {
        $thumbnailPath = 'images/users/user_' . $this->id . '.jpg';

        if (file_exists(public_path($thumbnailPath))) {
            return URL::asset($thumbnailPath);
        } else {
            return URL::asset('images/users/user_unknown.jpg');
        }
    }

    public static function all()
    {
        $users = [];

        foreach (self::$usersData as $userData) {
            array_push($users, new User($userData));
        }

        return $users;
    }

    public static function find($id)
    {
        $users = self::all();

        foreach ($users as $user)
        {
            if ($user->id == $id)
            {
                return $user;
            }
        }
    }
}
