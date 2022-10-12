<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Activity;
use App\Models\Exercise;
use App\Models\Program;
use App\Models\ProgramExercise;
use App\Models\Weight;
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
        /**
         * Program: 4 programma's, eerste twee worden gebruikt
         * Exercise: 40 oefeningen, worden gekoppeld aan programma 1-2
         * ProgramExercise: koppeltabel bovenstaande
         */
        Program::factory(4)->create();
        Exercise::factory(40)->create();
        ProgramExercise::factory(40)->create();
        /**
         * Weight: Gewicht voor 7 dagen
         * Activity: Activiteit voor dezelfde 7 dagen
         */
        Weight::factory(7)->create();
        Activity::factory(7)->create();
    }
}
