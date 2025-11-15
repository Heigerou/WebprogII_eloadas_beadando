<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Szerelo;

class SzereloSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['nev' => 'Tornyos Pál', 'kezdev' => 1979],
            ['nev' => 'Kormos István', 'kezdev' => 1981],
            ['nev' => 'Fodor László', 'kezdev' => 1983],
            ['nev' => 'Szabó Mihály', 'kezdev' => 1975],
            ['nev' => 'Szabó György', 'kezdev' => 2000],
            ['nev' => 'Erdei Imre', 'kezdev' => 1988],
        ];

        foreach ($data as $row) {
            Szerelo::create($row);
        }
    }
}
