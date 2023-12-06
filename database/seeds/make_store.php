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

        /**
         * Карточки товара
         */
        DB::table('car_stores')->insert([
            'car_id'       => 1,
            'car_model_id' => 1,
            'car_info'     => 'jeep wrangler jk',
            'was_rented'   => 0,
            'rent_price'   => 1000,
            'img_patch'    => 'jeep_wrangler_jk.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 2,
            'car_model_id' => 2,
            'car_info'     => 'jeep wrangler jl',
            'was_rented'   => 0,
            'rent_price'   => 1500,
            'img_patch'    => 'jeep_wrangler_jl.jfif',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 3,
            'car_model_id' => 3,
            'car_info'     => 'jeep gladiator',
            'was_rented'   => 1,
            'rent_price'   => 2500,
            'img_patch'    => 'jeep_gladiator.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 4,
            'car_model_id' => 4,
            'car_info'     => 'dodge ram',
            'was_rented'   => 0,
            'rent_price'   => 2300,
            'img_patch'    => 'dodge_ram.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 5,
            'car_model_id' => 5,
            'car_info'     => 'dodge ram trx',
            'was_rented'   => 0,
            'rent_price'   => 3000,
            'img_patch'    => 'dodge_ram_trx.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 6,
            'car_model_id' => 6,
            'car_info'     => 'dodge challenger',
            'was_rented'   => 1,
            'rent_price'   => 2000,
            'img_patch'    => 'dodge_challenger.jfif',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 7,
            'car_model_id' => 7,
            'car_info'     => 'dodge challenger hellcat',
            'was_rented'   => 1,
            'rent_price'   => 3500,
            'img_patch'    => 'dodge_challenger_hellcat.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 8,
            'car_model_id' => 8,
            'car_info'     => 'chevrolet camaro ss',
            'was_rented'   => 0,
            'rent_price'   => 2200,
            'img_patch'    => 'chevrolet_camaro_ss.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'        => 9,
            'car_model_id' => 9,
            'car_info'      => 'chevrolet niva',
            'was_rented'    => 0,
            'rent_price'    => 500,
            'img_patch'     => 'chevrolet_niva.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 10,
            'car_model_id' => 10,
            'car_info'     => 'chevrolet trailblazer',
            'was_rented'   => 0,
            'rent_price'   => 1500,
            'img_patch'    => 'chevrolet_trailblazer.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 11,
            'car_model_id' => 11,
            'car_info'     => 'Ford mustang',
            'was_rented'   => 0,
            'rent_price'   => 1900,
            'img_patch'    => 'Ford_mustang.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 12,
            'car_model_id' => 12,
            'car_info'     => 'Ford bronco',
            'was_rented'   => 1,
            'rent_price'   => 3500,
            'img_patch'    => 'Ford_bronco.jfif',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 13,
            'car_model_id' => 13,
            'car_info'     => 'Ford focus RS',
            'was_rented'   => 0,
            'rent_price'   => 1500,
            'img_patch'    => 'Ford_focus_RS.jfif',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 14,
            'car_model_id' => 14,
            'car_info'     => 'Cadillac escalade',
            'was_rented'   => 0,
            'rent_price'   => 2800,
            'img_patch'    => 'Cadillac_escalade.jfif',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 15,
            'car_model_id' => 15,
            'car_info'     => 'cadillac cts v',
            'was_rented'   => 0,
            'rent_price'   => 3000,
            'img_patch'    => 'cadillac_cts_v.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 16,
            'car_model_id' => 16,
            'car_info'     => 'Buick Riviera',
            'was_rented'   => 1,
            'rent_price'   => 5000,
            'img_patch'    => 'Buick_Riviera.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 17,
            'car_model_id' => 17,
            'car_info'     => 'Запорожец-966',
            'was_rented'   => 0,
            'rent_price'   => 250,
            'img_patch'    => 'zaz-966.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 18,
            'car_model_id' => 18,
            'car_info'     => 'Vesta sw',
            'was_rented'   => 0,
            'rent_price'   => 1000,
            'img_patch'    => 'Vesta_sw.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 19,
            'car_model_id' => 19,
            'car_info'     => 'UAZ Patriot',
            'was_rented'   => 0,
            'rent_price'   => 1100,
            'img_patch'    => 'UAZ_Patriot.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 20,
            'car_model_id' => 20,
            'car_info'     => 'УАЗ Комби Экспедиция',
            'was_rented'   => 1,
            'rent_price'   => 1300,
            'img_patch'    => 'uaz_combi.jpg',
        ]);
        DB::table('car_stores')->insert([
            'car_id'       => 21,
            'car_model_id' => 21,
            'car_info'     => 'ГАЗ-24',
            'was_rented'   => 1,
            'rent_price'   => 2200,
            'img_patch'    => 'gaz-24.jpg',
        ]);
    }   
}
