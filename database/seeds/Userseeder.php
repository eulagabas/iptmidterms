<?php

use Illuminate\Database\Seeder;

class Userseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data=[
            [
                'lname'=>'Lenteria',
                'fname'=>'Benjie',
                'address'=>'Pob. Centro, Clarin, Bohol',
                'phone'=>'0909.089.2350',
                'email'=>'benjielenteria@yahoo.com',
                'password'=>bcrypt('password123'),
            ],

            [
                'lname'=>'Cosgafa',
                'fname'=>'Lyra',
                'address'=>'sagbayan Sur, Sagbayan, Bohol',
                'phone'=>'0950.412.1209',
                'email'=>'kalyra@gmail.com',
                'password'=>bcrypt('pass123')
            ],

            [
                'lname'=>'Mahusay',
                'fname'=>'Rodelyn',
                'address'=>'San Agustin, Sagbayan, Bohol',
                'phone'=>'091213.226.9999',
                'email'=>'rodsmahusay@gmail.com',
                'password'=>bcrypt('password123')
            ],
        ];
        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
