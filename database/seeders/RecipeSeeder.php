<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('recipes')->insert([
                'title' => 'トマトとバジルのパスタ',
                'content' => '材料: スパゲッティ、トマト、バジル、オリーブオイル、塩、胡椒、にんにく',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
             DB::table('recipes')->insert([
                'title' => '鶏肉の照り焼き',
                'content' => '材料: 鶏もも肉、醤油、みりん、砂糖、酒、ごま',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
         ]);
    }
}