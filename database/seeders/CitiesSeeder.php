<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\DB;
use Varbox\Contracts\CityModelContract;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param CityModelContract $city
     * @param Filesystem $files
     * @return void
     */
    public function run(CityModelContract $city, Filesystem $files)
    {
        if (!$files->exists(database_path('sql/cities.sql'))) {
            $this->command->error('The file "database/sql/cities.sql" file does not exist!');
            return;
        }

        if ($city->count() > 0) {
            $this->command->error('The "cities" database table is not empty!');
            $this->command->warn('For this seed to work, manually delete all entries from your "cities" table.');
            return;
        }

        DB::unprepared($files->get(database_path('sql/cities.sql')));
    }
}
