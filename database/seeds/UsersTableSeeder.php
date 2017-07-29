<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create generic user for logging in with
        factory(App\User::class)->create([
            'email' => 'someone@example.com'
        ]);
    }
}
