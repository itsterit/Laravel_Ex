<?php

use Illuminate\Database\Seeder;

class make_store extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Базовые типы двигателей
         */
        DB::table('enginetypes')->insert([
            'engine_type_id'   => 1,
            'engine_type_name' => 'L4',
        ]);
        DB::table('enginetypes')->insert([
            'engine_type_id'   => 2,
            'engine_type_name' => 'B4',
        ]);
        DB::table('enginetypes')->insert([
            'engine_type_id'   => 3,
            'engine_type_name' => 'L6',
        ]);
        DB::table('enginetypes')->insert([
            'engine_type_id'   => 4,
            'engine_type_name' => 'B6',
        ]);
        DB::table('enginetypes')->insert([
            'engine_type_id'   => 5,
            'engine_type_name' => 'V6',
        ]);
        DB::table('enginetypes')->insert([
            'engine_type_id'   => 6,
            'engine_type_name' => 'V8',
        ]);
        DB::table('enginetypes')->insert([
            'engine_type_id'   => 7,
            'engine_type_name' => 'w12',
        ]);

        /**
         * Базовые типы кузовов
         */
        DB::table('bodytypes')->insert([
            'body_type_id'   => 1,
            'body_type_name' => 'SUV',
        ]);
        DB::table('bodytypes')->insert([
            'body_type_id'   => 2,
            'body_type_name' => 'hatchback',
        ]);
        DB::table('bodytypes')->insert([
            'body_type_id'   => 3,
            'body_type_name' => 'sedan',
        ]);
        DB::table('bodytypes')->insert([
            'body_type_id'   => 4,
            'body_type_name' => 'muscle car',
        ]);
        DB::table('bodytypes')->insert([
            'body_type_id'   => 5,
            'body_type_name' => 'coupe',
        ]);
        DB::table('bodytypes')->insert([
            'body_type_id'   => 6,
            'body_type_name' => 'pickup ',
        ]);
        DB::table('bodytypes')->insert([
            'body_type_id'   => 7,
            'body_type_name' => 'wagon ',
        ]);

        /**
         * Базовые бренды
         */
        DB::table('brands')->insert([
            'brand_id'   => 1,
            'brand_name' => 'Jeep',
        ]);
        DB::table('brands')->insert([
            'brand_id'   => 2,
            'brand_name' => 'Chevrolet',
        ]);
        DB::table('brands')->insert([
            'brand_id'   => 3,
            'brand_name' => 'Ford',
        ]);
        DB::table('brands')->insert([
            'brand_id'   => 4,
            'brand_name' => 'Dodge',
        ]);
        DB::table('brands')->insert([
            'brand_id'   => 5,
            'brand_name' => 'Cadillac',
        ]);
        DB::table('brands')->insert([
            'brand_id'   => 6,
            'brand_name' => 'Buick',
        ]);
        DB::table('brands')->insert([
            'brand_id'   => 7,
            'brand_name' => 'ТАЗ',
        ]);

        /**
         * Базовые модели
         */
        DB::table('car_models')->insert([
            'model_id'      => 1,
            'model_name'    => 'jeep wrangler jk',
            'car_brand_id'  => 1,
            'car_body_id'   => 1,
            'car_engine_id' => 1,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 2,
            'model_name'    => 'jeep wrangler jl',
            'car_brand_id'  => 1,
            'car_body_id'   => 1,
            'car_engine_id' => 5,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 3,
            'model_name'    => 'jeep gladiator',
            'car_brand_id'  => 1,
            'car_body_id'   => 1,
            'car_engine_id' => 6,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 4,
            'model_name'    => 'dodge ram',
            'car_brand_id'  => 4,
            'car_body_id'   => 6,
            'car_engine_id' => 5,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 5,
            'model_name'    => 'dodge ram trx',
            'car_brand_id'  => 4,
            'car_body_id'   => 6,
            'car_engine_id' => 6,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 6,
            'model_name'    => 'dodge challenger',
            'car_brand_id'  => 4,
            'car_body_id'   => 4,
            'car_engine_id' => 5,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 7,
            'model_name'    => 'dodge challenger hellcat',
            'car_brand_id'  => 4,
            'car_body_id'   => 4,
            'car_engine_id' => 6,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 8,
            'model_name'    => 'chevrolet camaro ss',
            'car_brand_id'  => 2,
            'car_body_id'   => 4,
            'car_engine_id' => 6,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 9,
            'model_name'    => 'chevrolet niva',
            'car_brand_id'  => 2,
            'car_body_id'   => 1,
            'car_engine_id' => 1,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 10,
            'model_name'    => 'chevrolet trailblazer',
            'car_brand_id'  => 2,
            'car_body_id'   => 1,
            'car_engine_id' => 1,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 11,
            'model_name'    => 'Ford mustang',
            'car_brand_id'  => 3,
            'car_body_id'   => 4,
            'car_engine_id' => 1,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 12,
            'model_name'    => 'Ford bronco',
            'car_brand_id'  => 3,
            'car_body_id'   => 1,
            'car_engine_id' => 5,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 13,
            'model_name'    => 'Ford focus RS',
            'car_brand_id'  => 3,
            'car_body_id'   => 2,
            'car_engine_id' => 1,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 14,
            'model_name'    => 'Cadillac escalade',
            'car_brand_id'  => 5,
            'car_body_id'   => 1,
            'car_engine_id' => 6,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 15,
            'model_name'    => 'cadillac cts v',
            'car_brand_id'  => 5,
            'car_body_id'   => 4,
            'car_engine_id' => 6,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 16,
            'model_name'    => 'Buick Riviera',
            'car_brand_id'  => 6,
            'car_body_id'   => 5,
            'car_engine_id' => 5,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 17,
            'model_name'    => 'Запорожец-966',
            'car_brand_id'  => 7,
            'car_body_id'   => 3,
            'car_engine_id' => 2,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 18,
            'model_name'    => 'Запорожец-968',
            'car_brand_id'  => 7,
            'car_body_id'   => 3,
            'car_engine_id' => 2,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 18,
            'model_name'    => 'Vesta sw',
            'car_brand_id'  => 7,
            'car_body_id'   => 7,
            'car_engine_id' => 1,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 19,
            'model_name'    => 'UAZ Patriot',
            'car_brand_id'  => 7,
            'car_body_id'   => 1,
            'car_engine_id' => 1,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 20,
            'model_name'    => 'УАЗ Комби Экспедиция',
            'car_brand_id'  => 7,
            'car_body_id'   => 1,
            'car_engine_id' => 1,
        ]);
        DB::table('car_models')->insert([
            'model_id'      => 21,
            'model_name'    => 'ГАЗ-24',
            'car_brand_id'  => 7,
            'car_body_id'   => 3,
            'car_engine_id' => 6,
        ]);

    }
}
