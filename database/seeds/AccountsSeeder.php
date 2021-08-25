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
            'agency' => 123,
            'number' => 123,
            'digit' => 01,
            'corporateName' => 'PERSONAL',
            'fantasyName' => 'TEST PERSONAL',
            'type' => 'person'
        ]);

        DB::table('accounts')->insert([
            'users_id' => 1,
            'agency' => 123,
            'number' => 123,
            'digit' => 01,
            'corporateName' => 'COMPANY',
            'fantasyName' => 'TEST COMP',
            'cnpj' => 123,
            'type' => 'company'
        ]);
    }
}
