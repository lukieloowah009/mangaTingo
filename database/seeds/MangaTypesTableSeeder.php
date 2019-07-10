<?php

use App\Models\MangaType;
use Illuminate\Database\Seeder;

class MangaTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(MangaType::class, 10)->create();
    }
}
