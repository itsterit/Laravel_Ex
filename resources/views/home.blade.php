@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row  mb-5 mt-5">
        <div class="col-md-8">
            <div class="">
                <div class="text-primary">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1>
                        Hi {{ Auth::user()->name }}, you are logged in!!!
                    </h1>

                    @if ( Auth::user()->is_admin )
                        <div class="text-success">
                            (Активирован статус администратора)
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    @php
        $GET_BodyTypes = $_GET['BodyTypes']   ?? "";
        $GET_Brands    = $_GET['Brands']      ?? "";
        $GET_Engine    = $_GET['EngineTypes'] ?? "";
        $GET_Model     = $_GET['Model']       ?? "";
    @endphp
    <div class="mb-4">
        <form method="get" action="/StoreDataHandler" id="user_car_config">

            <!-- бренд -->
            <select class="form-control mb-2" name="Brands" onchange="document.getElementById('user_car_config').submit()">
                @if( $GET_Brands != "" )
                    <option  value="-1" selected>Марка (неопределен)</option>
                @else
                    <option value="-1" >Марка (неопределен)</option>
                @endif
                @if(count($Brands))
                    @foreach($Brands as $brand)
                        @if( $GET_Brands ==  $brand->brand_id)
                            <option selected value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                        @else
                            <option value="{{ $brand->brand_id }}">{{ $brand->brand_name }}</option>
                        @endif
                    @endforeach
                @endif
            </select>

            <!-- тип кузова -->
            <select class="form-control mb-2" name="BodyTypes" onchange="document.getElementById('user_car_config').submit()">
                @if( $GET_BodyTypes != "" )
                    <option value="-1" selected>Тип кузова(неопределен)</option>
                @else
                    <option value="-1" >Тип кузова(неопределен)</option>
                @endif
                @if(count($BodyTypes))
                    @foreach($BodyTypes as $body_type)
                        @if( $GET_BodyTypes ==  $body_type->body_type_id)
                            <option selected value="{{ $body_type->body_type_id }}">{{ $body_type->body_type_name }}</option>
                        @else
                            <option value="{{ $body_type->body_type_id }}">{{ $body_type->body_type_name }}</option>
                        @endif
                    @endforeach
                @endif
            </select>

            <!-- тип двигателя -->
            <select class="form-control mb-2" name="EngineTypes" onchange="document.getElementById('user_car_config').submit()">
                @if( $GET_Engine != "" )
                    <option value="-1" selected>Тип двигателя(неопределен)</option>
                @else
                    <option value="-1" >Тип двигателя(неопределен)</option>
                @endif
                @if(count($EngineTypes))
                    @foreach($EngineTypes as $Engine_Types)
                        @if( $GET_Engine ==  $Engine_Types->engine_type_id)
                            <option selected value="{{ $Engine_Types->engine_type_id }}">{{ $Engine_Types->engine_type_name }}</option>
                        @else
                            <option value="{{ $Engine_Types->engine_type_id }}">{{ $Engine_Types->engine_type_name }}</option>
                        @endif
                    @endforeach
                @endif
            </select>

            <!-- модель -->
            <select class="form-control mb-2" name="Model" onchange="document.getElementById('user_car_config').submit()">             
                @if( $GET_Model != "" )
                    <option value="-1" selected>Модель(неопределенна)</option>
                @else
                    <option value="-1" >Модель(неопределенна)</option>
                @endif
                @if(count($Model))
                    @foreach($Model as $Model_Types)
                        @if(    ($GET_Brands != "" && $GET_Brands != -1)   ||   ($GET_BodyTypes != "" && $GET_BodyTypes != -1)    ||   ($GET_Engine != "" && $GET_Engine != -1)     )
                            @if(    
                                    (($GET_Brands    == $Model_Types->car_brand_id)  || ($GET_Brands    == "" || $GET_Brands    == -1)) &&
                                    (($GET_BodyTypes == $Model_Types->car_body_id)   || ($GET_BodyTypes == "" || $GET_BodyTypes == -1)) &&
                                    (($GET_Engine    == $Model_Types->car_engine_id) || ($GET_Engine    == "" || $GET_Engine    == -1))
                                )
                                <!-- вывод выбранного параметра определенного настройками -->
                                @if( $GET_Model ==  $Model_Types->model_id)
                                    <option selected value="{{ $Model_Types->model_id }}">{{ $Model_Types->model_name }}</option>
                                @else
                                    <option value="{{ $Model_Types->model_id }}">{{ $Model_Types->model_name }}</option>
                                @endif
                            @endif
                        <!-- вывод всего т.к параметры не определены -->
                        @else
                            @if( $GET_Model ==  $Model_Types->model_id)
                                <option selected value="{{ $Model_Types->model_id }}">{{ $Model_Types->model_name }}</option>
                            @else
                                <option value="{{ $Model_Types->model_id }}">{{ $Model_Types->model_name }}</option>
                            @endif
                        @endif
                    @endforeach
                @endif
            </select>

        </form>
    </div>

</div>
@endsection
