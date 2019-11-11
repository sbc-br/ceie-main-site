<?php

namespace App;

use Illuminate\Support\Str;
use URL;
use App\User;
use App\Role;

class Portal
{
    private static $portalsData = [
        [
            'id' => 1,
            'name' => 'CEIE',
            'title' => 'Comissão Especial de Informática na Educação',
            'shortTitle' => 'CEIE',
            'homePage' => 'https://ceie-br.org',
            'committees' => [
                [
                    'year' => 2019,
                    'members' => [
                        ['id' => 1, 'role' => 1],
                        ['id' => 2, 'role' => 2],
                        ['id' => 14, 'role' => 3],
                        ['id' => 17, 'role' => 3],
                        ['id' => 6, 'role' => 3],
                        ['id' => 11, 'role' => 3],
                        ['id' => 15, 'role' => 3],
                        ['id' => 16, 'role' => 3],
                        ['id' => 18, 'role' => 3],
                        ['id' => 19, 'role' => 3],
                        ['id' => 20, 'role' => 3],
                        ['id' => 21, 'role' => 3],
                        ['id' => 22, 'role' => 3],
                        ['id' => 23, 'role' => 3],
                        ['id' => 7, 'role' => 3],
                        ['id' => 24, 'role' => 3]
                    ]
                ]
            ],
        ],
        [
            'id' => 2,
            'name' => 'RBIE',
            'title' => 'Revista Brasileita de Informática na Educação',
            'shortTitle' => 'RBIE',
            'homePage' => 'https://www.br-ie.org/pub/index.php/rbie',
            'committees' =>  [
                [
                    'year' => 2019,
                    'members' => [
                        ['id' => 18, 'role' => 4],
                        ['id' => 25, 'role' => 5],
                        ['id' => 3, 'role' => 5],
                        ['id' => 26, 'role' => 5],
                        ['id' => 27, 'role' => 5],
                        ['id' => 4, 'role' => 5]
                    ]
                ]
            ]
        ]
    ];

    public $id;
    public $name;
    public $title;
    public $shortTitle;
    public $homePage;
    public $committees;

    public function __construct($portalData)
    {
        $this->id = $portalData['id'];
        $this->name = $portalData['name'];
        $this->title = $portalData['title'];
        $this->shortTitle = $portalData['shortTitle'];
        $this->homePage = $portalData['homePage'];
        $this->committees = $this->buildCommittees($portalData['committees']);
    }

    private function buildCommittees($committeesData)
    {
        $committees = [];

        foreach ($committeesData as $committeeData) {

            $committee = json_decode(json_encode($committeeData));
            $newMembers = [];

            foreach ($committee->members as $member){
                $user = User::find($member->id);
                $role = Role::find($member->role);

                $member = (object)[
                    'user' => $user,
                    'role' => $role
                ];

                array_push($newMembers, $member);
            }

            $committee->members = $newMembers;

            array_push($committees, $committee);
        }

        return $committees;
    }

    public static function all()
    {
        $portals = [];

        foreach (self::$portalsData as $portalData) {
            array_push($portals, new Portal($portalData));
        }

        return $portals;
    }

    public static function find($id)
    {
        $portals = self::all();

        foreach ($portals as $portal) {
            if ($portal->id == $id) {
                return $portal;
            }
        }
    }

    public static function findByNameIgnoreCase($name)
    {
        $name = Str::lower($name);

        $portals = self::all();

        foreach ($portals as $portal)
        {
            if (Str::lower($portal->name) == $name)
            {
                return $portal;
            }
        }
    }

    public function committee($year)
    {
        $foundCommittee = $this->committees[count($this->committees) - 1];

        // foreach ($this->committees as $committee){
        //     if ($committee->year >= $year){
        //         if ($committee->year >)
        //     }
        // }

        // if (isset($foundCommittee)){
        //     return $foundCommittee;
        // }
        return $foundCommittee;
    }

    public function currentCommittee(){
        return $this->committee(date('Y'));
    }
}
