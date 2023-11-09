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

    <!-- Харрактеристики -->
    @php
        $GET_Brands = $_GET['Brands'] ?? "";
        echo $GET_Brands
    @endphp
    <div class="mb-4">
        <form method="get" action="/home" id="Brands">
            <select class="form-control mb-2" name="Brands" onchange="document.getElementById('Brands').submit()">
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
            @if ( Auth::user()->is_admin )
                <form class="d-flex flex-row justify-content-end ">
                    <div class="mr-2">
                        <input type="text" class="form-control col-12" id="inputPassword2" placeholder="Добавить новый тип">
                    </div>
                    <div class="">
                        <button class="btn btn-outline-primary" type="button">Добавить</button>
                    </div>
                </form>
            @endif
        </form>
    </div>

    @php
        $GET_BodyTypes = $_GET['BodyTypes'] ?? "";
        echo  $GET_BodyTypes
    @endphp
    <div class="mb-4">
        <form method="get" action="/home" id="BodyTypes">
            <select class="form-control mb-2" name="BodyTypes" onchange="document.getElementById('BodyTypes').submit()">
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
            @if ( Auth::user()->is_admin )
                <form class="d-flex flex-row justify-content-end ">
                    <div class="mr-2">
                        <input type="text" class="form-control col-12" id="inputPassword2" placeholder="Добавить ">
                    </div>
                    <div class="">
                        <button class="btn btn-outline-primary" type="button">Добавить</button>
                    </div>
                </form>
            @endif
        </form>
    </div>

</div>
@endsection
