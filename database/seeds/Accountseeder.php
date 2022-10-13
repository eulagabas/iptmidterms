<?php

use Illuminate\Database\Seeder;

class Accountseeder extends Seeder
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
                'user_id'=> 1,
                'acct_name'=>'Lenteria B. Regular Account',
                'init_invest'=>12500,
                'start_date'=>'2022-03-23',
                'remarks'=>'Done with normal transaction',
            ],

            [
                'user_id'=> 2,
                'acct_name'=>'Cosgafa L. Regular Account',
                'init_invest'=>18500,
                'start_date'=>'2020-05-28',
                'remarks'=>'Done with normal transaction',
            ],

            [
                'user_id'=> 3,
                'acct_name'=>'Mahusay Trust Fund',
                'init_invest'=>890500,
                'start_date'=>'2022-06-03',
                'remarks'=>'Done with normal transaction',
            ]

        ];
        foreach($data as $acc){
            \App\Account::create($acc);
        }
    }
}
