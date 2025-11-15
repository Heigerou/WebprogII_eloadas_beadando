<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Munkalap;

class MunkalapSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            ['bedatum' => '2001-05-28', 'javdatum' => '2001-05-31', 'helyaz' => 1, 'szereloaz' => 5, 'munkaora' => 2, 'anyagar' => 3721],
            ['bedatum' => '2001-02-26', 'javdatum' => '2001-03-02', 'helyaz' => 2, 'szereloaz' => 3, 'munkaora' => 3, 'anyagar' => 1432],
            ['bedatum' => '2001-03-19', 'javdatum' => '2001-03-22', 'helyaz' => 3, 'szereloaz' => 6, 'munkaora' => 3, 'anyagar' => 3016],
            ['bedatum' => '2001-05-14', 'javdatum' => '2001-05-16', 'helyaz' => 4, 'szereloaz' => 2, 'munkaora' => 3, 'anyagar' => 1434],
            ['bedatum' => '2001-05-24', 'javdatum' => '2001-05-26', 'helyaz' => 5, 'szereloaz' => 2, 'munkaora' => 2, 'anyagar' => 2666],
            ['bedatum' => '2001-04-11', 'javdatum' => '2001-04-14', 'helyaz' => 6, 'szereloaz' => 6, 'munkaora' => 1, 'anyagar' => 901],
            ['bedatum' => '2001-08-29', 'javdatum' => '2001-08-30', 'helyaz' => 7, 'szereloaz' => 4, 'munkaora' => 1, 'anyagar' => 3498],
            ['bedatum' => '2001-07-07', 'javdatum' => '2001-07-09', 'helyaz' => 8, 'szereloaz' => 5, 'munkaora' => 3, 'anyagar' => 5186],
            ['bedatum' => '2001-09-11', 'javdatum' => '2001-09-15', 'helyaz' => 9, 'szereloaz' => 5, 'munkaora' => 1, 'anyagar' => 4377],
            ['bedatum' => '2001-08-30', 'javdatum' => '2001-08-31', 'helyaz' => 10, 'szereloaz' => 2, 'munkaora' => 1, 'anyagar' => 2962],
        ];

        foreach ($data as $row) {
            Munkalap::create($row);
        }
    }
}
