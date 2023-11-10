@extends('layouts.app')

@section('content')

<div class="container">
    @php
        $GET_BodyTypes         = $_GET['BodyTypes']           ?? "";
        $GET_Brands            = $_GET['Brands']              ?? "";
        $GET_Engine            = $_GET['EngineTypes']         ?? "";
        $GET_IsGoStoreView     = $_GET['IsGoStoreView']       ?? "";
        $DB_EngineTypes = "";
        $DB_BodyTypes   = "";
        $DB_Brands      = "";       
        $Cars      = DB::select('select * from car_stores where 1');
        $CarsParam = DB::select('SELECT `car_model_id`, `car_info`, `was_rented`, `rent_price`, `img_patch`  FROM `car_stores` WHERE 1');


        /**
        * Вывод авто с "витрины"
        */
        foreach($CarsParam as $Cars_Param)
        {
            /**
            * бренд авто
            */
            $CarsModelParam = DB::select('SELECT `car_brand_id`, `car_body_id`, `car_engine_id` FROM `car_models` WHERE model_id = ?', [$Cars_Param->car_model_id]);
            foreach($CarsModelParam as $CarsModelParam_list)
            {
                $DB_Brands = $CarsModelParam_list->car_brand_id;
                break;
            }

            /**
            * кузов авто
            */
            $CarsModelParam = DB::select('SELECT `car_brand_id`, `car_body_id`, `car_engine_id` FROM `car_models` WHERE model_id = ?', [$Cars_Param->car_model_id]);
            foreach($CarsModelParam as $CarsModelParam_list)
            {
                $DB_BodyTypes = $CarsModelParam_list->car_body_id;
                break;
            }

            /**
            * двигатель авто
            */
            $CarsModelParam = DB::select('SELECT `car_brand_id`, `car_body_id`, `car_engine_id` FROM `car_models` WHERE model_id = ?', [$Cars_Param->car_model_id]);
            foreach($CarsModelParam as $CarsModelParam_list)
            {
                $DB_EngineTypes = $CarsModelParam_list->car_engine_id;
                break;
            }

            if(    
                (($GET_Brands    == $DB_Brands)      || ($GET_Brands    == "" || $GET_Brands    == -1)) &&
                (($GET_BodyTypes == $DB_BodyTypes)   || ($GET_BodyTypes == "" || $GET_BodyTypes == -1)) &&
                (($GET_Engine    == $DB_EngineTypes) || ($GET_Engine    == "" || $GET_Engine    == -1))
            )
            {
                // $DB_Brands_param      = DB::select('SELECT `body_type_name` FROM `bodytypes` WHERE brand_id = ?', [$DB_Brands]);

                $DB_BodyTypes_param = "";
                $DB_BodyTypes_search      = DB::select('SELECT `body_type_name` FROM `bodytypes` WHERE body_type_id = ?', [$DB_BodyTypes]);
                foreach($DB_BodyTypes_search as $data)
                {
                    $DB_BodyTypes_param = $data->body_type_name;
                    break;
                }

                // $DB_EngineTypes_param = DB::select('SELECT `car_brand_id` WHERE model_id = ?', [$DB_EngineTypes]);
                @endphp

                <div class="text-dark ">
                    <div class="text-dark ">
                        {{ $Cars_Param->car_info }}
                    </div>
                    <div class="text-dark ">
                        {{ $Cars_Param->rent_price }}
                    </div>
                    <div class="text-dark ">
                        {{ $Cars_Param->img_patch }}
                    </div>
                    <div class="text-dark ">
                        {{ $Cars_Param->was_rented }}
                    </div>
                    <div class="text-dark ">
                        {{ $DB_BodyTypes_param }}
                    </div>
                </div>

                @php
            }
        }
    @endphp

</div>
@endsection
