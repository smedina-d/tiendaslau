<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            'Aretes/Zarcillos',
            'Collares',
            'Pulseras',
            'Tobilleras'
        ];

        foreach ($categories as $cat) {
            Categorie::create([
                'name' => $cat
            ]);
        }
    }
}
