<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TransactionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert([
            'users_id' => 1,
            'accounts_id' => 1,
            'value' => 13.99,
            'type' => 'billPayment'
        ]);
        DB::table('transactions')->insert([
            'users_id' => 1,
            'accounts_id' => 1,
            'value' => 10.99,
            'type' => 'billPayment'
        ]);
        DB::table('transactions')->insert([
            'users_id' => 1,
            'accounts_id' => 1,
            'value' => 20.99,
            'type' => 'billPayment'
        ]);
        DB::table('transactions')->insert([
            'users_id' => 1,
            'accounts_id' => 1,
            'value' => 500.99,
            'type' => 'billPayment'
        ]);
    }
}
