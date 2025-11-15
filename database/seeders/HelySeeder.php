<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Hely;

class HelySeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['telepules' => 'Kőváros', 'utca' => 'Gyimes u. 83.'],
            ['telepules' => 'Zöldhely', 'utca' => 'Bérc u. 96.'],
            ['telepules' => 'Barackfalva', 'utca' => 'Erdőss u. 18.'],
            ['telepules' => 'Kékség', 'utca' => 'Aszú u. 33.'],
            ['telepules' => 'Kőváros', 'utca' => 'Agyag u. 71.'],
            ['telepules' => 'Kékség', 'utca' => 'Csokor u. 4.'],
            ['telepules' => 'Zöldhely', 'utca' => 'Gőz tér 95.'],
            ['telepules' => 'Sárgahegy', 'utca' => 'Főnök u. 55.'],
            ['telepules' => 'Sárgahegy', 'utca' => 'Fenyő u. 24.'],
            ['telepules' => 'Sárgahegy', 'utca' => 'Cselló u. 25.'],
        ];

        foreach ($data as $row) {
            Hely::create($row);
        }
    }
}
