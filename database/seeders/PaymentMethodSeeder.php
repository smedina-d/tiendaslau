<?php

namespace Database\Seeders;

use App\Models\PaymentMethods;
use Illuminate\Database\Seeder;

class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $methods = [
            'Tarjeta de débito/Crédito',
            'PayPal',
            'Zelle',
            'Efectivo',
            'Transferencia'
        ];

        foreach ($methods as $method) {
            PaymentMethods::create([
                'method' => $method
            ]);
        }
    }
}
