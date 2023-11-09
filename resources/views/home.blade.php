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
    <div class="mb-4">
        <select class="form-control mb-2">
            <option selected>Марка (неопределен)</option>
            @if(count($Brands))
                @foreach($Brands as $brand)
                    <option>{{ $brand->brand_name }}</option>
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
    </div>

    <div class="mb-4">
        <select class="form-control mb-2">
            <option selected>Тип двигателя(неопределен)</option>
            @if(count($EngineTypes))
                @foreach($EngineTypes as $engin_type)
                    <option>{{ $engin_type->engine_type_name }}</option>
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
    </div>

    <div class="mb-4">
        <select class="form-control mb-2">
            <option selected>Тип кузова(неопределен)</option>
            @if(count($BodyTypes))
                @foreach($BodyTypes as $body_type)
                    <option>{{ $body_type->body_type_name }}</option>
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
    </div>

    <div class="mb-4">
        <select class="form-control mb-2">
            <option selected>Модель(неопределенна)</option>
            @if(count($Model))
                @foreach($Model as $Model_type)
                    <option>{{ $Model_type->model_name}}</option>
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
    </div>

</div>
@endsection
