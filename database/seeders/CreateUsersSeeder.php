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

               'password'=> bcrypt('Jinnam10'),

            ],

            [

               'name'=>'KEITA',
               'prenom'=>'Aminata',
               'email'=>'aminatak@sagetech.com',

               'type'=> 2,

               'password'=> bcrypt('0102AmiK23'),

            ],

            [
 
               'name'=>'Hacoule',
               'prenom'=>'Antiou',

               'email'=>'hakoule@sagetech.com',

               'type'=>0,

               'password'=> bcrypt('23Hakoul03'),

            ],
            
            [

                'name'=>'Coulibaly ',
                'prenom'=>'Zoumana',
 
                'email'=>'coulibalyz@sagetech.com',
 
                'type'=>2,
 
                'password'=> bcrypt('Z76Coulou'),
 
             ],
             [

                'name'=>'DOUKARA',
                'prenom'=>'Oumar',
 
                'email'=>'Odoukara@sagetech.com',
 
                'type'=>0,
 
                'password'=> bcrypt('Odouk065'),
 
             ],

        ];

    

        foreach ($users as $key => $user) {

            User::create($user);

        }

    }

}
