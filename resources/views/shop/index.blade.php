@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                @if(!empty($my_shop))
                <div class="panel panel-default">
                    <div class="panel-heading">The shop of {{ $my_shop->name}}</div>
                    <div class="panel-body">
                            {{ $my_shop->name}},
                            {{ $my_shop->address}},
                            {{ $my_shop->email}},
                    </div>
                </div>
                 <a href="{{route('shop.create')}}"> add a shop </a>
                @else
                    <a href="{{route('shop.create')}}"> create your shop </a>
                @endif
            </div>
        </div>
    </div>
@endsection
