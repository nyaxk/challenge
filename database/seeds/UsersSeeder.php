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
           'name' => 'Test',
            'cpf' => '58811215030',
            'phoneNumber' => '8337566442',
            'email' => 'test@test.com',
            'password' => '$2a$12$w5FF.ubxddyUZe6MIXXcNe8DMpoB6CrmeS9mfE.jUkRkdJSCcxrCW'
        ]);
    }
}
