<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
           'name' => 'Nyaxk',
            'cpf' => '53649817896',
            'phoneNumber' => '13981260697',
            'email' => 'contact@nyaxk.com',
            'password' => '$2a$12$w5FF.ubxddyUZe6MIXXcNe8DMpoB6CrmeS9mfE.jUkRkdJSCcxrCW'
        ]);
    }
}
