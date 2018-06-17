<?php

use Illuminate\Database\Seeder;
use App\Models\ModelClass;

class ModelClassTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelClass::insert([
            ['class' => 'c4d'],
            ['class' => 'maya'],
            ['class' => 'autoCAD'],
        ]);
    }
}
