<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {

        // take an array of seeders to store in the DB
        $this->call( [
            CompanySeeder::class,
        ] );
    }
}