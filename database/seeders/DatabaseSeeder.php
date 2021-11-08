<?php

namespace Database\Seeders;

use App\Models\Todo;
use App\Models\User;
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
        User::factory(5)->create([
            'password' => bcrypt('codelex')])->each(function (User $user) {
            Todo::factory(50)->create([
                'user_id' => $user->id
            ]);
        });


    }
}
