<?php

use Illuminate\Database\Seeder;

class AccountsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
           'users_id' => 1,
            'agency' => '01',
            'number' => '92570961',
            'digit' => '82',
            'corporateName' => 'PERSONAL',
            'fantasyName' => 'TEST PERSONAL',
            'type' => 'personal'
        ]);

        DB::table('accounts')->insert([
            'users_id' => 1,
            'agency' => '01',
            'number' => '089932021',
            'digit' => '12',
            'corporateName' => 'COMPANY',
            'fantasyName' => 'TEST COMPANY',
            'cnpj' => '49386900000108',
            'type' => 'company'
        ]);
    }
}
