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
        // \App\Models\User::factory(10)->create();
        $this->call(MembershipSeeder::class);
        $this->call(MembersTableSeeder::class);
        $this->call(DetailsTableSeeder::class);
        $this->call(AlbumSeeder::class);
        $this->call(AlbumStatisticSeeder::class);
        $this->call(SongSeeder::class);
    }
}
