<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\UserDomicilio;
use Database\Factories\UserDomicilioFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory(100)->create();
        foreach ($users as  $user) {
            UserDomicilio::factory()->create([
                'user_id' => $user->id
            ]);
        }
    }
}
