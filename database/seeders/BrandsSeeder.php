<?php

namespace Database\Seeders;

use App\Models\Brands;
use App\Models\Categorie;
use Illuminate\Database\Seeder;

class BrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brands = [
            'Addidas',
            'Armani Jeans',
            'Converse',
            'Giorgio Armani',
            'Calvin Klein',
            'Lee',
            'Levis',
            'Disney',
            'Puma',
            'Reebook',
            'united Colors of Bennetton',
            'Wrangler'
        ];

        $images = [
            '1.png',
            '2.png',
            '3.png',
            '4.png',
            '5.png',
            '6.png',
            '7.png',
            '8.png',
            '13.png',
            '14.png',
            '16.png',
            '18.png',
        ];

        for($i=0; $i< count($brands); $i++) {
            Brands::updateOrCreate([
                'name' => $brands[$i],
                'image' => $images[$i]
            ]);
        }
    }
}
