<?php

namespace Database\Seeders;

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
        // for one user create a random of 1 - 5 questions
        \App\Models\User::factory(10)->create()->each(function($u) {
            $u->questions()->saveMany(
                \App\Models\Question::factory(rand(1,5))->make()
            )
            // for one question create random number of answers
            ->each(function($q){
                $q->answers()->saveMany(
                    \App\Models\Answer::factory(rand(1,5))->make()
                );
            });
        });
    }
}
