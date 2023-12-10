@extends('layouts.app')
@section('content')

@php
    $GET_SelCarID  = $_GET['SelCarId'] ?? "";
@endphp

@if( $GET_SelCarID != "" )
    <div class="container my-5">
        @php
            $SelCar = DB::select('SELECT `car_id`, `car_model_id`, `car_info`, `was_rented`, `rent_price`, `img_patch`  FROM `car_stores` WHERE 1   ');
            foreach($SelCar as $Car)
            {
                if( $Car->car_id ==  $GET_SelCarID)
                {
                    @endphp
                    <div class="col-12 mb-4">
                        <div class="text-dark d-flex flex-column flex-md-row col-12">
                            <img src="./img/{{ $Car->img_patch }}" class="rounded-0 col-12 col-md-6 p-0 mr-0 mr-md-5" alt=".img" style="height: 300px; object-fit: cover;">
                            <table class="table table-sm table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Арендуемое авто</td>
                                        <td>{{ $Car->car_info }}</td>
                                    </tr>
                                    <tr>
                                        <td>Стоимость в час</td>
                                        <td>{{ $Car->rent_price }}</td>
                                    </tr>
                                    <tr>
                                        <td>Начало аренды</td>
                                        <td>--/--/--</td>
                                    </tr>
                                    <tr>
                                        <td>Общая стоимость аренды</td>
                                        <td>--</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @php
                    break;
                }
            }
        @endphp
    </div>
@else    
    <script>
        window.location.href = '/';
    </script>
@endif

@endsection