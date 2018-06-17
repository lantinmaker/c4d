<?php

use Illuminate\Database\Seeder;
use App\Models\Model;

class ModelTableSeeder extends Seeder
{

    const GENERATE_NUMBER = 50;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = app(Faker\Generator::class);

        $models = factory(Model::class )->times(self::GENERATE_NUMBER)->make()->each(function ($model){
            $model->mmid = generate_mmid();
            $model->price = rand(1000 , 9999) / 100;
            $model->download = rand(10 , 999);
            $model->fav = rand(10 , 999);
            $model->view = rand(10 , 999);
            $model->polygons = rand(10 , 999);
            $model->vertices = rand(10 , 999);
            $model->textures = mt_rand(1,2);
            $model->materials = mt_rand(1,2);
            $model->rigged = mt_rand(1,2);
            $model->animated = mt_rand(1,2);
            $model->printable_ready_3d = mt_rand(1,2);
            $model->game_ready = mt_rand(1,2);
            $model->uv_mapped = mt_rand(1,2);
            $model->created_at = \Carbon\Carbon::now();
            $model->updated_at = \Carbon\Carbon::now();

        });

        Model::insert($models->toArray());
    }


}
