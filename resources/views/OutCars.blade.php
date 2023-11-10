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
                // бренд
                $DB_Brands_param = "";
                $DB_Brands_      = DB::select('SELECT `brand_name` FROM `brands` WHERE brand_id = ?', [$DB_Brands]);
                foreach($DB_Brands_ as $data)
                {
                    $DB_Brands_param = $data->brand_name;
                    break;
                }

                // тип кузова
                $DB_BodyTypes_param = "";
                $DB_BodyTypes_      = DB::select('SELECT `body_type_name` FROM `bodytypes` WHERE body_type_id = ?', [$DB_BodyTypes]);
                foreach($DB_BodyTypes_ as $data)
                {
                    $DB_BodyTypes_param = $data->body_type_name;
                    break;
                }

                // тип двигателя 
                $DB_EngineTypes_param = "";
                $DB_EngineTypes_      = DB::select('SELECT `engine_type_name` FROM `enginetypes` WHERE engine_type_id = ?', [$DB_EngineTypes]);
                foreach($DB_EngineTypes_ as $data)
                {
                    $DB_EngineTypes_param = $data->engine_type_name;
                    break;
                }
                @endphp

                <div class="d-flex flex-column">
                    <div class="text-dark mb-5 d-flex flex-row">
                        <div class="text-dark mb-5">
                            <img src="{{ $Cars_Param->img_patch }}" class="rounded float-start" alt=".img">
                        </div>
                        
                        <div class="text-dark mb-5 flex-column">
                            <div class="text-dark ">
                                Марка: {{ $DB_Brands_param }}
                            </div>                        
                            <div class="text-dark ">
                                Тип кузова: {{ $DB_BodyTypes_param }}
                            </div>
                            <div class="text-dark ">
                                Тип двигателя: {{ $DB_EngineTypes_param }}
                            </div>
                            <div class="text-dark ">
                                модель: {{ $Cars_Param->car_info }}
                            </div>
                            <div class="text-dark ">
                                @if( $Cars_Param->was_rented )
                                    <button type="button" class="btn btn-danger">{{ $Cars_Param->rent_price }}</button>
                                @else
                                    <button type="button" class="btn btn-success">{{ $Cars_Param->rent_price }}</button>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                @php
            }
        }
    @endphp

</div>
@endsection
