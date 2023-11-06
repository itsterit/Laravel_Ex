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
    <div>
        <select class="form-control mb-2">
            <option disabled selected>Тип двигателя</option>
            @if(count($Enginetypes))
                @foreach($Enginetypes as $engin_type)
                    <option>{{ $engin_type->engine_type_name }}</option>
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
    </div>
</div>
@endsection
