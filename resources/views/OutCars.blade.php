@extends('layouts.app')

@section('content')


<div class="container d-flex flex-wrap justify-content-evenly">
    
    <div class="container mb-5 mt-3">
        <div>
            <div class="col-12 p-5" style="background-image: url(./img/OutCarLogo.jpg); background-position: center; background-size: cover;">
                <h1 class="text-white" style="opacity: 1.5;">
                    Не знаете что выбрать? Смотрите 
                        <a class="text-primary">статистику аренды</a>
                    по выбранной категории и вы точно сможете определиться!
                </h1>
            </div>
        </div>
    </div>
    @php
        $GET_BodyTypes         = $_GET['BodyTypes']           ?? "";
        $GET_Brands            = $_GET['Brands']              ?? "";
        $GET_Engine            = $_GET['EngineTypes']         ?? "";
        $GET_IsGoStoreView     = $_GET['IsGoStoreView']       ?? "";
        $DB_EngineTypes = "";
        $DB_BodyTypes   = "";
        $DB_Brands      = "";       
        $Cars      = DB::select('select * from car_stores where 1');
        $CarsParam = DB::select('SELECT `car_id`, `car_model_id`, `car_info`, `was_rented`, `rent_price`, `img_patch`  FROM `car_stores` WHERE 1');


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
            
                <div class="col-11 col-sm-4 mb-4">
                    <div class="text-dark d-flex">
                        <div class="d-flex flex-column border border">
                            @if( $Cars_Param->was_rented )
                                <a class="text-dark w-100 mb-3" style="background: black;">
                            @else    
                                <a class="text-dark w-100 mb-3" style="background: black;" href="/RentAct?SelCarId={{ $Cars_Param->car_id }}">
                            @endif
                                @if( $Cars_Param->was_rented )
                                    <img src="./img/{{ $Cars_Param->img_patch }}" class="img-fluid rounded-0" alt=".img" style="height: 300px; object-fit: cover; opacity: 0.4;">
                                @else    
                                    <img src="./img/{{ $Cars_Param->img_patch }}" class="img-fluid rounded-0" alt=".img" style="height: 300px; object-fit: cover;">
                                @endif
                            </a>                       
                            <div class="text-dark flex-column">

                                <table class="table table-sm table-borderless">
                                    <tbody>
                                        <tr>
                                            <td>Марка</td>
                                            <td>{{ $DB_Brands_param }}</td>
                                        </tr>
                                        <tr>
                                            <td>Тип кузова</td>
                                            <td>{{ $DB_BodyTypes_param }}</td>
                                        </tr>
                                        <tr>
                                            <td>Тип двигателя</td>
                                            <td>{{ $DB_EngineTypes_param }}</td>
                                        </tr>
                                        <tr>
                                            <td>Модель</td>
                                            <td>{{ $Cars_Param->car_info }}</td>
                                        </tr>
                                        <tr>
                                            <td>стоимость</td>
                                            <td>{{ $Cars_Param->rent_price }}/ч</td>
                                        </tr>
                                        <tr>
                                            <td>Статус</td>
                                                @if( $Cars_Param->was_rented )
                                                    <td>Арендовано</td>
                                                @else    
                                                    <td>Не арендовано</td>
                                                @endif
                                        </tr>
                                    </tbody>
                                </table>

                            </div>
                            <!-- <div class="text-dark w-100">
                                @if( $Cars_Param->was_rented )
                                    <button type="button" class="btn btn-danger w-100 rounded-0">{{ $Cars_Param->rent_price }}/ч</button>
                                @else
                                    <button type="button" class="btn btn-success w-100 rounded-0">{{ $Cars_Param->rent_price }}/ч</button>
                                @endif
                            </div>     -->
                        </div>
                    </div>
                </div>

                @php
            }
        }
    @endphp

</div>
@endsection
