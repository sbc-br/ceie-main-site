<?php

namespace App;

use App\Institution;
use URL;

class Role
{
    private static $rolesData = [
        [
            'id' => 1,
            'name' => 'COORDINATOR',
            'title' => 'Coordenador(a)'
        ],
        [
            'id' => 2,
            'name' => 'VICE_COORDINATOR',
            'title' => 'Vice-Coordenador(a)'
        ],
        [
            'id' => 3,
            'name' => 'MEMBER',
            'title' => 'Membro da Comissão'
        ],
        [
            'id' => 4,
            'name' => 'BOSS_EDITOR',
            'title' => 'Editor(a) Chefe'
        ],
        [
            'id' => 5,
            'name' => 'ASSOCIATE_EDITOR',
            'title' => 'Editor(a) Associad(o)'
        ]
    ];

    public $id;
    public $name;
    public $title;

    public function __construct($roleData)
    {
        $this->id = $roleData['id'];
        $this->name = $roleData['name'];
        $this->title = $roleData['title'];
    }

    public static function all()
    {
        $roles = [];

        foreach (self::$rolesData as $roleData) {
            array_push($roles, new Role($roleData));
        }

        return $roles;
    }

    public static function find($id)
    {
        $roles = self::all();

        foreach ($roles as $role)
        {
            if ($role->id == $id)
            {
                return $role;
            }
        }
    }
}
