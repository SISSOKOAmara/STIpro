<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [

            [

               'name'=>'SISSOKO',
               'prenom'=>'Amara',

               'email'=>'sissoko@sagetech.com',

               'type'=>1,

               'password'=> bcrypt('111111'),

            ],

            [

               'name'=>'DIAKITE',
               'prenom'=>'Kadidiatou',
               'email'=>'manager@sagetech.com',

               'type'=> 2,

               'password'=> bcrypt('111111'),

            ],

            [

               'name'=>'CAMARA',
               'prenom'=>'Aboubacar',

               'email'=>'user@sagetech.com',

               'type'=>0,

               'password'=> bcrypt('111111'),

            ],

        ];

    

        foreach ($users as $key => $user) {

            User::create($user);

        }

    }

}
